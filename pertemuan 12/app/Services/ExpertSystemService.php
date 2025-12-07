<?php

namespace App\Services;

use App\Models\Major;
use App\Models\Rule;

class ExpertSystemService
{
    public function calculate(array $answers): array
    {
        $majors = Major::with('rules')->get();
        $scores = [];

        foreach ($majors as $major) {
            $totalScore = 0;
            $matchedRules = 0;
            $maxPossibleScore = 0;

            foreach ($major->rules as $rule) {
                if (isset($answers[$rule->question_id])) {
                    $answerValue = $answers[$rule->question_id];
                    
                    // Hitung maksimal nilai yang mungkin
                    $maxPossibleScore += (3 * $rule->weight); // 3 adalah nilai maksimal jawaban
                    
                    // Jika jawaban memenuhi minimal value
                    if ($answerValue >= $rule->min_value) {
                        $score = $answerValue * $rule->weight;
                        $totalScore += $score;
                        $matchedRules++;
                    }
                }
            }

            // Hitung score normalisasi (0-100)
            if ($maxPossibleScore > 0) {
                $normalizedScore = ($totalScore / $maxPossibleScore) * 100;
                $scores[] = [
                    'major' => $major,
                    'score' => round($normalizedScore, 2),
                    'total_score' => $totalScore,
                    'matched_rules' => $matchedRules
                ];
            }
        }

        // Urutkan dari nilai tertinggi
        usort($scores, function ($a, $b) {
            return $b['score'] <=> $a['score'];
        });

        // Ambil 3 teratas
        $topResults = array_slice($scores, 0, 3);

        return $topResults;
    }
}