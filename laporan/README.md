 # 1. Kode 2A menggunakan tag
<HTML> 
<HEAD><TITLE> contoh JavaScript</TITLE> 
<script language="JavaScript"> 
document.write("Program JavaSript Aku di kepala"); 
</script> 
</HEAD> 
<BODY> 
<script language="JavaScript"> 
document.write("Program JavaSript Aku di body"); 
</script> 
</BODY> 
</HTML>

# Analisis
Kode ini menampilkan teks menggunakan document.write() di dalam elemen <HEAD> dan <BODY>, namun penempatan di <HEAD> kurang tepat karena bagian tersebut seharusnya hanya berisi metadata, bukan konten yang ditampilkan, sehingga struktur HTML menjadi tidak ideal; penempatan script di <BODY> lebih sesuai untuk menampilkan isi halaman, dan penggunaan atribut language="JavaScript" pada tag <script> sudah usang dan sebaiknya dihilangkan agar sesuai standar HTML modern.

# output
![alt text](<output code/output2A.png>)

 # 2. Kode 2C Event tertentu
<!DOCTYPE html> 
<html> 
<head> 
 <title>Belajar Javascript : Mengenal Event Pada Javascript</title> 
</head> 
<body> 
 <h1>Mengenal Event Pada Javascript</h1> 
 <h2> Perograman WEB Event one click</h2> 
 <!-- memberikan event pada element tombol --> 
 <button onclick="tampilkan_nama()">klik disini </button> 
 
 <!-- id hasil --> 
 <div id="hasil"></div> 
 
 <script> 
 // membuat function tampilkan_nama 
 function tampilkan_nama(){ 
 document.getElementById("hasil").innerHTML =
"<h3>Nama Saya Adalah Andi Akram Nur Risal</h3>"; 
 } 
</script> 
</body> 
</html>

# Analisis
Kode HTML ini memperlihatkan contoh sederhana penggunaan event di JavaScript, yaitu event onclick pada sebuah tombol. Saat tombol diklik, fungsi tampilkan_nama() akan dipanggil dan mengganti isi elemen <div> dengan id="hasil" menjadi sebuah teks yang menampilkan nama. Dengan cara ini, interaksi pengguna dapat memicu perubahan konten halaman secara dinamis tanpa perlu memuat ulang halaman. Struktur kode sudah sesuai standar dengan pemisahan fungsi JavaScript di dalam tag <script> dan penggunaan atribut event langsung pada elemen tombol.
# output
[text](README.md) ![text](<output code/output2 2C.png>) 
![text](<output code/output1 2C.png>)

 # 3. Kode 2D Contoh Sederhana
<HTML> 
<HEAD><TITLE> contoh sederhana JavaScript</TITLE></HEAD> 
</BODY> 
<script language="JavaScript"> 
document.write("Selamat Belajar Angkatan 2019","<br>"); 
document.write("JavaScript Pemrograman WEB Teknik Komputer"); 
</script> 
</BODY> 
</HTML>

# Analisis
Kode ini adalah halaman HTML yang berisi skrip JavaScript di dalam tag <script>. JavaScript tersebut menggunakan fungsi document.write untuk menampilkan dua teks berbeda secara berurutan di halaman web, dengan baris pertama mengandung tag <br> agar teks berikutnya tampil di baris baru. Struktur HTML menunjukkan adanya tag <HEAD> dan <TITLE>, tetapi hanya ada tag penutup </BODY> tanpa tag pembuka <BODY>. Atribut language="JavaScript" digunakan di tag <script>. Fungsi document.write dipanggil dua kali, yang masing-masing menampilkan teks langsung ke dokumen saat halaman dimuat.

# output
![alt text](<output code/output2D.png>)

 # 4. Kode 3 Memasukkan Data
<HTML> 
<HEAD> 
<TITLE>Masukan Data</TITLE> 
</HEAD> 
<BODY> 
<SCRIPT LANGUAGE = "JavaScript"> 
<!-- 
 var nama = prompt("Siapa nama Anda?"); 
 document.write("Hai, " + nama); 
//--> 
</SCRIPT> 
</BODY> 
</HTML>

