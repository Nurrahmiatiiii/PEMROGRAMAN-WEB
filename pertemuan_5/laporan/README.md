# README - Analisis Kode JavaScript Per Baris

## Deskripsi
Repository ini berisi kumpulan file HTML dengan JavaScript untuk pembelajaran Pemrograman WEB Teknik Komputer. Analisis dilakukan per baris untuk pemahaman mendalam.

## Urutan Program dan Analisis Per Baris

### Program 2A - Penempatan JavaScript di Head dan Body
**File:** `program2A.html`

**Analisis Per Baris:**
- **Baris 1:** `<HTML>` - Tag pembuka HTML (syntax lama, seharusnya `<!DOCTYPE html>`)
- **Baris 2:** `<HEAD><TITLE> contoh JavaScript</TITLE>` - Head section dengan title
- **Baris 3:** `<script language="JavaScript">` - Tag script dengan atribut language (deprecated, gunakan `type="text/javascript"`)
- **Baris 4:** `document.write("Program JavaSript Aku di kepala");` - Menulis text ke document dari head
- **Baris 5:** `</script>` - Penutup script di head
- **Baris 6:** `</HEAD>` - Penutup head
- **Baris 7:** `<BODY>` - Pembuka body
- **Baris 8:** `<script language="JavaScript">` - Script kedua di body
- **Baris 9:** `document.write("Program JavaSript Aku di body");` - Menulis text ke document dari body
- **Baris 10:** `</script>` - Penutup script di body
- **Baris 11:** `</BODY>` - Penutup body
- **Baris 12:** `</HTML>` - Penutup HTML
  
