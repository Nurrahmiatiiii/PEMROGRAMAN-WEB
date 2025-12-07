<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Major;
use App\Models\Question;
use App\Models\Rule;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create Admin User
        User::create([
            'name' => 'Admin SMK',
            'email' => 'admin@smk.com',
            'password' => Hash::make('admin123'),
        ]);

        // Create 8 Majors
        $majors = [
            [
                'code' => 'RPL',
                'name' => 'Rekayasa Perangkat Lunak',
                'description' => 'Jurusan yang mempelajari pengembangan aplikasi dan software.',
                'subjects' => 'Pemrograman, Database, Algoritma, UI/UX Design, Web Development',
                'career_prospects' => 'Software Developer, Web Developer, Mobile App Developer, Database Administrator'
            ],
            [
                'code' => 'TKJ',
                'name' => 'Teknik Komputer dan Jaringan',
                'description' => 'Jurusan yang fokus pada jaringan komputer dan hardware.',
                'subjects' => 'Jaringan Komputer, Troubleshooting, Perakitan PC, Keamanan Jaringan',
                'career_prospects' => 'Network Engineer, IT Support, System Administrator, Teknisi Komputer'
            ],
            [
                'code' => 'DKV',
                'name' => 'Desain Komunikasi Visual',
                'description' => 'Jurusan untuk siswa yang tertarik desain grafis dan multimedia.',
                'subjects' => 'Desain Grafis, Fotografi, Editing Video, Animasi, Ilustrasi Digital',
                'career_prospects' => 'Graphic Designer, Video Editor, Animator, Fotografer, UI Designer'
            ],
            [
                'code' => 'TKR',
                'name' => 'Teknik Kendaraan Ringan',
                'description' => 'Jurusan yang mempelajari otomotif dan kendaraan bermotor.',
                'subjects' => 'Mesin Kendaraan, Sistem Kelistrikan, Service Berkala, Troubleshooting Otomotif',
                'career_prospects' => 'Mekanik Otomotif, Service Advisor, Teknisi Bengkel, Sales Otomotif'
            ],
            [
                'code' => 'AK',
                'name' => 'Akuntansi',
                'description' => 'Jurusan untuk siswa yang teliti dan suka berhitung.',
                'subjects' => 'Akuntansi Dasar, Perpajakan, Pengelolaan Keuangan, Administrasi Bisnis',
                'career_prospects' => 'Akuntan, Staff Administrasi, Kasir, Auditor Junior, Tax Consultant'
            ],
            [
                'code' => 'TB',
                'name' => 'Tata Boga',
                'description' => 'Jurusan untuk siswa yang suka memasak dan kuliner.',
                'subjects' => 'Teknik Memasak, Baking, Penyajian Makanan, Manajemen Dapur, Nutrisi',
                'career_prospects' => 'Chef, Baker, Food Stylist, Wirausaha Kuliner, Catering Manager'
            ],
            [
                'code' => 'TBS',
                'name' => 'Tata Busana',
                'description' => 'Jurusan untuk siswa yang tertarik fashion dan menjahit.',
                'subjects' => 'Pola Pakaian, Teknik Menjahit, Desain Fashion, Textile Knowledge',
                'career_prospects' => 'Fashion Designer, Tailor, Pattern Maker, Stylist, Wirausaha Fashion'
            ],
            [
                'code' => 'KP',
                'name' => 'Keperawatan',
                'description' => 'Jurusan untuk siswa yang suka membantu orang lain.',
                'subjects' => 'Anatomi Fisiologi, Asuhan Keperawatan, Farmakologi, Komunikasi Kesehatan',
                'career_prospects' => 'Perawat, Caregiver, Admin Rumah Sakit, Edukator Kesehatan'
            ]
        ];

        foreach ($majors as $major) {
            Major::create($major);
        }

        // Create 25 Questions (Update dari wawancara)
        $questions = [
            ['question_text' => 'Apakah Anda memiliki minat terhadap komputer dan teknologi?', 'category' => 'teknologi', 'order' => 1],
            ['question_text' => 'Apakah Anda tertarik membuat aplikasi atau belajar logika pemrograman?', 'category' => 'teknologi', 'order' => 2],
            ['question_text' => 'Apakah Anda menyukai desain grafis, editing video, fotografi, atau animasi?', 'category' => 'kreatif', 'order' => 3],
            ['question_text' => 'Apakah Anda tertarik dengan jaringan komputer atau perakitan komputer?', 'category' => 'teknologi', 'order' => 4],
            ['question_text' => 'Apakah Anda senang memperbaiki komputer atau troubleshooting perangkat?', 'category' => 'teknis', 'order' => 5],
            ['question_text' => 'Apakah Anda tertarik dengan perkembangan teknologi baru seperti AI, robotik?', 'category' => 'teknologi', 'order' => 6],
            ['question_text' => 'Apakah Anda cepat memahami hal-hal teknis?', 'category' => 'teknis', 'order' => 7],
            ['question_text' => 'Apakah Anda memiliki kebiasaan membongkar pasang barang atau mesin?', 'category' => 'teknis', 'order' => 8],
            ['question_text' => 'Apakah Anda tertarik pada kendaraan dan sistem otomotif?', 'category' => 'teknis', 'order' => 9],
            ['question_text' => 'Apakah Anda suka kelistrikan atau merakit rangkaian elektronik?', 'category' => 'teknis', 'order' => 10],
            ['question_text' => 'Apakah Anda suka praktek langsung di bengkel atau workshop?', 'category' => 'praktek', 'order' => 11],
            ['question_text' => 'Apakah Anda teliti dan suka berhitung?', 'category' => 'administratif', 'order' => 12],
            ['question_text' => 'Apakah Anda tertarik pada administrasi atau keuangan?', 'category' => 'administratif', 'order' => 13],
            ['question_text' => 'Apakah kemampuan komunikasi Anda baik?', 'category' => 'soft_skill', 'order' => 14],
            ['question_text' => 'Apakah Anda suka memasak, baking, atau kuliner?', 'category' => 'kreatif', 'order' => 15],
            ['question_text' => 'Apakah Anda suka menjahit, membuat pola, atau tertarik fashion design?', 'category' => 'kreatif', 'order' => 16],
            ['question_text' => 'Apakah Anda memiliki kemampuan seni visual?', 'category' => 'kreatif', 'order' => 17],
            ['question_text' => 'Apakah Anda suka membantu orang lain?', 'category' => 'soft_skill', 'order' => 18],
            ['question_text' => 'Apakah Anda mampu bekerja dalam tim?', 'category' => 'soft_skill', 'order' => 19],
            ['question_text' => 'Apakah Anda tertarik dengan bidang kesehatan?', 'category' => 'kesehatan', 'order' => 20],
            ['question_text' => 'Apakah Anda suka bekerja dengan alat-alat teknis?', 'category' => 'teknis', 'order' => 21],
            ['question_text' => 'Apakah Anda tertarik dengan perkembangan kurikulum coding?', 'category' => 'teknologi', 'order' => 22],
            ['question_text' => 'Apakah Anda memiliki motivasi yang jelas untuk tujuan karir?', 'category' => 'motivasi', 'order' => 23],
            ['question_text' => 'Apakah Anda ingin mengetahui prospek kerja sebelum memilih jurusan?', 'category' => 'motivasi', 'order' => 24],
            ['question_text' => 'Apakah Anda senang dengan kegiatan yang melibatkan kerja tim?', 'category' => 'soft_skill', 'order' => 25],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }

        // Create Simple Rules (Forward Chaining) - Update berdasarkan wawancara
        $rules = [
            // RPL (Update: coding lebih dominan)
            ['question_id' => 1, 'major_id' => 1, 'min_value' => 2, 'weight' => 3],
            ['question_id' => 2, 'major_id' => 1, 'min_value' => 2, 'weight' => 5], // ++
            ['question_id' => 7, 'major_id' => 1, 'min_value' => 2, 'weight' => 2],
            ['question_id' => 22, 'major_id' => 1, 'min_value' => 2, 'weight' => 4], // ++
            ['question_id' => 23, 'major_id' => 1, 'min_value' => 2, 'weight' => 3],
            
            // TKJ (Update: troubleshooting lebih dominan)
            ['question_id' => 1, 'major_id' => 2, 'min_value' => 2, 'weight' => 4],
            ['question_id' => 4, 'major_id' => 2, 'min_value' => 2, 'weight' => 5],
            ['question_id' => 5, 'major_id' => 2, 'min_value' => 2, 'weight' => 5], // ++
            ['question_id' => 6, 'major_id' => 2, 'min_value' => 2, 'weight' => 4],
            ['question_id' => 21, 'major_id' => 2, 'min_value' => 2, 'weight' => 3],
            
            // DKV
            ['question_id' => 3, 'major_id' => 3, 'min_value' => 2, 'weight' => 5],
            ['question_id' => 15, 'major_id' => 3, 'min_value' => 2, 'weight' => 3],
            ['question_id' => 16, 'major_id' => 3, 'min_value' => 2, 'weight' => 2],
            ['question_id' => 17, 'major_id' => 3, 'min_value' => 2, 'weight' => 4],
            ['question_id' => 25, 'major_id' => 3, 'min_value' => 2, 'weight' => 2],
            
            // TKR
            ['question_id' => 8, 'major_id' => 4, 'min_value' => 2, 'weight' => 4],
            ['question_id' => 9, 'major_id' => 4, 'min_value' => 2, 'weight' => 5],
            ['question_id' => 10, 'major_id' => 4, 'min_value' => 2, 'weight' => 3],
            ['question_id' => 11, 'major_id' => 4, 'min_value' => 2, 'weight' => 4],
            ['question_id' => 21, 'major_id' => 4, 'min_value' => 2, 'weight' => 3],
            
            // Akuntansi
            ['question_id' => 12, 'major_id' => 5, 'min_value' => 2, 'weight' => 5],
            ['question_id' => 13, 'major_id' => 5, 'min_value' => 2, 'weight' => 4],
            ['question_id' => 14, 'major_id' => 5, 'min_value' => 2, 'weight' => 3],
            ['question_id' => 23, 'major_id' => 5, 'min_value' => 2, 'weight' => 3],
            
            // Tata Boga
            ['question_id' => 15, 'major_id' => 6, 'min_value' => 2, 'weight' => 5],
            ['question_id' => 11, 'major_id' => 6, 'min_value' => 2, 'weight' => 3],
            ['question_id' => 24, 'major_id' => 6, 'min_value' => 2, 'weight' => 2],
            ['question_id' => 25, 'major_id' => 6, 'min_value' => 2, 'weight' => 3],
            
            // Tata Busana
            ['question_id' => 16, 'major_id' => 7, 'min_value' => 2, 'weight' => 5],
            ['question_id' => 17, 'major_id' => 7, 'min_value' => 2, 'weight' => 4],
            ['question_id' => 25, 'major_id' => 7, 'min_value' => 2, 'weight' => 3],
            ['question_id' => 3, 'major_id' => 7, 'min_value' => 2, 'weight' => 2],
            
            // Keperawatan
            ['question_id' => 18, 'major_id' => 8, 'min_value' => 2, 'weight' => 5],
            ['question_id' => 19, 'major_id' => 8, 'min_value' => 2, 'weight' => 4],
            ['question_id' => 20, 'major_id' => 8, 'min_value' => 2, 'weight' => 4],
            ['question_id' => 14, 'major_id' => 8, 'min_value' => 2, 'weight' => 3],
            ['question_id' => 25, 'major_id' => 8, 'min_value' => 2, 'weight' => 3],
        ];

        foreach ($rules as $rule) {
            Rule::create($rule);
        }
    }
}