# Analisis
Kode HTML ini memuat skrip JavaScript yang meminta input nama pengguna melalui kotak dialog prompt. Nilai yang dimasukkan oleh pengguna kemudian disimpan dalam variabel nama dan ditampilkan di halaman menggunakan document.write dengan teks sapaan "Hai, " diikuti nama tersebut. Bagian JavaScript dibungkus dalam komentar HTML (<!-- dan //-->), yang dulunya digunakan untuk menyembunyikan skrip dari browser lama yang tidak mendukung JavaScript. Struktur HTML-nya terdiri dari tag <HEAD> yang berisi judul halaman, dan tag <BODY> tempat skrip dijalankan serta hasilnya ditampilkan.
 
 # output
 ![alt text](<output code/output1 3.png>) 
 ![alt text](<output code/output2 3.png>)

 # 5. Kode 4 Jendela Peringatan dan Konfirmasi
 <HTML> 
<HEAD> 
<TITLE>Konfirmasi</TITLE> 
</HEAD> 
<BODY> 
<SCRIPT LANGUAGE = "JavaScript"> 
<!-- 
 var jawaban = window.confirm( 
 "Apakah anda sudah yakin ?"); 
 document.write("Jawaban Anda: " + jawaban); 
//--> 
</SCRIPT> 
</BODY> 
</HTML>

# Analisis
Kode HTML ini menampilkan sebuah dialog konfirmasi menggunakan window.confirm() yang meminta pengguna menjawab “Apakah anda sudah yakin?”. Fungsi confirm akan mengembalikan nilai boolean true jika pengguna menekan OK, dan false jika menekan Cancel. Nilai ini disimpan dalam variabel jawaban dan kemudian langsung ditampilkan ke halaman menggunakan document.write(). Penggunaan document.write() di sini menyebabkan halaman menampilkan teks “Jawaban Anda: true” atau “Jawaban Anda: false” secara langsung menggantikan konten yang sebelumnya ada pada halaman, karena script dijalankan saat halaman dimuat. Komentar HTML <!-- dan //--> digunakan untuk menyembunyikan kode JavaScript pada browser lama, namun hal ini sudah tidak diperlukan lagi. Selain itu, atribut LANGUAGE="JavaScript" juga sudah usang dan bisa dihilangkan. Kode ini berfungsi untuk menangkap dan menampilkan respons pengguna terhadap konfirmasi, tetapi menggunakan metode lama untuk manipulasi konten halaman. Jika ingin hasil yang lebih modern dan aman, sebaiknya hasil konfirmasi dimasukkan ke dalam elemen HTML menggunakan DOM manipulation daripada document.write().

# output
![alt text](<output code/output1 4.png>) 
![alt text](<output code/output2 4.png>)

 # 6. Kode 5A Mendeklarasikan Variabel
<script language="Javascript"> 
<!-- 
var VariabelKu; 
var VariabelKu2 = 3; 
VariabelKu = 1234; 
document.write(VariabelKu*VariabelKu2); 
// --> 
</script>

# Analisis
Kode JavaScript ini mendefinisikan dua variabel: VariabelKu yang kemudian diisi dengan nilai 1234, dan VariabelKu2 yang sudah diinisialisasi dengan nilai 3. Selanjutnya, script menghitung hasil perkalian antara VariabelKu dan VariabelKu2 (1234 × 3 = 3702) lalu menampilkan hasilnya menggunakan document.write(). Penggunaan komentar <!-- dan //--> serta atribut language="Javascript" sudah dianggap usang dan tidak diperlukan lagi di kode modern. Meski fungsional, pemakaian document.write() langsung menulis ke halaman saat pemuatan, yang bisa menghapus konten yang sudah ada jika digunakan setelah halaman selesai dimuat. Secara keseluruhan, script ini sederhana dan menampilkan hasil perkalian dua variabel secara langsung ke halaman.

# output
![alt text](<output code/output5A.png>)

 # 7. Kode 5B Global dan Lokal
<SCRIPT language= "Javascript" > 
<!-- 
var a = 12; 
var b = 4; 
function Perkalian_Dengan2(b) { 
a = b * 2; 
return a; 
} 
document.write( "Dua kali dari ",b," adalah ",Perkalian_Dengan2(b)); 
document.write( "Nilai dari a adalah" ,a); 
//--> 
</SCRIPT>

# Analisis
Kode ini mendefinisikan dua variabel, a dengan nilai 12 dan b dengan nilai 4. Fungsi Perkalian_Dengan2 menerima parameter b, lalu mengalikan nilai tersebut dengan 2 dan menyimpan hasilnya ke variabel global a, kemudian mengembalikan nilai a. Selanjutnya, kode menulis ke halaman hasil dari fungsi tersebut menggunakan document.write, diikuti dengan menampilkan nilai terakhir dari a. Karena b adalah 4, fungsi mengalikan 4 × 2 menjadi 8, sehingga output pertama adalah “Dua kali dari 4 adalah 8”, dan output kedua adalah “Nilai dari a adalah 8”. Namun, penggunaan document.write dengan beberapa argumen seperti ini sebenarnya tidak berfungsi sesuai harapan karena document.write hanya menerima satu string, sehingga argumen tambahan tidak akan dipisahkan otomatis. Selain itu, atribut language dan komentar <!-- ... //--> sudah usang. Jika ingin menampilkan beberapa nilai sekaligus, sebaiknya menggunakan operator penggabungan string atau template literal.

# output
![alt text](<output code/output5B.png>)

 # 8. Kode 7 konversi Tipe Data
<HTML> 
<HEAD> 
<TITLE>Konversi Bilangan</TITLE> 
</HEAD> 
<BODY> 
<SCRIPT LANGUAGE ="JavaScript"> 
<!--
 var a =parseInt("27"); 
 document.write("1. "+a+"<BR>"); 
 a = parseInt("27.5"); 
 document.write("2. "+a+"<BR>"); 
 var a = parseInt("27A"); 
 document.write("3. "+a+"<BR>"); 
 a = parseInt("A27.5"); 
 document.write("4. "+a+"<BR>"); 
 var b = parseFloat("27"); 
 document.write("5. "+b+"<BR>"); 
 b = parseFloat("27.5"); 
 document.write("6. "+b+"<BR>"); 
 var b = parseFloat("27A"); 
 document.write("7. "+b+"<BR>"); 
 b = parseFloat("A27.5");
 document.write("8. "+b+"<BR>") 
//->
</SCRIPT> 
</BODY> 
</HTML>

# Analisis
Kode ini mendemonstrasikan perilaku fungsi parseInt dan parseFloat dalam mengonversi string menjadi nilai numerik di JavaScript. Pada bagian pertama, parseInt mengambil string dan mengubahnya menjadi bilangan bulat dengan membaca karakter dari awal hingga bertemu karakter non-digit atau akhir string. Contohnya, "27" dikonversi menjadi 27, "27.5" menjadi 27 karena bagian setelah titik diabaikan, dan "27A" juga menjadi 27 karena pembacaan berhenti saat menemui huruf. Namun, jika string diawali dengan huruf seperti "A27.5", hasil konversi menjadi NaN karena tidak ada angka yang valid di awal. Pada bagian kedua, parseFloat berfungsi mirip namun mendukung angka desimal. Contohnya, "27.5" dikonversi menjadi 27.5, dan "27A" menjadi 27 karena berhenti membaca saat huruf muncul. String yang diawali huruf seperti "A27.5" menghasilkan NaN karena karakter awal tidak valid untuk angka. Dengan kata lain, kedua fungsi ini membaca angka secara berurutan dari awal string, menghentikan konversi saat menemukan karakter yang tidak valid, dan mengembalikan NaN jika karakter pertama tidak bisa dikonversi. Hal ini menunjukkan bagaimana JavaScript melakukan parsing string ke angka dengan pendekatan yang sensitif terhadap posisi karakter valid di dalam string.

# output
![alt text](<output code/output7.png>)

 # 9. Kode 9 Operator Logika dan Pembanding 
 # <HTML>
<HEAD> 
<TITLE>Operator ?</TITLE> 
</HEAD> 
<BODY> 
<SCRIPT LANGUAGE = "JavaScript"> 
<!-- 
 var nilai = prompt("Nilai (0-100): ", 0); 
 var hasil = (nilai >= 60) ? "Lulus" : "Tidak Lulus"; 
 document.write("Hasil: " + hasil); 
//--> 
</SCRIPT> 
</BODY> 
</HTML>

# Analisis
Kode ini menggunakan operator ternary (? :) dalam JavaScript untuk menentukan apakah nilai yang dimasukkan pengguna termasuk kategori "Lulus" atau "Tidak Lulus". Saat halaman dimuat, fungsi prompt menampilkan kotak input yang meminta pengguna memasukkan nilai antara 0 hingga 100. Nilai yang dimasukkan oleh pengguna disimpan dalam variabel nilai, dan kemudian dibandingkan menggunakan kondisi nilai >= 60. Jika kondisi tersebut benar, maka variabel hasil akan berisi string "Lulus", jika tidak maka "Tidak Lulus". Nilai hasil kemudian ditampilkan ke halaman menggunakan document.write.

# output
![text](<output code/output1 9.png>) 
![text](<output code/output2 9.png>)

 # 10. Kode 8 Operator Aritmetika
<HTML> 
<HEAD> 
<TITLE>Operasi Matematika</TITLE> 
</HEAD> 
<BODY>
 <SCRIPT LANGUAGE = "JavaScript"> 
<!-- 
 document.write("2 + 3 = " + (2 + 3) ); 
 document.write("<BR>"); 
 document.write("20 + 3 = " + (20 - 3) ); 
 document.write("<BR>"); 
 document.write("20* 3 = " + (2 * 3) ); 
 document.write("<BR>"); 
 document.write("40 / 3 = " + (40 / 3) ); 
 document.write("<BR>"); 
 //--> 
</SCRIPT> 
</BODY> 
</HTML>   

# Analisis
Kode ini menampilkan hasil operasi matematika menggunakan JavaScript. Operasi pertama adalah penjumlahan 2 + 3, yang menghasilkan 5. Baris kedua menghitung 20 - 3 dan menghasilkan 17. Baris ketiga melakukan perkalian 2 * 3, menghasilkan 6. Terakhir, pembagian 40 / 3 menghasilkan 13.333.... Setiap hasil ditampilkan ke halaman menggunakan document.write dan dipisahkan dengan <br> agar tampil di baris baru.

# output
![alt text](<output code/output8.png>)

11. # Kode Mandiri 1
<!DOCTYPE html>
<html>
<head>
  <title>Konversi Tipe Data</title>
</head>
<body>
  <h2>Belajar Konversi Tipe Data</h2>
  <script>
    let bil1 = parseInt("300");
    document.write("Hasil 1: " + bil1 + "<br>");

    let bil2 = parseInt("56.78");
    document.write("Hasil 2: " + bil2 + "<br>");

    let bil3 = parseInt("200kg");
    document.write("Hasil 3: " + bil3 + "<br>");

    let bil4 = parseInt("Rp500");
    document.write("Hasil 4: " + bil4 + "<br>");

    document.write("<hr>");

    let des1 = parseFloat("45.67");
    document.write("Hasil 5: " + des1 + "<br>");

    let des2 = parseFloat("100");
    document.write("Hasil 6: " + des2 + "<br>");

    let des3 = parseFloat("75.3kg");
    document.write("Hasil 7: " + des3 + "<br>");

    let des4 = parseFloat("kg88.9");
    document.write("Hasil 8: " + des4 + "<br>");
  </script>
</body>
</html>
 
 # Analisis
 Kode ini menampilkan hasil konversi string ke angka menggunakan parseInt dan parseFloat di JavaScript. Pada bagian pertama, parseInt digunakan untuk mengambil angka bulat dari string. "300" menghasilkan 300, "56.78" menghasilkan 56 karena hanya bagian sebelum titik yang dibaca, "200kg" menghasilkan 200, dan "Rp500" menghasilkan NaN karena tidak dimulai dengan angka. Pada bagian kedua, parseFloat digunakan untuk mengambil angka desimal dari string. "45.67" menghasilkan 45.67, "100" menghasilkan 100, "75.3kg" menghasilkan 75.3, dan "kg88.9" menghasilkan NaN karena karakter awal bukan angka. Kode ini menunjukkan bagaimana kedua fungsi membaca angka dari awal string hingga karakter yang tidak bisa dikenali sebagai bagian dari angka.

 # output 
 ![alt text](<output code/output mandiri1.png>)

 # 12. Kode Mandiri 2
 <!DOCTYPE html>
<html>
<head>
  <title>Contoh Array</title>
</head>
<body>
  <h2>Belajar Array di JavaScript</h2>
  <script>
    let buah = ["Mangga", "Apel", "Jeruk", "Pisang"];
    document.write("Isi array buah:<br>");
    for (let i = 0; i < buah.length; i++) {
      document.write((i+1) + ". " + buah[i] + "<br>");
    }

    document.write("<hr>");

    let campuran = [123, "Belajar", true, 9.5];
    document.write("Isi array campuran:<br>");
    for (let j = 0; j < campuran.length; j++) {
      document.write((j+1) + ". " + campuran[j] + " (tipe: " + typeof campuran[j] + ")<br>");
    }
  </script>
</body>
</html>
 
 # Analisis 
 Kode ini menampilkan dua array di JavaScript, yaitu array berisi nama buah dan array dengan elemen campuran berbagai tipe data. Array pertama, buah, berisi empat string: "Mangga", "Apel", "Jeruk", dan "Pisang". Isi array ini ditampilkan menggunakan perulangan for, dengan penomoran dari 1 hingga 4. Setelah itu, array kedua bernama campuran berisi nilai bertipe number, string, boolean, dan float. Melalui perulangan, setiap elemen ditampilkan bersama dengan tipe datanya menggunakan typeof. Kode ini menunjukkan bahwa JavaScript mendukung array yang dapat menyimpan berbagai jenis data sekaligus.

 # output
 ![alt text](<output code/output mandiri2.png>)

 13. # Kode Mandiri 3
 <!DOCTYPE html>
<html>
<head>
  <title>Kalkulator Sederhana</title>
</head>
<body>
  <h2>Kalkulator Sederhana</h2>

  <input type="text" id="layar" readonly style="width:200px"><br><br>

  <button onclick="isi('7')">7</button>
  <button onclick="isi('8')">8</button>
  <button onclick="isi('9')">9</button>
  <button onclick="isi('+')">+</button><br>

  <button onclick="isi('4')">4</button>
  <button onclick="isi('5')">5</button>
  <button onclick="isi('6')">6</button>
  <button onclick="isi('-')">-</button><br>

  <button onclick="isi('1')">1</button>
  <button onclick="isi('2')">2</button>
  <button onclick="isi('3')">3</button>
  <button onclick="isi('*')">*</button><br>

  <button onclick="isi('0')">0</button>
  <button onclick="isi('.')">.</button>
  <button onclick="hitung()">=</button>
  <button onclick="isi('/')">/</button><br>

  <button onclick="hapus()">C</button>

  <script>
    function isi(nilai){
      document.getElementById("layar").value += nilai;
    }
    function hitung(){
      let ekspresi = document.getElementById("layar").value;
      document.getElementById("layar").value = eval(ekspresi);
    }
    function hapus(){
      document.getElementById("layar").value = "";
    }
  </script>
</body>
</html>
  
# Analisis
Kode ini membuat kalkulator sederhana menggunakan HTML dan JavaScript. Terdapat input text sebagai layar kalkulator yang hanya bisa dibaca (readonly). Tombol-tombol angka dan operator seperti +, -, *, /, dan . digunakan untuk menyusun ekspresi aritmatika, lalu ditampilkan ke layar menggunakan fungsi isi(nilai). Saat tombol = ditekan, fungsi hitung() akan menjalankan eval() untuk mengevaluasi ekspresi matematika dan menampilkan hasilnya di layar. Tombol C menjalankan fungsi hapus() untuk mengosongkan isi layar. Kode ini menunjukkan cara interaktif membangun kalkulator dengan menangani input dan evaluasi ekspresi menggunakan JavaScript.

# output 
![alt text](<output code/output mandiri3.png>)

14. # Kode Mandiri 4
<!DOCTYPE html>
<html>
<head>
  <title>Hitungan Bangun Ruang</title>
</head>
<body>
  <h2>Perhitungan Bangun Ruang</h2>

  <script>
    let sisi = 4;
    let volumeKubus = sisi * sisi * sisi;
    document.write("Volume Kubus (sisi " + sisi + ") = " + volumeKubus + "<br>");

    let p = 6, l = 3, t = 2;
    let volumeBalok = p * l * t;
    document.write("Volume Balok (" + p + "x" + l + "x" + t + ") = " + volumeBalok + "<br>");

    let r = 7, tinggi = 10;
    let volumeTabung = 3.14 * r * r * tinggi;
    document.write("Volume Tabung (r=" + r + ", t=" + tinggi + ") = " + volumeTabung + "<br>");
  </script>
</body>
</html>

# Analisis
Kode ini menghitung dan menampilkan volume dari tiga bangun ruang menggunakan JavaScript, yaitu kubus, balok, dan tabung. Volume kubus dihitung dari rumus sisi³, dengan nilai sisi 4, sehingga hasilnya 64. Volume balok menggunakan rumus p × l × t dengan panjang 6, lebar 3, dan tinggi 2, menghasilkan 36. Volume tabung dihitung dengan rumus π × r² × t, menggunakan jari-jari 7 dan tinggi 10, sehingga hasilnya 1538.6 menggunakan nilai π = 3.14. Semua hasil ditampilkan ke halaman menggunakan document.write dalam format teks yang jelas.

# output
![alt text](<output code/output mandiri4.png>)