**Output yang dihasilkan:**
![alt text](https://github.com/Nurrahmiatiiii/PEMROGRAMAN-WEB/blob/master/pertemuan_5/laporan/output%20code/output2A.png?row=true)


### Program 2C - Event Handling dengan onClick
```
```
**Analisis Per Baris:**
- **Baris 1:** `<!DOCTYPE html>` - Deklarasi HTML5 (syntax modern)
- **Baris 2:** `<html>` - Tag HTML pembuka
- **Baris 3:** `<head>` - Pembuka head section
- **Baris 4:** `<title>Belajar Javascript : Mengenal Event Pada Javascript</title>` - Title halaman
- **Baris 5:** `</head>` - Penutup head
- **Baris 6:** `<body>` - Pembuka body
- **Baris 7:** `<h1>Mengenal Event Pada Javascript</h1>` - Header utama
- **Baris 8:** `<h2> Perograman WEB Event one click</h2>` - Sub header
- **Baris 9:** `<!-- memberikan event pada element tombol -->` - Komentar HTML
- **Baris 10:** `<button onclick="tampilkan_nama()">klik disini </button>` - Button dengan event onclick
- **Baris 11:** - Baris kosong
- **Baris 12:** `<!-- id hasil -->` - Komentar untuk div hasil
- **Baris 13:** `<div id="hasil"></div>` - Div dengan id "hasil" untuk menampilkan output
- **Baris 14:** - Baris kosong
- **Baris 15:** `<script>` - Pembuka tag script
- **Baris 16:** `// membuat function tampilkan_nama` - Komentar JavaScript
- **Baris 17:** `function tampilkan_nama(){` - Deklarasi fungsi tampilkan_nama
- **Baris 18-19:** `document.getElementById("hasil").innerHTML = "<h3>Nama Saya Adalah Andi Akram Nur Risal</h3>";` - Mengubah innerHTML div hasil
- **Baris 20:** `}` - Penutup fungsi
- **Baris 21:** `</script>` - Penutup tag script
- **Baris 22:** `</body>` - Penutup body
- **Baris 23:** `</html>` - Penutup html
  
**Output yang dihasilkan:**
![alt text](https://github.com/Nurrahmiatiiii/PEMROGRAMAN-WEB/blob/master/pertemuan_5/laporan/output%20code/output1%202C.png?row=true)


### Program 2D - JavaScript Sederhana dengan document.write
**File:** `program2D.html`


**Analisis Per Baris:**
- **Baris 1:** `<HTML>` - Tag HTML pembuka (syntax lama)
- **Baris 2:** `<HEAD><TITLE> contoh sederhana JavaScript</TITLE></HEAD>` - Head lengkap dengan title
- **Baris 3:** `</BODY>` - ❌ **ERROR:** Penutup body sebelum pembuka body
- **Baris 4:** `<script language="JavaScript">` - Tag script dengan atribut language (deprecated)
- **Baris 5:** `document.write("Selamat Belajar Angkatan 2019","<br>");` - Menulis text dengan line break
- **Baris 6:** `document.write("JavaScript Pemrograman WEB Teknik Komputer");` - Menulis text kedua
- **Baris 7:** `</script>` - Penutup script
- **Baris 8:** `</BODY>` - Penutup body (duplikat, seharusnya `<BODY>`)
- **Baris 9:** `</HTML>` - Penutup HTML

**Bug yang Ditemukan:** Tag `</BODY>` pada baris 3 seharusnya `<BODY>`

**Output yang dihasilkan:**
![alt text](https://github.com/Nurrahmiatiiii/PEMROGRAMAN-WEB/blob/master/pertemuan_5/laporan/output%20code/output2D.png?row=true)


### Program 3 - Input User dengan prompt()
**File:** `program3.html`

**Analisis Per Baris:**
- **Baris 1:** `<HTML>` - Tag HTML pembuka
- **Baris 2:** `<HEAD>` - Pembuka head
- **Baris 3:** `<TITLE>Masukan Data</TITLE>` - Title halaman
- **Baris 4:** `</HEAD>` - Penutup head
- **Baris 5:** `<BODY>` - Pembuka body
- **Baris 6:** `<SCRIPT LANGUAGE = "JavaScript">` - Tag script dengan spasi di atribut
- **Baris 7:** `<!--` - Pembuka komentar HTML (teknik lama untuk hide script dari browser lama)
- **Baris 8:** `var nama = prompt("Siapa nama Anda?");` - Deklarasi variabel dan prompt user input
- **Baris 9:** `document.write("Hai, " + nama);` - Concatenation string dan output
- **Baris 10:** `//-->` - Penutup komentar HTML dengan JavaScript comment
- **Baris 11:** `</SCRIPT>` - Penutup script
- **Baris 12:** `</BODY>` - Penutup body
- **Baris 13:** `</HTML>` - Penutup HTML

**Konsep:** Menggunakan `prompt()` untuk interaksi user dan string concatenation dengan operator `+`

**Output yang dihasilkan:**
 ![alt text](https://github.com/Nurrahmiatiiii/PEMROGRAMAN-WEB/blob/master/pertemuan_5/laporan/output%20code/output2%203.png?row=true)

---

### Program 4.2 - Konfirmasi dengan confirm()
**File:** `program4.2.html`

**Analisis Per Baris:**
- **Baris 1-5:** Struktur HTML standar
- **Baris 6:** `<SCRIPT LANGUAGE = "JavaScript">` - Tag script
- **Baris 7:** `<!--` - Pembuka komentar HTML
- **Baris 8:** `var jawaban = window.confirm(` - Deklarasi variabel dan pemanggilan confirm (multiline)
- **Baris 9:** `"Apakah anda sudah yakin ?");` - Parameter confirm dan penutup fungsi
- **Baris 10:** `document.write("Jawaban Anda: " + jawaban);` - Output hasil confirm (true/false)
- **Baris 11:** `//-->` - Penutup komentar

- **Baris 12-14:** Penutup tags HTML

**Konsep:** `window.confirm()` return boolean value (true untuk OK, false untuk Cancel)
**Output yang dihasilkan:**
![alt text](https://github.com/Nurrahmiatiiii/PEMROGRAMAN-WEB/blob/master/pertemuan_5/laporan/output%20code/output3%204.png?row=true)


### Program 5A - Variabel dan Operasi Dasar
**File:** `program5A.html`

**Analisis Per Baris:**
- **Baris 1:** `<script language="Javascript">` - Tag script pembuka
- **Baris 2:** `<!--` - Komentar HTML pembuka
- **Baris 3:** `var VariabelKu;` - Deklarasi variabel tanpa inisialisasi (undefined)
- **Baris 4:** `var VariabelKu2 = 3;` - Deklarasi variabel dengan inisialisasi
- **Baris 5:** `VariabelKu = 1234;` - Assignment nilai ke variabel yang sudah dideklarasi
- **Baris 6:** `document.write(VariabelKu*VariabelKu2);` - Operasi perkalian dan output (1234 * 3 = 3702)
- **Baris 7:** `// -->` - JavaScript comment dengan HTML comment closer
- **Baris 8:** `</script>` - Penutup script

**Output yang dihasilkan:**
![alt text](https://github.com/Nurrahmiatiiii/PEMROGRAMAN-WEB/blob/master/pertemuan_5/laporan/output%20code/output5A.png?row=true)

---

### Program 5B - Fungsi dan Scope Variabel
**File:** `program5B.html`


**Analisis Per Baris:**
- **Baris 1:** `<SCRIPT language= "Javascript" >` - Tag script dengan spasi extra
- **Baris 2:** `<!--` - Komentar HTML
- **Baris 3:** `var a = 12;` - Variabel global a = 12
- **Baris 4:** `var b = 4;` - Variabel global b = 4
- **Baris 5:** `function Perkalian_Dengan2(b) {` - Deklarasi fungsi dengan parameter b (shadowing global b)
- **Baris 6:** `a = b * 2;` - Mengubah global variable a dengan parameter b * 2
- **Baris 7:** `return a;` - Return nilai a
- **Baris 8:** `}` - Penutup fungsi
- **Baris 9:** `document.write( "Dua kali dari ",b," adalah ",Perkalian_Dengan2(b));` 
  - Memanggil fungsi dengan global b (4)
  - Fungsi mengembalikan 4 * 2 = 8
  - Output: "Dua kali dari 4 adalah 8"
- **Baris 10:** `document.write( "Nilai dari a adalah" ,a);` 
  - Global a sekarang = 8 (berubah karena fungsi)
  - Output: "Nilai dari a adalah8"
- **Baris 11-12:** Penutup komentar dan script

**Konsep Penting:** Parameter shadowing dan side effect pada global variable

**Output yang dihasilkan:**
![alt text](https://github.com/Nurrahmiatiiii/PEMROGRAMAN-WEB/blob/master/pertemuan_5/laporan/output%20code/output5B.png?row=true)


---

### Program 7 - Konversi Bilangan (parseInt & parseFloat)
**File:** `program7.html`


**Analisis Per Baris:**
- **Baris 1-6:** Struktur HTML standar
- **Baris 7:** `<!--` - Komentar pembuka
- **Baris 8:** `var a =parseInt("27");` - parseInt string numerik → 27
- **Baris 9:** `document.write("1. "+a+"<BR>");` - Output: "1. 27"
- **Baris 10:** `a = parseInt("27.5");` - parseInt dengan desimal → 27 (bagian desimal diabaikan)
- **Baris 11:** `document.write("2. "+a+"<BR>");` - Output: "2. 27"
- **Baris 12:** `var a = parseInt("27A");` - parseInt dengan huruf di belakang → 27
- **Baris 13:** `document.write("3. "+a+"<BR>");` - Output: "3. 27"
- **Baris 14:** `a = parseInt("A27.5");` - parseInt dimulai dengan huruf → NaN
- **Baris 15:** `document.write("4. "+a+"<BR>");` - Output: "4. NaN"
- **Baris 16:** `var b = parseFloat("27");` - parseFloat integer → 27
- **Baris 17:** `document.write("5. "+b+"<BR>");` - Output: "5. 27"
- **Baris 18:** `b = parseFloat("27.5");` - parseFloat desimal → 27.5
- **Baris 19:** `document.write("6. "+b+"<BR>");` - Output: "6. 27.5"
- **Baris 20:** `var b = parseFloat("27A");` - parseFloat dengan huruf → 27
- **Baris 21:** `document.write("7. "+b+"<BR>");` - Output: "7. 27"
- **Baris 22:** `b = parseFloat("A27.5");` - parseFloat dimulai huruf → NaN
- **Baris 23:** `document.write("8. "+b+"<BR>")` - Output: "8. NaN"
- **Baris 24:** `//->` - Penutup komentar (inkonsisten dengan pembuka)

- **Output yang dihasilkan:**
![alt text](https://github.com/Nurrahmiatiiii/PEMROGRAMAN-WEB/blob/master/pertemuan_5/laporan/output%20code/output7.png?row=true)
---

### Program 8 - Operasi Matematika (dengan Bug)
**File:** `program8.html`


**Analisis Per Baris dengan Bug yang Ditemukan:**
- **Baris 1-6:** Struktur HTML standar
- **Baris 7:** `<!--` - Komentar pembuka
- **Baris 8:** `document.write("2 + 3 = " + (2 + 3) );` - ✅ Benar: 2 + 3 = 5
- **Baris 9:** `document.write("<BR>");` - Line break HTML
- **Baris 10:** `document.write("20 + 3 = " + (20 - 3) );` - ❌ **BUG:** Label "20 + 3" tapi operasi `(20 - 3)` = 17
- **Baris 11:** `document.write("<BR>");` - Line break HTML
- **Baris 12:** `document.write("20* 3 = " + (2 * 3) );` - ❌ **BUG:** Label "20* 3" tapi operasi `(2 * 3)` = 6
- **Baris 13:** `document.write("<BR>");` - Line break HTML
- **Baris 14:** `document.write("40 / 3 = " + (40 / 3) );` - ✅ Benar: 40 / 3 = 13.333333333333334
- **Baris 15:** `document.write("<BR>");` - Line break HTML
- **Baris 16:** `//-->` - Penutup komentar
- **Baris 17-19:** Penutup tags HTML

**Output yang Dihasilkan:**
![alt text](https://github.com/Nurrahmiatiiii/PEMROGRAMAN-WEB/blob/master/pertemuan_5/laporan/output%20code/output8.png?row=true)



### Program 9 - Operator Ternary (Conditional)
**File:** `program9.html`


**Analisis Per Baris:**
- **Baris 1-6:** Struktur HTML standar
- **Baris 7:** `<!--` - Komentar pembuka
- **Baris 8:** `var nilai = prompt("Nilai (0-100): ", 0);` 
  - `prompt()` dengan default value 0
  - Return string, perlu diperhatikan untuk comparison
- **Baris 9:** `var hasil = (nilai >= 60) ? "Lulus" : "Tidak Lulus";`
  - Operator ternary: `condition ? trueValue : falseValue`
  - ⚠️ **Potensi Bug:** String comparison, "100" < "60" karena lexicographic
- **Baris 10:** `document.write("Hasil: " + hasil);` - Output hasil evaluasi
- **Baris 11:** `//-->` - Penutup komentar
- **Baris 12-14:** Penutup tags HTML

**Bug Potensial:** Input "100" akan dianggap "Tidak Lulus" karena string comparison. Seharusnya menggunakan `parseInt(nilai) >= 60`.

**Output yang Dihasilkan:**
![alt text](
## Ringkasan Temuan

### Bugs yang Ditemukan:
1. **Program 2D:** Tag `</BODY>` sebelum `<BODY>`
2. **Program 8:** Operasi matematika tidak sesuai label
3. **Program 9:** String comparison pada operator ternary

### Pola Pembelajaran:
1. **Program 2A-2D:** Penempatan JavaScript dan document.write
2. **Program 3-4.2:** User interaction (prompt, confirm)
3. **Program 5A-5B:** Variabel, fungsi, dan scope
4. **Program 7:** Type conversion
5. **Program 8:** Operasi matematika
6. **Program 9:** Conditional logic

### Syntax Evolution:
- Menggunakan `var` (pre-ES6)
- Atribut `language="JavaScript"` (deprecated)
- HTML comment wrapping (`<!-- //-->`)
- Mixed case dalam function names
