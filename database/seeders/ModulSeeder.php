<?php

namespace Database\Seeders;

use App\Models\Materi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Materi::insert([
            [
                'course_id' => 1,
                'judul' => 'Apa itu PHP?',
                'content' => "<p><strong>PHP (Hypertext Preprocessor)</strong> adalah bahasa pemrograman yang digunakan untuk membuat aplikasi web dinamis. PHP pertama kali dikembangkan oleh <strong>Rasmus Lerdorf</strong> pada tahun 1994. PHP awalnya digunakan untuk menghitung jumlah pengunjung pada situs web, namun berkembang menjadi bahasa pemrograman yang digunakan secara luas dalam pengembangan aplikasi web backend.</p><p>PHP adalah bahasa scripting server-side yang artinya kode PHP dijalankan di sisi server dan hasilnya dikirimkan ke browser sebagai HTML.</p>",
                'urutan' => 1,
            ],
            [
                'course_id' => 1,
                'judul' => "Sejarah",
                'content' => "<p><strong>PHP pertama kali diciptakan oleh Rasmus Lerdorf</strong> pada tahun 1994 sebagai <strong>Personal Home Page Tools</strong> (PHP Tools). Tujuannya adalah untuk membuat sebuah sistem yang dapat memantau pengunjung di website pribadinya. PHP kemudian berkembang menjadi bahasa pemrograman scripting yang digunakan untuk pengembangan web, dan pada tahun 1995, PHP diperkenalkan ke publik sebagai <strong>PHP/FI</strong>.</p><p>Seiring waktu, PHP terus berkembang dengan tambahan fitur seperti interaksi dengan database, pengolahan form, dan pembuatan aplikasi web dinamis. Versi PHP yang stabil saat ini adalah PHP 8.x yang menawarkan banyak fitur canggih seperti peningkatan performa, keamanan, dan dukungan untuk fitur-fitur modern di pengembangan web.</p>",
                'urutan' => 2
            ],
            [
                'course_id' => 1,
                'judul' => "Fungsi PHP dalam Pengembangan Web Backend",
                'content' => "<p>PHP memiliki banyak kegunaan penting dalam pengembangan web backend, antara lain:</p><ul><li><strong>Mengolah Formulir Pengguna:</strong> PHP digunakan untuk mengolah data yang dikirimkan melalui formulir HTML dan kemudian memproses atau menyimpannya dalam database.</li><li><strong>Interaksi dengan Database:</strong> PHP sangat populer untuk menghubungkan aplikasi web dengan database, seperti MySQL atau PostgreSQL, memungkinkan pengambilan, penyimpanan, dan pengolahan data dalam aplikasi web.</li><li><strong>Manajemen Sesi Pengguna:</strong> PHP digunakan untuk mengelola sesi pengguna, seperti login dan autentikasi, sehingga aplikasi web dapat melacak pengguna yang sedang login.</li><li><strong>Generasi Konten Dinamis:</strong> PHP dapat membuat halaman web yang berbeda untuk pengguna berdasarkan input mereka. Misalnya, memberikan pengalaman pengguna yang dipersonalisasi.</li><li><strong>Keamanan Web:</strong> PHP juga menyediakan berbagai fitur untuk mengamankan aplikasi web, termasuk perlindungan terhadap SQL Injection, Cross-Site Scripting (XSS), dan Cross-Site Request Forgery (CSRF).</li></ul>",
                'urutan' => 3
            ],
            [
                'course_id' => 1,
                'judul' => "Instalasi",
                'content' => "<p>Agar dapat menjalankan PHP secara lokal, Anda perlu menginstal PHP beserta web server (Apache) dan database (MySQL). Ada beberapa alat yang bisa digunakan untuk ini, di antaranya:</p><ul><li><strong>XAMPP:</strong> XAMPP adalah paket perangkat lunak yang menyediakan Apache, MySQL, PHP, dan Perl dalam satu instalasi. Ini adalah pilihan yang sangat populer di Windows, Linux, dan macOS.</li><li><strong>WAMP:</strong> WAMP adalah paket yang dirancang untuk Windows yang menyediakan Apache, MySQL, dan PHP. WAMP sering digunakan oleh pengembang Windows.</li><li><strong>LAMP:</strong> LAMP adalah paket perangkat lunak untuk Linux yang menyediakan Linux, Apache, MySQL, dan PHP. Ini adalah pilihan umum untuk pengembangan server-side di lingkungan Linux.</li></ul><p>Setelah mengunduh dan menginstal XAMPP, WAMP, atau LAMP, Anda dapat mulai menulis kode PHP di editor teks dan menjalankannya di server lokal Anda. Ini memungkinkan Anda untuk mengembangkan dan menguji aplikasi PHP tanpa harus terhubung ke server web jarak jauh.</p><p>Langkah-langkah dasar instalasi (misalnya, XAMPP):</p><ol><li>Unduh XAMPP dari situs resmi Apache Friends.</li><li>Jalankan installer dan pilih komponen yang ingin Anda instal (Apache, MySQL, PHP, dll).</li><li>Setelah instalasi selesai, buka XAMPP Control Panel dan mulai server Apache dan MySQL.</li><li>Tempatkan file PHP Anda di folder <strong>htdocs</strong> untuk memulai pengujian aplikasi.</li></ol>",
                'urutan' => 4
            ],
            [
                'course_id' => 2,
                'judul' => "Pengenalan HTML",
                'content' => "<h1>Pengertian HTML dan Peranannya dalam Pembuatan Halaman Web</h1>
                <p><strong>HTML (HyperText Markup Language)</strong> adalah bahasa markup standar untuk membuat halaman web. HTML digunakan untuk menyusun dan menampilkan teks, gambar, video, dan elemen-elemen lainnya di browser.</p><p>HTML bukan bahasa pemrograman, tetapi bahasa yang menyusun struktur halaman web. HTML bekerja bersama CSS (untuk tampilan) dan JavaScript (untuk interaktivitas) dalam membentuk aplikasi web modern.</p><p><strong>Peran HTML:</strong></p><ul><li>Menentukan struktur dasar halaman web</li><li>Menampilkan konten seperti teks dan media</li><li>Menjadi dasar sebelum menambahkan CSS dan JavaScript</li></ul>",
                'urutan' => 1
            ],
            [
                'course_id' => 2,
                'judul' => "Struktur Dasar",
                'content' => "<p>Setiap halaman HTML dimulai dengan struktur dasar agar dikenali dengan baik oleh browser. Struktur ini terdiri dari:</p><pre><code>&lt;!DOCTYPE html&gt;
        &lt;html&gt;
          &lt;head&gt;
            &lt;title&gt;Judul Halaman&lt;/title&gt;
          &lt;/head&gt;
          &lt;body&gt;
            &lt;h1&gt;Halo Dunia&lt;/h1&gt;
            &lt;p&gt;Selamat datang di dunia HTML&lt;/p&gt;
          &lt;/body&gt;
        &lt;/html&gt;
        </code></pre><p><strong>Penjelasan:</strong></p><ul><li><code>&lt;!DOCTYPE html&gt;</code>: Menandakan dokumen HTML5</li><li><code>&lt;html&gt;</code>: Tag utama dari seluruh isi halaman</li><li><code>&lt;head&gt;</code>: Berisi informasi meta, judul, link CSS, dll</li><li><code>&lt;body&gt;</code>: Tempat menaruh konten utama seperti teks, gambar, dan lainnya</li></ul>",
                'urutan' => 2
            ],
            [
                'course_id' => 2,
                'judul' => "Elemen Dasar: Tag, Atribut, dan Nilai",
                'content' => "<p>HTML dibentuk dari <strong>elemen</strong> yang dimulai dengan <strong>tag</strong>. Tag HTML biasanya berpasangan (pembuka dan penutup), dan bisa memiliki <strong>atribut</strong> dengan <strong>nilai</strong> tertentu.</p><p><strong>Contoh elemen HTML:</strong></p><pre><code>&lt;a href=\"https://example.com\" target=\"_blank\"&gt;Kunjungi Website&lt;/a&gt;</code></pre><p><strong>Penjelasan:</strong></p><ul><li><strong>Tag:</strong> &lt;a&gt; dan &lt;/a&gt; digunakan untuk membuat tautan</li><li><strong>Atribut:</strong> <code>href</code> menentukan URL tujuan, <code>target</code> menentukan perilaku jendela</li><li><strong>Nilai:</strong> \"https://example.com\" adalah nilai dari <code>href</code></li></ul><p>Dengan memahami elemen HTML, Anda dapat mulai membangun struktur halaman secara semantik dan rapi.</p>",
                'urutan' => 3
            ],
            [
                'course_id' => 3,
                'judul' => 'Sintaks PHP',
                'content' => <<<HTML
<h2>Sintaks Dasar PHP</h2>

<p><strong>PHP</strong> (Hypertext Preprocessor) adalah bahasa pemrograman server-side yang digunakan untuk membangun aplikasi web dinamis. PHP sangat populer karena mudah dipelajari dan dapat disisipkan langsung ke dalam HTML.</p>

<hr>

<h3>📌 1. Tag Dasar PHP</h3>
<p>Semua kode PHP ditulis di antara tag berikut:</p>

<pre><code>&lt;?php
// Kode PHP ditulis di sini
?&gt;</code></pre>

<p>Contoh:</p>
<pre><code>&lt;?php
echo "Halo Dunia!";
?&gt;</code></pre>

<hr>

<h3>📌 2. Variabel</h3>
<p>Variabel di PHP diawali dengan tanda <code>\$</code> dan bersifat case-sensitive.</p>
<pre><code>&lt;?php
\$nama = "Andi";
\$umur = 20;
echo "Nama saya \$nama dan umur saya \$umur tahun.";
?&gt;</code></pre>

<hr>

<h3>📌 3. Tipe Data</h3>
<p>PHP memiliki berbagai tipe data, di antaranya:</p>
<ul>
  <li>String → <code>"Teks"</code></li>
  <li>Integer → <code>123</code></li>
  <li>Float → <code>12.5</code></li>
  <li>Boolean → <code>true / false</code></li>
  <li>Array → <code>[1, 2, 3]</code></li>
  <li>Object</li>
  <li>NULL</li>
</ul>

<hr>

<h3>📌 4. Operator</h3>
<p>Beberapa operator yang umum digunakan:</p>

<ul>
  <li><strong>Operator Aritmatika:</strong> <code>+ - * / %</code></li>
  <li><strong>Operator Perbandingan:</strong> <code>== != &gt; &lt; &gt;= &lt;=</code></li>
  <li><strong>Operator Logika:</strong> <code>&amp;&amp; || !</code></li>
</ul>

<pre><code>&lt;?php
\$a = 10;
\$b = 5;
echo \$a + \$b; // Output: 15
?&gt;</code></pre>

<hr>

<h3>📌 5. String</h3>
<p>String adalah kumpulan karakter. PHP memiliki banyak fungsi bawaan untuk memanipulasi string.</p>

<pre><code>&lt;?php
\$teks = "Belajar PHP";
echo strlen(\$teks); // Panjang string
echo strtoupper(\$teks); // Ubah jadi huruf kapital
?&gt;</code></pre>

<p>Penggabungan string bisa menggunakan titik (<code>.</code>):</p>
<pre><code>&lt;?php
\$nama = "Budi";
echo "Halo, " . \$nama;
?&gt;</code></pre>

<hr>

<h3>📌 6. Komentar</h3>
<p>Komentar digunakan untuk memberi catatan dalam kode:</p>

<pre><code>
// Komentar satu baris
# Komentar juga bisa pakai tanda pagar
/*
  Komentar
  banyak baris
*/
</code></pre>

<hr>

<h3>📌 7. Konstanta</h3>
<p>Konstanta adalah variabel tetap (tidak bisa diubah setelah didefinisikan).</p>
<pre><code>&lt;?php
define("SITE_NAME", "BelajarPHP");
echo SITE_NAME;
?&gt;</code></pre>

<hr>

<h3>✅ Kesimpulan:</h3>
<ul>
  <li>PHP dimulai dengan tag <code>&lt;?php</code> dan diakhiri dengan <code>?&gt;</code></li>
  <li>Gunakan <code>\$</code> untuk mendefinisikan variabel</li>
  <li>Kuasai tipe data, operator, dan fungsi string</li>
  <li>Komentar berguna untuk dokumentasi kode</li>
</ul>

<p>Ini adalah dasar yang wajib kamu kuasai sebelum masuk ke pemrograman lanjutan seperti OOP, manipulasi data, dan penggunaan framework.</p>
HTML,
                'urutan' => 1
            ],




            [
                'course_id' => 3,
                'judul' => 'Variabel, tipe data, & operator',
                'content' => "<h2>Variabel, Tipe Data, dan Operator dalam PHP</h2>

<p>Dalam PHP, variabel digunakan untuk menyimpan data, dan operator digunakan untuk melakukan operasi terhadap data tersebut. Berikut adalah pembahasan lengkapnya:</p>

<hr>

<h3>📌 1. Variabel dalam PHP</h3>
<p>Variabel digunakan untuk menyimpan informasi yang dapat digunakan kembali dalam program.</p>
<pre><code>&lt;?php
\$nama = \"Budi\";
\$umur = 25;
echo \"Nama saya \$nama dan umur saya \$umur tahun\";
?&gt;</code></pre>

<p><strong>Aturan penamaan variabel:</strong></p>
<ul>
    <li>Harus diawali dengan tanda <code>$</code></li>
    <li>Hanya boleh terdiri dari huruf, angka, dan underscore</li>
    <li>Tidak boleh diawali angka</li>
    <li>Case-sensitive (huruf besar dan kecil dianggap berbeda)</li>
</ul>

<hr>

<h3>📌 2. Tipe Data di PHP</h3>
<p>PHP mendukung berbagai macam tipe data:</p>
<ul>
    <li><strong>String</strong>: <code>\"Halo Dunia\"</code></li>
    <li><strong>Integer</strong>: <code>123</code></li>
    <li><strong>Float</strong>: <code>3.14</code></li>
    <li><strong>Boolean</strong>: <code>true</code> atau <code>false</code></li>
    <li><strong>Array</strong>: <code>[1, 2, 3]</code></li>
    <li><strong>NULL</strong>: Variabel tanpa nilai</li>
</ul>

<hr>

<h3>📌 3. Operator dalam PHP</h3>
<p>Operator digunakan untuk melakukan operasi matematika, logika, atau manipulasi data lainnya.</p>

<h4>🔹 Operator Aritmatika</h4>
<pre><code>
\$a = 10;
\$b = 5;
echo \$a + \$b; // 15
echo \$a - \$b; // 5
echo \$a * \$b; // 50
echo \$a / \$b; // 2
echo \$a % \$b; // 0
</code></pre>

<h4>🔹 Operator Perbandingan</h4>
<pre><code>
\$a = 10;
\$b = 5;
var_dump(\$a == \$b); // false
var_dump(\$a != \$b); // true
var_dump(\$a &gt; \$b);  // true
</code></pre>

<h4>🔹 Operator Logika</h4>
<pre><code>
\$x = true;
\$y = false;
var_dump(\$x && \$y); // false
var_dump(\$x || \$y); // true
var_dump(!\$x);       // false
</code></pre>

<hr>

<h3>✅ Kesimpulan</h3>
<ul>
    <li>Gunakan <code>\$</code> untuk mendefinisikan variabel di PHP.</li>
    <li>Kenali berbagai tipe data seperti string, integer, float, boolean, array, dan null.</li>
    <li>Operator membantu kita melakukan operasi matematika dan logika dalam kode.</li>
</ul>
<p>Memahami konsep dasar ini akan sangat membantumu dalam memahami alur logika program dan mengembangkan aplikasi web dengan PHP.</p>",
                'urutan' => 2
            ],




            [
                'course_id' => 3,
                'judul' => 'Struktur Kontrol',
                'content' => "<h2>Struktur Kontrol dalam PHP: if, switch, loop</h2>

            <p>Struktur kontrol digunakan untuk menentukan alur eksekusi program berdasarkan kondisi tertentu atau untuk menjalankan perulangan kode. PHP menyediakan beberapa jenis struktur kontrol yang umum:</p>

            <hr>

            <h3>1. Percabangan <code>if</code>, <code>else</code>, <code>elseif</code></h3>
            <p>Struktur <code>if</code> digunakan untuk menjalankan blok kode jika suatu kondisi terpenuhi.</p>
            <pre><code>&lt;?php
            \$nilai = 85;

            if (\$nilai >= 90) {
                echo \"A\";
            } elseif (\$nilai >= 80) {
                echo \"B\";
            } else {
                echo \"C\";
            }
            ?&gt;</code></pre>

            <hr>

            <h3>2. Struktur <code>switch</code></h3>
            <p>Struktur <code>switch</code> digunakan ketika ingin membandingkan satu variabel dengan beberapa kemungkinan nilai.</p>
            <pre><code>&lt;?php
            \$hari = \"Senin\";

            switch (\$hari) {
                case \"Senin\":
                    echo \"Hari kerja\";
                    break;
                case \"Sabtu\":
                case \"Minggu\":
                    echo \"Hari libur\";
                    break;
                default:
                    echo \"Hari tidak diketahui\";
            }
            ?&gt;</code></pre>

            <hr>

            <h3>3. Perulangan <code>for</code></h3>
            <p>Perulangan <code>for</code> digunakan untuk mengulang blok kode dengan jumlah iterasi yang telah ditentukan.</p>
            <pre><code>&lt;?php
            for (\$i = 1; \$i &lt;= 5; \$i++) {
                echo \"Perulangan ke-\$i&lt;br&gt;\";
            }
            ?&gt;</code></pre>

            <hr>

            <h3>4. Perulangan <code>while</code></h3>
            <p>Perulangan <code>while</code> dijalankan selama kondisi bernilai true.</p>
            <pre><code>&lt;?php
            \$i = 1;

            while (\$i &lt;= 5) {
                echo \"Nilai: \$i&lt;br&gt;\";
                \$i++;
            }
            ?&gt;</code></pre>

            <hr>

            <h3>5. Perulangan <code>foreach</code></h3>
            <p><code>foreach</code> digunakan untuk mengakses elemen dalam array satu per satu.</p>
            <pre><code>&lt;?php
            \$buah = [\"apel\", \"jeruk\", \"mangga\"];

            foreach (\$buah as \$item) {
                echo \"Buah: \$item&lt;br&gt;\";
            }
            ?&gt;</code></pre>

            <hr>

            <h3>6. <code>break</code> dan <code>continue</code></h3>
            <p><strong>break</strong> menghentikan seluruh perulangan, sedangkan <strong>continue</strong> melewati iterasi saat ini dan lanjut ke iterasi berikutnya.</p>
            <pre><code>&lt;?php
            for (\$i = 1; \$i &lt;= 5; \$i++) {
                if (\$i == 3) continue;
                if (\$i == 5) break;
                echo \"i = \$i&lt;br&gt;\";
            }
            ?&gt;</code></pre>

            <hr>

            <h3>✅ Kesimpulan</h3>
            <ul>
                <li><code>if</code> dan <code>switch</code> digunakan untuk percabangan.</li>
                <li><code>for</code>, <code>while</code>, dan <code>foreach</code> digunakan untuk perulangan.</li>
                <li><code>break</code> dan <code>continue</code> berguna untuk mengatur jalannya loop.</li>
            </ul>
            <p>Dengan struktur kontrol, kamu bisa membuat program yang lebih fleksibel dan responsif terhadap kondisi yang berubah.</p>",
                'urutan' => 3,
            ],




            [
                'course_id' => 3,
                'judul' => 'PHP Function',
                'content' => <<<HTML
<h2>Fungsi dalam PHP</h2>

<p>Fungsi adalah blok kode yang dapat digunakan kembali dalam program untuk melakukan tugas tertentu. Fungsi sangat berguna untuk membagi program menjadi bagian-bagian kecil yang mudah dipahami dan dikelola. Di PHP, kamu bisa membuat fungsi sendiri untuk menyederhanakan program.</p>

<hr>

<h3>1. Definisi Fungsi</h3>
<p>Fungsi didefinisikan dengan menggunakan kata kunci <code>function</code>, diikuti dengan nama fungsi, parameter (jika ada), dan tubuh fungsi.</p>

<pre><code>&lt;?php
function sayHello() {
    echo "Halo, Selamat datang di PHP!";
}
sayHello(); // Output: Halo, Selamat datang di PHP!
?&gt;</code></pre>

<hr>

<h3>2. Fungsi dengan Parameter</h3>
<p>Fungsi dapat menerima input yang disebut parameter. Parameter dapat digunakan di dalam tubuh fungsi untuk memproses data.</p>

<pre><code>&lt;?php
function sayHelloTo(\$name) {
    echo "Halo, \$name!";
}
sayHelloTo("Budi"); // Output: Halo, Budi!
?&gt;</code></pre>

<hr>

<h3>3. Fungsi dengan Nilai Kembalian</h3>
<p>Fungsi bisa mengembalikan sebuah nilai dengan menggunakan kata kunci <code>return</code>.</p>

<pre><code>&lt;?php
function tambah(\$a, \$b) {
    return \$a + \$b;
}
\$result = tambah(5, 3); // Output: 8
echo \$result;
?&gt;</code></pre>

<hr>

<h3>4. Fungsi dengan Parameter Default</h3>
<p>Jika tidak ada nilai yang diberikan untuk parameter, maka fungsi akan menggunakan nilai default.</p>

<pre><code>&lt;?php
function greet(\$name = "Pengunjung") {
    echo "Halo, \$name!";
}
greet(); // Output: Halo, Pengunjung!
greet("Andi"); // Output: Halo, Andi!
?&gt;</code></pre>

<hr>

<h3>5. Fungsi dengan Parameter Bertipe Array</h3>
<p>PHP juga memungkinkan kita untuk mengirimkan parameter yang berupa array ke dalam fungsi.</p>

<pre><code>&lt;?php
function hitungTotal(\$array) {
    \$total = 0;
    foreach (\$array as \$value) {
        \$total += \$value;
    }
    return \$total;
}
\$angka = [10, 20, 30];
echo hitungTotal(\$angka); // Output: 60
?&gt;</code></pre>

<hr>

<h3>6. Fungsi Anonim (Anonymous Functions)</h3>
<p>Fungsi anonim adalah fungsi yang tidak memiliki nama dan sering digunakan untuk callback atau ketika fungsi tersebut hanya digunakan sekali.</p>

<pre><code>&lt;?php
\$multiply = function(\$a, \$b) {
    return \$a * \$b;
};
echo \$multiply(4, 5); // Output: 20
?&gt;</code></pre>

<hr>

<h3>7. Fungsi Variadic</h3>
<p>Fungsi variadic memungkinkan kita untuk mengirimkan jumlah parameter yang tidak tetap menggunakan tanda <code>...</code>.</p>

<pre><code>&lt;?php
function totalJumlah(...\$angka) {
    return array_sum(\$angka);
}
echo totalJumlah(10, 20, 30); // Output: 60
?&gt;</code></pre>

<hr>

<h3>✅ Kesimpulan</h3>
<ul>
  <li><code>function</code> digunakan untuk mendefinisikan fungsi di PHP.</li>
  <li>Fungsi dapat menerima parameter dan mengembalikan nilai menggunakan <code>return</code>.</li>
  <li>Fungsi dapat memiliki parameter default, tipe data array, atau menggunakan <code>... (variadic)</code>.</li>
  <li>Fungsi anonim sangat berguna ketika kita membutuhkan fungsi sekali pakai.</li>
</ul>

<p>Memahami fungsi adalah dasar penting dalam membuat aplikasi PHP yang terstruktur dan dapat digunakan kembali.</p>
HTML,
                'urutan' => 4,
            ],





            [
                'course_id' => 3,
                'judul' => 'Operasi Array',
                'content' => <<<HTML
            <h2>Pengenalan Array dan Operasi Array</h2>

            <p><strong>Array</strong> adalah struktur data yang digunakan untuk menyimpan beberapa nilai dalam satu variabel. Array memungkinkan kita untuk menyimpan lebih dari satu nilai dalam variabel tunggal, yang berguna saat kita bekerja dengan sejumlah data yang berhubungan.</p>

            <hr>

            <h3>1. Mendefinisikan Array</h3>

            <p>Array di PHP dapat didefinisikan dengan menggunakan fungsi <code>array()</code> atau lebih baru dengan sintaks pendek menggunakan tanda kurung siku <code>[]</code>.</p>

            <h4>Contoh:</h4>

            <pre><code>&lt;?php
            // Array menggunakan fungsi array()
            \$buah = array("Apel", "Jeruk", "Mangga");

            // Array menggunakan sintaks pendek
            \$warna = ["Merah", "Hijau", "Biru"];
            ?&gt;</code></pre>

            <p>Array dapat menyimpan berbagai tipe data, seperti string, integer, atau bahkan array lain.</p>

            <hr>

            <h3>2. Mengakses Elemen Array</h3>

            <p>Untuk mengakses elemen dalam array, kita menggunakan indeks. Array di PHP dimulai dengan indeks 0.</p>

            <h4>Contoh:</h4>

            <pre><code>&lt;?php
            \$buah = ["Apel", "Jeruk", "Mangga"];
            echo \$buah[0]; // Output: Apel
            echo \$buah[1]; // Output: Jeruk
            ?&gt;</code></pre>

            <hr>

            <h3>3. Menambahkan Elemen ke Array</h3>

            <p>Kita bisa menambahkan elemen baru ke dalam array menggunakan berbagai cara:</p>

            <ul>
                <li><strong>Menambah ke akhir array:</strong> <code>array_push()</code> atau sintaks langsung <code>[]</code></li>
                <li><strong>Menambah ke awal array:</strong> <code>array_unshift()</code></li>
            </ul>

            <h4>Contoh:</h4>

            <pre><code>&lt;?php
            \$buah = ["Apel", "Jeruk"];

            // Menambahkan elemen di akhir array
            array_push(\$buah, "Mangga");
            \$buah[] = "Pisang"; // cara lain menambahkan di akhir

            // Menambahkan elemen di awal array
            array_unshift(\$buah, "Semangka");

            print_r(\$buah);
            ?&gt;</code></pre>

            <hr>

            <h3>4. Menghapus Elemen dari Array</h3>

            <p>Kita bisa menghapus elemen dari array menggunakan beberapa fungsi seperti:</p>

            <ul>
                <li><strong>Menhapus elemen terakhir:</strong> <code>array_pop()</code></li>
                <li><strong>Menhapus elemen pertama:</strong> <code>array_shift()</code></li>
                <li><strong>Menhapus elemen dengan nilai tertentu:</strong> <code>unset()</code></li>
            </ul>

            <h4>Contoh:</h4>

            <pre><code>&lt;?php
            \$buah = ["Apel", "Jeruk", "Mangga", "Pisang"];

            // Menghapus elemen terakhir
            array_pop(\$buah);

            // Menghapus elemen pertama
            array_shift(\$buah);

            // Menghapus elemen berdasarkan nilai
            unset(\$buah[1]);

            print_r(\$buah);
            ?&gt;</code></pre>

            <hr>

            <h3>5. Menggunakan Fungsi Array</h3>

            <p>PHP menyediakan berbagai fungsi untuk memanipulasi array. Berikut beberapa yang sering digunakan:</p>

            <ul>
                <li><strong>array_merge():</strong> Digunakan untuk menggabungkan dua atau lebih array.</li>
                <li><strong>array_reverse():</strong> Digunakan untuk membalik urutan elemen dalam array.</li>
                <li><strong>array_map():</strong> Digunakan untuk menerapkan fungsi ke setiap elemen dalam array.</li>
                <li><strong>array_filter():</strong> Digunakan untuk memfilter elemen array yang memenuhi kondisi tertentu.</li>
            </ul>

            <h4>Contoh:</h4>

            <pre><code>&lt;?php
            \$array1 = [1, 2, 3];
            \$array2 = [4, 5, 6];

            // Menggabungkan array
            \$gabungan = array_merge(\$array1, \$array2);

            // Membalik urutan array
            \$balik = array_reverse(\$gabungan);

            // Menggunakan array_map untuk menggandakan setiap elemen
            \$gandakan = array_map(function(\$item) { return \$item * 2; }, \$balik);

            // Menampilkan hasil
            print_r(\$gandakan);
            ?&gt;</code></pre>

            <hr>

            <h3>6. Array Asosiatif</h3>

            <p>Array asosiatif memungkinkan kita untuk menggunakan kunci (key) sebagai indeks, bukan hanya angka. Ini memungkinkan kita menyimpan pasangan data dengan lebih mudah dipahami.</p>

            <h4>Contoh:</h4>

            <pre><code>&lt;?php
            \$mobil = [
                "merk" => "Toyota",
                "model" => "Avanza",
                "tahun" => 2020
            ];

            echo \$mobil["merk"]; // Output: Toyota
            ?&gt;</code></pre>

            <hr>

            <h3>7. Array Multidimensi</h3>

            <p>Array multidimensi adalah array yang elemen-elemennya bisa berupa array lain. Ini berguna untuk menyimpan data dalam bentuk tabel atau matriks.</p>

            <h4>Contoh:</h4>

            <pre><code>&lt;?php
            \$mahasiswa = [
                ["nama" => "Budi", "umur" => 20],
                ["nama" => "Andi", "umur" => 22],
                ["nama" => "Siti", "umur" => 21]
            ];

            echo \$mahasiswa[0]["nama"]; // Output: Budi
            ?&gt;</code></pre>

            <hr>

            <h3>✅ Kesimpulan</h3>
            <ul>
                <li>Array adalah struktur data yang digunakan untuk menyimpan banyak nilai dalam satu variabel.</li>
                <li>PHP mendukung array numerik, asosiatif, dan multidimensi.</li>
                <li>PHP menyediakan berbagai fungsi untuk manipulasi array seperti <code>array_push(), array_pop(), array_merge()</code>, dan banyak lainnya.</li>
            </ul>

            <p>Memahami array sangat penting karena sering digunakan dalam pemrograman PHP, terutama dalam menangani data yang besar atau kompleks.</p>
            HTML,
                'urutan' => 5,
            ],









            [
                'course_id' => 4,
                'judul' => 'Instalasi dan Config MySQL',
                'content' => "<h2>Instalasi dan Konfigurasi MySQL</h2>
                <p>Langkah pertama adalah mengunduh MySQL Installer dari situs resmi <a href='https://dev.mysql.com/downloads/installer/'>MySQL</a>.</p>
                <p>Setelah mengunduh installer, jalankan file tersebut dan pilih <strong>MySQL Server</strong> serta tool lainnya (misalnya MySQL Workbench atau MySQL Command Line).</p>

                <h3>Langkah-langkah Instalasi:</h3>
                <ol>
                    <li><strong>Unduh MySQL Installer:</strong> Kunjungi situs resmi MySQL dan unduh installer untuk Windows. Pastikan memilih versi yang sesuai dengan sistem operasi Anda.</li>
                    <li><strong>Jalankan Installer:</strong> Jalankan file MySQL Installer yang telah diunduh, lalu pilih konfigurasi standar atau custom sesuai kebutuhan Anda. Jika memilih konfigurasi custom, Anda bisa memilih berbagai tool MySQL yang ingin diinstal seperti MySQL Workbench atau Command Line Client.</li>
                    <li><strong>Pilih Port dan Pengaturan Server:</strong> Pilih port yang akan digunakan untuk MySQL (default adalah 3306). Anda juga dapat memilih pengaturan lainnya seperti konfigurasi jaringan dan pengaturan keamanan.</li>
                    <li><strong>Set Password untuk Root:</strong> Tentukan password untuk user root (admin) MySQL Anda. Pastikan password yang kuat agar lebih aman.</li>
                    <li><strong>Pengaturan Layanan MySQL:</strong> Pilih apakah Anda ingin menjalankan MySQL sebagai layanan yang otomatis berjalan saat komputer dinyalakan. Pilih juga apakah Anda ingin mengaktifkan fitur keamanan lainnya, seperti firewall untuk MySQL.</li>
                    <li><strong>Selesai:</strong> Setelah instalasi selesai, MySQL siap digunakan. Anda dapat mengakses MySQL melalui MySQL Workbench, phpMyAdmin, atau MySQL Command Line.</li>
                </ol>

                <h3>Verifikasi Instalasi:</h3>
                <p>Untuk memastikan MySQL terinstal dengan benar, Anda bisa mencoba login ke MySQL menggunakan Command Line atau MySQL Workbench. Berikut adalah contoh untuk login ke MySQL menggunakan Command Line:</p>
                <pre><code>mysql -u root -p</code></pre>
                <p>Masukkan password root yang telah Anda tetapkan selama proses instalasi. Jika berhasil, Anda akan masuk ke prompt MySQL.</p>

                <h3>Catatan:</h3>
                <ul>
                    <li>Jika Anda menggunakan sistem operasi selain Windows, langkah-langkah instalasi mungkin sedikit berbeda. Anda bisa mengunduh versi untuk Linux atau macOS dari situs resmi MySQL.</li>
                    <li>Pastikan Anda memiliki koneksi internet yang stabil saat mengunduh MySQL Installer, karena beberapa komponen mungkin perlu diunduh selama proses instalasi.</li>
                </ul>",
                'urutan' => 1
            ],

            [
                'course_id' => 4,
                'judul' => 'Config PHP dengan MySQL',
                'content' => "<h2>Menghubungkan PHP dengan Database MySQL</h2>
                <p>Setelah berhasil menginstal MySQL, langkah selanjutnya adalah menghubungkan PHP dengan database MySQL. Ada dua cara utama untuk melakukannya, yaitu dengan <strong>MySQLi</strong> dan <strong>PDO</strong>.</p>

                <h3>1. Menghubungkan dengan MySQLi (Procedural)</h3>
                <p>MySQLi adalah ekstensi PHP yang memungkinkan Anda untuk berinteraksi dengan MySQL. MySQLi dapat digunakan dengan dua cara: prosedural dan OOP. Berikut adalah contoh kode menggunakan MySQLi secara prosedural.</p>
                <pre><code>&lt;?php
                // Koneksi ke database MySQL
                \$conn = mysqli_connect('localhost', 'root', '', 'nama_database');

                // Mengecek apakah koneksi berhasil
                if (\$conn === false) {
                    die('Koneksi gagal: ' . mysqli_connect_error());
                }
                echo 'Koneksi berhasil!';
                ;</code></pre>

                <h3>2. Menghubungkan dengan PDO (PHP Data Objects)</h3>
                <p>PDO adalah ekstensi PHP yang menyediakan lapisan abstraksi database, yang memungkinkan Anda untuk menggunakan berbagai jenis database selain MySQL. PDO lebih fleksibel dan lebih aman dibandingkan dengan MySQLi.</p>
                <pre><code>&lt;?php
                try {
                    // Koneksi menggunakan PDO
                    \$pdo = new PDO('mysql:host=localhost;dbname=nama_database', 'root', '');
                    \$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo 'Koneksi berhasil!';
                } catch (PDOException \$e) {
                    echo 'Koneksi gagal: ' . \$e->getMessage();
                }
                ?&gt;</code></pre>

                <h3>Catatan Keamanan:</h3>
                <ul>
                    <li>Selalu gunakan parameterisasi query untuk mencegah serangan SQL Injection.</li>
                    <li>Pastikan menggunakan mode error handling yang tepat, seperti <strong>PDO::ERRMODE_EXCEPTION</strong>, agar error dapat terdeteksi lebih cepat.</li>
                </ul>",

                'urutan' => 2
            ],







            [
                'course_id' => 4,
                'judul' => 'Query SQL: SELECT, INSERT, UPDATE, DELETE',
                'content' => "<h2>Menulis Query SQL di PHP: SELECT, INSERT, UPDATE, DELETE</h2>
                <h3>1. Query SELECT</h3>
                <p>Query SELECT digunakan untuk mengambil data dari tabel dalam database. Berikut adalah contoh menggunakan MySQLi untuk menampilkan data dari tabel.</p>
                <pre><code>&lt;?php
                \$sql = 'SELECT * FROM users';
                \$result = \$conn->query(\$sql);
                if (\$result->num_rows > 0) {
                    while (\$row = \$result->fetch_assoc()) {
                        echo 'ID: ' . \$row['id'] . ' - Nama: ' . \$row['name'] . '&lt;br&gt;';
                    }
                } else {
                    echo '0 hasil';
                }
                ?&gt;</code></pre>

                <h3>2. Query INSERT</h3>
                <p>Query INSERT digunakan untuk menambahkan data ke dalam tabel. Berikut adalah contoh menggunakan MySQLi untuk menyisipkan data ke dalam tabel users.</p>
                <pre><code>&lt;?php
                \$name = 'John';
                \$sql = \"INSERT INTO users (name) VALUES ('\$name')\";
                if (\$conn->query(\$sql) === TRUE) {
                    echo 'Data berhasil ditambahkan';
                } else {
                    echo 'Error: ' . \$sql . '&lt;br&gt;' . \$conn->error;
                }
                ?&gt;</code></pre>

                <h3>3. Query UPDATE</h3>
                <p>Query UPDATE digunakan untuk memperbarui data dalam tabel. Berikut adalah contoh menggunakan MySQLi untuk memperbarui data pengguna.</p>
                <pre><code>&lt;?php
                \$name = 'Jane';
                \$id = 1;
                \$sql = \"UPDATE users SET name='\$name' WHERE id=\$id\";
                if (\$conn->query(\$sql) === TRUE) {
                    echo 'Data berhasil diperbarui';
                } else {
                    echo 'Error: ' . \$sql . '&lt;br&gt;' . \$conn->error;
                }
                ?&gt;</code></pre>

                <h3>4. Query DELETE</h3>
                <p>Query DELETE digunakan untuk menghapus data dalam tabel. Berikut adalah contoh menggunakan MySQLi untuk menghapus data pengguna.</p>
                <pre><code>&lt;?php
                \$id = 1;
                \$sql = \"DELETE FROM users WHERE id=\$id\";
                if (\$conn->query(\$sql) === TRUE) {
                    echo 'Data berhasil dihapus';
                } else {
                    echo 'Error: ' . \$sql . '&lt;br&gt;' . \$conn->error;
                }
                ?&gt;</code></pre>",
                'urutan' => 3
            ],








            [
                'course_id' => 4,
                'judul' => 'Handle Data Form dengan MySQL',
                'content' => "<h2>Menangani Data Form dengan PHP dan MySQL</h2>
                <p>Menangani data form dengan PHP melibatkan pengambilan data dari form dan memasukkan data ke dalam database. Berikut adalah contoh penggunaan form HTML untuk menangani data input.</p>

                <h3>Form Input Pengguna</h3>
                <form method='POST' action='submit.php'>
                    <label for='name'>Nama:</label>
                    <input type='text' id='name' name='name'>
                    <button disabled type='submit'>Kirim</button>
                </form>
                <pre><code>
                    <form method='POST' action='submit.php'>
                    <label for='name'>Nama:</label>
                    <input type='text' id='name' name='name'>
                    <button disabled type='submit'>Kirim</button>
                </form>
                </code></pre>

                <h3>Script PHP untuk Menyimpan Data</h3>
                <pre><code>&lt;?php
                if (\$_SERVER['REQUEST_METHOD'] == 'POST') {
                    \$name = \$_POST['name'];
                    \$sql = \"INSERT INTO users (name) VALUES ('\$name')\";
                    if (\$conn->query(\$sql) === TRUE) {
                        echo 'Data berhasil disimpan';
                    } else {
                        echo 'Error: ' . \$conn->error;
                    }
                }
                ?&gt;</code></pre>
                ",
                'urutan' => 4
            ],













            [
                'course_id' => 5,
                'judul' => 'CRUD (Create, Read, Update, Delete)?',
                'content' => "<h2>Apa itu CRUD?</h2>

        <p><strong>CRUD</strong> adalah singkatan dari <strong>Create, Read, Update, Delete</strong>. Ini adalah empat operasi dasar yang biasa digunakan dalam pengelolaan data pada aplikasi berbasis database.</p>

        <p>CRUD merupakan fondasi penting dalam hampir semua aplikasi web, termasuk sistem manajemen konten, aplikasi e-commerce, sistem informasi sekolah, dan banyak lagi.</p>

        <hr>

        <h3>1. Create (Membuat Data)</h3>
        <p>Operasi <code>Create</code> digunakan untuk menambahkan data baru ke dalam database.</p>
        <p>Contoh dalam PHP dengan MySQL:</p>
        <pre><code>&lt;?php
        \$sql = 'INSERT INTO users (nama, email) VALUES (\'Budi\', \'budi@mail.com\')';
        mysqli_query(\$conn, \$sql);
        ?&gt;</code></pre>

        <h3>2. Read (Membaca Data)</h3>
        <p>Operasi <code>Read</code> digunakan untuk mengambil dan menampilkan data dari database.</p>
        <pre><code>&lt;?php
        \$sql = 'SELECT * FROM users';
        \$result = mysqli_query(\$conn, \$sql);
        while (\$row = mysqli_fetch_assoc(\$result)) {
            echo \$row['nama'];
        }
        ?&gt;</code></pre>

        <h3>3. Update (Memperbarui Data)</h3>
        <p>Operasi <code>Update</code> digunakan untuk mengubah data yang sudah ada.</p>
        <pre><code>&lt;?php
        \$sql = 'UPDATE users SET email=\'baru@mail.com\' WHERE id=1';
        mysqli_query(\$conn, \$sql);
        ?&gt;</code></pre>

        <h3>4. Delete (Menghapus Data)</h3>
        <p>Operasi <code>Delete</code> digunakan untuk menghapus data dari database.</p>
        <pre><code>&lt;?php
        \$sql = 'DELETE FROM users WHERE id=1';
        mysqli_query(\$conn, \$sql);
        ?&gt;</code></pre>

        <hr>

        <h3>🔁 Alur CRUD dalam Aplikasi</h3>
        <p>Sebuah aplikasi CRUD biasanya memiliki tampilan yang memungkinkan pengguna untuk:</p>
        <ul>
            <li>Menambahkan data baru (form input)</li>
            <li>Melihat daftar data (tabel)</li>
            <li>Mengedit data (form edit)</li>
            <li>Menghapus data (dengan tombol delete)</li>
        </ul>

        <hr>

        <h3>📌 Kesimpulan</h3>
        <p>CRUD adalah inti dari sebagian besar aplikasi web. Dengan memahami konsep ini, kamu sudah bisa mulai membangun aplikasi berbasis data menggunakan PHP dan MySQL secara efisien dan terstruktur.</p>
    ",
                'urutan' => 1,
            ],





            [
                'course_id' => 5,
                'judul' => 'Simple Project operasi CRUD',
                'content' => ' <h2>Membuat Aplikasi Sederhana dengan Operasi CRUD</h2>

        <p>Setelah memahami konsep CRUD, sekarang kita akan membuat aplikasi web sederhana untuk mengelola data <strong>mahasiswa</strong> menggunakan PHP dan MySQL.</p>

        <hr>

        <h3>📁 Struktur Direktori Sederhana</h3>
        <pre><code>crud-app/
├── koneksi.php
├── index.php       ← Menampilkan data (READ)
├── tambah.php      ← Form tambah data (CREATE)
├── edit.php        ← Form edit data (UPDATE)
├── hapus.php       ← Menghapus data (DELETE)
</code></pre>

        <hr>

        <h3>1. Koneksi ke Database (koneksi.php)</h3>
        <pre><code>&lt;?php
$koneksi = mysqli_connect("localhost", "root", "", "universitas");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?&gt;</code></pre>

        <h3>2. Menampilkan Data (index.php)</h3>
        <pre><code>&lt;?php
include \'koneksi.php\';
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?&gt;

&lt;h2&gt;Daftar Mahasiswa&lt;/h2&gt;
&lt;a href="tambah.php"&gt;Tambah Mahasiswa&lt;/a&gt;
&lt;table border="1"&gt;
    &lt;tr&gt;&lt;th>Nama&lt;/th&gt;&lt;th>NIM&lt;/th&gt;&lt;th>Aksi&lt;/th&gt;&lt;/tr&gt;
    &lt;?php while($row = mysqli_fetch_array($data)): ?&gt;
        &lt;tr&gt;
            &lt;td&gt;&lt;?= $row["nama"] ?&gt;&lt;/td&gt;
            &lt;td&gt;&lt;?= $row["nim"] ?&gt;&lt;/td&gt;
            &lt;td&gt;
                &lt;a href="edit.php?id=<?= $row[\'id\'] ?>"&gt;Edit&lt;/a&gt; |
                &lt;a href="hapus.php?id=<?= $row[\'id\'] ?>"&gt;Hapus&lt;/a&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
    &lt;?php endwhile; ?&gt;
&lt;/table&gt;</code></pre>

        <h3>3. Menambahkan Data (tambah.php)</h3>
        <pre><code>&lt;form action="" method="POST"&gt;
    Nama: &lt;input type="text" name="nama"&gt;&lt;br&gt;
    NIM: &lt;input type="text" name="nim"&gt;&lt;br&gt;
    &lt;button type="submit"&gt;Simpan&lt;/button&gt;
&lt;/form&gt;

&lt;?php
if ($_POST) {
    include \'koneksi.php\';
    mysqli_query($koneksi, "INSERT INTO mahasiswa (nama, nim) VALUES (\'$_POST[nama]\', \'$_POST[nim]\')");
    header("Location: index.php");
}
?&gt;</code></pre>

        <h3>4. Mengedit Data (edit.php)</h3>
        <pre><code>&lt;?php
include \'koneksi.php\';
$id = $_GET["id"];
$mahasiswa = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id=$id"));
?&gt;

&lt;form method="POST"&gt;
    Nama: &lt;input type="text" name="nama" value="<?= $mahasiswa[\'nama\'] ?>"&gt;&lt;br&gt;
    NIM: &lt;input type="text" name="nim" value="<?= $mahasiswa[\'nim\'] ?>"&gt;&lt;br&gt;
    &lt;button type="submit"&gt;Update&lt;/button&gt;
&lt;/form&gt;

&lt;?php
if ($_POST) {
    mysqli_query($koneksi, "UPDATE mahasiswa SET nama=\'$_POST[nama]\', nim=\'$_POST[nim]\' WHERE id=$id");
    header("Location: index.php");
}
?&gt;</code></pre>

        <h3>5. Menghapus Data (hapus.php)</h3>
        <pre><code>&lt;?php
include \'koneksi.php\';
$id = $_GET["id"];
mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id=$id");
header("Location: index.php");
?&gt;</code></pre>

        <hr>

        <h3>✅ Kesimpulan</h3>
        <p>Dengan membuat aplikasi ini, kamu telah mempraktikkan seluruh konsep CRUD dalam bentuk nyata:</p>
        <ul>
            <li><strong>Create:</strong> Menambah data mahasiswa</li>
            <li><strong>Read:</strong> Melihat daftar mahasiswa</li>
            <li><strong>Update:</strong> Mengubah data mahasiswa</li>
            <li><strong>Delete:</strong> Menghapus data mahasiswa</li>
        </ul>
        <p>Ini adalah fondasi utama dari hampir semua aplikasi berbasis database.</p>
   ',
                'urutan' => 2,
            ],





            [
                'course_id' => 5,
                'judul' => 'Handle form dan data ke database',
                'content' => '  <h2>Menggunakan PHP untuk Menangani Form dan Memproses Data ke Database</h2>

        <p>Dalam aplikasi web, form adalah cara yang umum digunakan untuk mengumpulkan data dari pengguna. Pada tutorial ini, kita akan belajar bagaimana cara membuat form, menangani data yang dikirimkan, dan memprosesnya untuk disimpan ke dalam database menggunakan PHP dan MySQL.</p>

        <hr>

        <h3>📋 Membuat Form HTML</h3>
        <p>Langkah pertama adalah membuat form HTML di mana pengguna dapat mengisi data. Contoh form untuk memasukkan data mahasiswa:</p>
        <pre><code>&lt;form action="proses.php" method="POST"&gt;
            Nama: &lt;input type="text" name="nama"&gt;&lt;br&gt;
            NIM: &lt;input type="text" name="nim"&gt;&lt;br&gt;
           &lt;button type="submit"&gt;Simpan</button>
        &lt;/form&gt;</code></pre>

        <hr>

        <h3>📤 Menangani Data Form dengan PHP</h3>
        <p>Ketika pengguna mengisi form dan mengklik tombol submit, data akan dikirim ke server. Di PHP, kita dapat menggunakan variabel <strong>$_POST</strong> untuk menangani data yang dikirimkan dengan metode POST.</p>
        <p>Di sini kita akan membuat file PHP <strong>proses.php</strong> yang menangani data dari form dan memprosesnya ke dalam database.</p>

        <pre><code>&lt;?php
        // Koneksi ke database
        $koneksi = mysqli_connect("localhost", "root", "", "universitas");
        if (!$koneksi) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Menangani form dan menyimpan data ke database
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Menyimpan data dari form ke variabel PHP
            $nama = $_POST["nama"];
            $nim = $_POST["nim"];

            // Menyimpan data ke dalam database
            $query = "INSERT INTO mahasiswa (nama, nim) VALUES ($nama, $nim)";
            if (mysqli_query($koneksi, $query)) {
                echo "Data berhasil disimpan.";
            } else {
                echo "Terjadi kesalahan: " . mysqli_error($koneksi);
            }
        }
        ?&gt;</code></pre>

        <hr>

        <h3>🔐 Keamanan dan Sanitasi Data</h3>
        <p>Ketika menangani data dari form, sangat penting untuk menghindari potensi masalah keamanan seperti SQL Injection. Salah satu cara untuk mencegah SQL Injection adalah dengan menggunakan <strong>prepared statements</strong>.</p>
        <p>Berikut adalah contoh menggunakan prepared statements di PHP:</p>

        <pre><code>&lt;?php
        // Koneksi ke database
        $koneksi = mysqli_connect("localhost", "root", "", "universitas");
        if (!$koneksi) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Menangani form dan menyimpan data ke database dengan prepared statement
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $nim = $_POST["nim"];

            // Persiapkan query dengan parameter
            $stmt = $koneksi->prepare("INSERT INTO mahasiswa (nama, nim) VALUES (?, ?)");
            $stmt->bind_param("ss", $nama, $nim);  // ss berarti kedua parameter adalah string

            // Eksekusi query
            if ($stmt->execute()) {
                echo "Data berhasil disimpan.";
            } else {
                echo "Terjadi kesalahan: " . $stmt->error;
            }

            $stmt->close();
        }
        ?&gt;</code></pre>

        <hr>

        <h3>📌 Kesimpulan</h3>
        <p>Dengan menggunakan PHP, kita dapat dengan mudah menangani data form dan memprosesnya ke dalam database. Namun, selalu ingat untuk menjaga keamanan aplikasi dengan menggunakan teknik seperti prepared statements untuk mencegah SQL Injection. Form yang dibuat dapat menjadi elemen penting dalam aplikasi CRUD dan aplikasi berbasis database lainnya.</p>

        <p>Jangan lupa untuk selalu memvalidasi dan men-sanitize input yang diterima dari pengguna sebelum memprosesnya lebih lanjut ke dalam database!</p>
    ',
                'urutan' => 3,
            ],








            [
                'course_id' => 6,
                'judul' => "Validasi form & sanitasi data",
                'content' => "<h2>Validasi Form dan Sanitasi Data</h2>

<p>Validasi dan sanitasi adalah langkah penting dalam pengolahan data yang diterima melalui formulir (form). Validasi digunakan untuk memastikan data yang dimasukkan oleh pengguna sesuai dengan kriteria yang diinginkan, sementara sanitasi digunakan untuk membersihkan data agar tidak mengandung karakter atau elemen berbahaya, seperti kode HTML yang tidak diinginkan atau script yang dapat menyebabkan kerentanannya (seperti XSS dan SQL Injection).</p>

<hr>

<h3>1. Validasi Form</h3>
<p>Validasi form adalah proses untuk memeriksa apakah data yang dimasukkan oleh pengguna sudah sesuai dengan kriteria yang diinginkan. Ada berbagai cara untuk melakukan validasi data di PHP, baik menggunakan fungsi bawaan PHP atau dengan menggunakan filter.</p>

<h4>Contoh Validasi Email</h4>
<pre><code>&lt;?php
if (filter_var(\$_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo \"Email valid\";
} else {
    echo \"Email tidak valid\";
}
?&gt;</code></pre>

<h4>Contoh Validasi Angka</h4>
<pre><code>&lt;?php
if (filter_var(\$_POST['age'], FILTER_VALIDATE_INT)) {
    echo \"Age valid\";
} else {
    echo \"Age harus berupa angka\";
}
?&gt;</code></pre>

<hr>

<h3>2. Sanitasi Data</h3>
<p>Sanitasi adalah proses membersihkan data masukan agar tidak berbahaya. Sanitasi sangat penting untuk mencegah serangan seperti XSS (Cross-Site Scripting) dan SQL Injection yang dapat membahayakan aplikasi web.</p>

<h4>Contoh Sanitasi Input dengan <code>htmlspecialchars()</code></h4>
<p>Fungsi <code>htmlspecialchars()</code> digunakan untuk menghindari eksekusi kode HTML dan script yang dapat menyebabkan kerentanannya (XSS).</p>
<pre><code>&lt;?php
\$name = htmlspecialchars(\$_POST['name']);
echo \$name; // Menampilkan nama pengguna tanpa menjalankan HTML
?&gt;</code></pre>

<h4>Contoh Sanitasi Input dengan <code>filter_var()</code></h4>
<p>Fungsi <code>filter_var()</code> bisa digunakan untuk membersihkan input dari karakter-karakter yang tidak diinginkan.</p>
<pre><code>&lt;?php
\$email = filter_var(\$_POST['email'], FILTER_SANITIZE_EMAIL);
echo \$email; // Menghilangkan karakter-karakter berbahaya pada email
?&gt;</code></pre>

<hr>

<h3>3. Pentingnya Validasi dan Sanitasi</h3>
<ul>
    <li><strong>Validasi</strong> digunakan untuk memverifikasi bahwa input sesuai dengan format yang diinginkan.</li>
    <li><strong>Sanitasi</strong> menghilangkan karakter berbahaya yang mungkin digunakan untuk eksploitasi aplikasi.</li>
    <li>Validasi dan sanitasi bekerja bersama untuk meningkatkan keamanan aplikasi, mencegah serangan seperti SQL Injection dan Cross-Site Scripting (XSS).</li>
</ul>

<hr>

<h3>✅ Kesimpulan</h3>
<ul>
    <li>Selalu validasi data untuk memastikan input yang masuk sesuai dengan format yang diinginkan.</li>
    <li>Selalu sanitasi data untuk menghindari risiko XSS dan SQL Injection.</li>
    <li>Gunakan fungsi PHP seperti <code>htmlspecialchars()</code> dan <code>filter_var()</code> untuk validasi dan sanitasi input dari form.</li>
</ul>",
                'urutan' => 1,
            ],







            [
                'course_id' => 6,
                'judul' => "App Secure dengan prepared statements untuk menghindari SQL Injection",
                'content' => "<h2>Pengamanan Aplikasi dengan Prepared Statements</h2>

<p>SQL Injection adalah salah satu teknik serangan di mana pelaku dapat menyisipkan perintah SQL berbahaya ke dalam input pengguna untuk mendapatkan akses tidak sah ke database.</p>

<p>Contoh serangan SQL Injection sederhana:</p>
<pre><code>SELECT * FROM users WHERE email = 'email@example.com' OR '1' = '1'</code></pre>
<p>Kueri seperti di atas akan selalu bernilai benar dan bisa digunakan untuk membypass login.</p>

<hr>

<h3>Apa itu Prepared Statements?</h3>
<p><strong>Prepared statements</strong> adalah fitur dari database yang memungkinkan eksekusi query SQL dengan parameter yang telah diikat sebelumnya. Teknik ini membuat input pengguna tidak bisa dimanipulasi sebagai bagian dari query, sehingga aman dari SQL Injection.</p>

<hr>

<h3>Contoh Prepared Statements dengan MySQLi</h3>
<pre><code>&lt;?php
\$conn = new mysqli(\"localhost\", \"root\", \"\", \"db_example\");

// Menyiapkan statement
\$stmt = \$conn-&gt;prepare(\"SELECT * FROM users WHERE email = ? AND password = ?\");

// Binding parameter (s = string)
\$stmt-&gt;bind_param(\"ss\", \$email, \$password);

// Mengisi data
\$email = \$_POST['email'];
\$password = \$_POST['password'];

// Eksekusi
\$stmt-&gt;execute();

\$result = \$stmt-&gt;get_result();
if (\$result-&gt;num_rows &gt; 0) {
    echo \"Login berhasil\";
} else {
    echo \"Email atau password salah\";
}
?&gt;</code></pre>

<hr>

<h3>Perbedaan Query Biasa vs Prepared Statements</h3>
<table border='1' cellpadding='8'>
    <tr><th>Query Biasa</th><th>Prepared Statement</th></tr>
    <tr>
        <td><code>\$query = \"SELECT * FROM users WHERE email = '\$email'\";</code></td>
        <td><code>\$stmt = \$conn->prepare(\"SELECT * FROM users WHERE email = ?\");</code></td>
    </tr>
    <tr>
        <td>Rawan SQL Injection</td>
        <td>Lebih Aman</td>
    </tr>
</table>

<hr>

<h3>Keuntungan Menggunakan Prepared Statements</h3>
<ul>
    <li>Mencegah SQL Injection</li>
    <li>Meningkatkan keamanan aplikasi</li>
    <li>Memudahkan penggunaan query berulang</li>
</ul>

<hr>

<h3>✅ Kesimpulan</h3>
<ul>
    <li>SQL Injection adalah ancaman serius yang bisa dieksploitasi melalui input pengguna.</li>
    <li>Gunakan <strong>prepared statements</strong> untuk memisahkan query SQL dan data input pengguna.</li>
    <li>PHP mendukung prepared statements melalui MySQLi dan PDO.</li>
</ul>",
                'urutan' => 2
            ],





            [
                'course_id' => 6,
                'judul' => "password Hashing (password_hash)",
                'content' => "<h2>Menggunakan Hashing untuk Password dengan PHP</h2>

<p>Dalam membuat aplikasi web yang aman, sangat penting untuk <strong>tidak menyimpan password secara langsung</strong> (plaintext) di dalam database. Sebaliknya, password harus <strong>di-hash</strong> agar tetap aman meskipun database diretas.</p>

<hr>

<h3>1. Apa itu Hashing?</h3>
<p>Hashing adalah proses mengubah data menjadi string acak tetap (hash). Di PHP, hashing password bisa dilakukan dengan fungsi <code>password_hash()</code> dan diverifikasi dengan <code>password_verify()</code>.</p>

<hr>

<h3>2. Fungsi <code>password_hash()</code></h3>
<p>Fungsi ini digunakan untuk meng-hash password sebelum disimpan ke database.</p>
<pre><code>&lt;?php
\$password = \"myPassword123\";
\$hashedPassword = password_hash(\$password, PASSWORD_DEFAULT);

echo \$hashedPassword;
?&gt;</code></pre>

<p>Fungsi ini secara otomatis menggunakan algoritma yang aman (default-nya saat ini adalah bcrypt) dan menghasilkan hasil berbeda setiap kali meskipun password-nya sama karena adanya <strong>salt</strong> yang di-generate otomatis.</p>

<hr>

<h3>3. Menyimpan Password ke Database</h3>
<p>Setelah password di-hash, kamu bisa menyimpannya ke database dengan query seperti biasa.</p>
<pre><code>&lt;?php
// Misal \$hashedPassword sudah dihasilkan dari password_hash()
\$stmt = \$conn-&gt;prepare(\"INSERT INTO users (email, password) VALUES (?, ?)\");
\$stmt-&gt;bind_param(\"ss\", \$email, \$hashedPassword);
\$stmt-&gt;execute();
?&gt;</code></pre>

<hr>

<h3>4. Verifikasi Password dengan <code>password_verify()</code></h3>
<p>Ketika user login, kamu tidak membandingkan password langsung, tetapi dengan menggunakan <code>password_verify()</code>.</p>
<pre><code>&lt;?php
// Password input dari user
\$inputPassword = \$_POST['password'];

// Password hash dari database
\$hashedFromDB = \$user['password'];

if (password_verify(\$inputPassword, \$hashedFromDB)) {
    echo \"Password benar\";
} else {
    echo \"Password salah\";
}
?&gt;</code></pre>

<hr>

<h3>5. Kenapa Tidak Menggunakan MD5 atau SHA1?</h3>
<ul>
    <li><strong>MD5</strong> dan <strong>SHA1</strong> sudah tidak aman untuk hashing password karena mudah di-crack dengan brute-force atau rainbow table.</li>
    <li><strong>password_hash()</strong> jauh lebih aman karena menggunakan algoritma modern seperti bcrypt yang sudah dioptimasi untuk keamanan.</li>
</ul>

<hr>

<h3>✅ Kesimpulan</h3>
<ul>
    <li>Selalu hash password sebelum disimpan ke database.</li>
    <li>Gunakan <code>password_hash()</code> dan <code>password_verify()</code> untuk memastikan keamanan login pengguna.</li>
    <li>Jangan pernah menyimpan password dalam bentuk teks biasa (plaintext)!</li>
</ul>",
                'urutan' => 3,
            ],



















            [
                'course_id' => 7,
                'urutan' => 1,
                'judul' => 'Heading, Paragraph, Lists',
                'content' =>  '
        <h2>Pendahuluan</h2>
        <p>HTML (Hypertext Markup Language) adalah bahasa standar yang digunakan untuk membuat dan menyusun halaman web. Sebagai dasar dari semua halaman web, HTML memungkinkan Anda untuk menentukan struktur konten yang akan ditampilkan oleh browser. Dalam materi ini, kita akan membahas elemen dasar dalam HTML, termasuk <strong>heading</strong>, <strong>paragraf</strong>, dan <strong>list</strong>, yang sangat penting dalam membangun halaman yang terstruktur dan mudah dipahami.</p>

        <h3>1. Heading (Judul)</h3>
        <p>Elemen <code>&lt;h1&gt;</code> hingga <code>&lt;h6&gt;</code> adalah elemen <strong>heading</strong> dalam HTML. Heading digunakan untuk menandai judul atau subjudul pada halaman web. Dalam struktur HTML, elemen heading juga digunakan untuk menunjukkan tingkat pentingnya sebuah informasi. Heading sangat berguna untuk membantu pembaca memahami struktur dan hierarki konten di halaman web.</p>

        <p>Heading dengan tag <code>&lt;h1&gt;</code> dianggap sebagai judul utama halaman dan harus digunakan hanya satu kali di setiap halaman untuk menjaga konsistensi dan struktur halaman yang baik. Tag <code>&lt;h2&gt;</code> hingga <code>&lt;h6&gt;</code> digunakan untuk subjudul atau judul bagian yang lebih kecil, di mana <code>&lt;h2&gt;</code> adalah subjudul utama, <code>&lt;h3&gt;</code> subjudul dari <code>&lt;h2&gt;</code>, dan seterusnya.</p>

        <h4>Contoh Penggunaan Heading:</h4>
        <pre><code>&lt;h1&gt;Judul Utama Halaman&lt;/h1&gt;</code></pre>
        <pre><code>&lt;h2&gt;Subjudul Bagian Utama&lt;/h2&gt;</code></pre>
        <pre><code>&lt;h3&gt;Sub-subjudul&lt;/h3&gt;</code></pre>

        <p><strong>Penjelasan elemen heading lebih lanjut:</strong></p>
        <ul>
            <li><strong><code>&lt;h1&gt;</code>:</strong> Digunakan untuk menandai judul utama halaman. Ini memberikan gambaran umum tentang apa yang akan dibahas dalam halaman tersebut. Setiap halaman sebaiknya memiliki satu <code>&lt;h1&gt;</code> untuk menjaga struktur yang konsisten.</li>
            <li><strong><code>&lt;h2&gt;</code>:</strong> Digunakan untuk menandai subjudul utama yang membagi konten menjadi bagian yang lebih kecil. Setiap bagian utama dari halaman bisa diberi subjudul dengan tag <code>&lt;h2&gt;</code>.</li>
            <li><strong><code>&lt;h3&gt;</code> hingga <code>&lt;h6&gt;</code>:</strong> Digunakan untuk sub-subjudul yang lebih spesifik. Seiring menurunnya angka, semakin kecil tingkat pentingnya judul tersebut dalam struktur konten.</li>
        </ul>

        <h4>Manfaat Penggunaan Heading:</h4>
        <p>Selain memberikan struktur visual pada halaman web, heading juga memiliki manfaat SEO (Search Engine Optimization). Mesin pencari seperti Google menggunakan heading untuk menentukan relevansi dan urutan informasi di halaman web. Oleh karena itu, penggunaan heading yang benar dan terstruktur dengan baik dapat membantu halaman Anda lebih mudah ditemukan di hasil pencarian.</p>

        <h3>2. Paragraf</h3>
        <p>Paragraf adalah elemen dasar dalam HTML yang digunakan untuk mengelompokkan teks dalam bentuk blok. Setiap paragraf diletakkan dalam elemen <code>&lt;p&gt;</code>. Paragraf membantu membagi teks menjadi bagian yang lebih mudah dibaca, membuat konten lebih terstruktur dan tidak terlihat padat. Tanpa paragraf, teks akan muncul dalam satu blok panjang yang bisa membuat pembaca merasa kesulitan dalam memahami informasi.</p>

        <h4>Contoh Penggunaan Paragraf:</h4>
        <pre><code>&lt;p&gt;Ini adalah paragraf pertama yang menjelaskan topik tertentu&lt;/p&gt;</code></pre>
        <pre><code>&lt;p&gt;Ini adalah paragraf kedua yang berisi detail lebih lanjut tentang topik tersebut&lt;/p&gt;</code></pre>

        <h4>Penjelasan Paragraf Lebih Lanjut:</h4>
        <p>Paragraf membantu meningkatkan keterbacaan konten halaman web. Ketika menulis teks panjang, menggunakan paragraf akan membuat teks lebih mudah dipahami dan diikuti. Setiap paragraf dipisahkan dengan jarak vertikal yang membuat halaman lebih rapi.</p>

        <h4>Manfaat Penggunaan Paragraf:</h4>
        <ul>
            <li><strong>Keterbacaan:</strong> Paragraf yang dipisahkan dengan baik membantu pembaca mencerna informasi dengan lebih mudah.</li>
            <li><strong>Struktur Teks:</strong> Menggunakan paragraf memungkinkan Anda untuk mengorganisir informasi secara terstruktur, sehingga pembaca dapat mengikuti ide utama dengan mudah.</li>
            <li><strong>SEO:</strong> Mesin pencari juga menyukai halaman yang terstruktur dengan baik, termasuk penggunaan paragraf yang memisahkan topik-topik utama.</li>
        </ul>

        <h3>3. List (Daftar)</h3>
        <p>Daftar adalah elemen HTML yang digunakan untuk mengelompokkan informasi dalam bentuk list atau urutan. Ada dua jenis daftar utama dalam HTML: <code>&lt;ul&gt;</code> (unordered list) dan <code>&lt;ol&gt;</code> (ordered list).</p>

        <h4>Daftar Tidak Terurut (Unordered List - &lt;ul&gt;)</h4>
        <p>Daftar tidak terurut digunakan untuk menampilkan informasi yang tidak memiliki urutan tertentu. Item dalam daftar tidak memiliki angka atau urutan tertentu, hanya simbol titik atau bullet yang digunakan untuk memisahkan setiap item.</p>

        <h4>Contoh Penggunaan Daftar Tidak Terurut:</h4>
        <pre><code>&lt;ul&gt;
  &lt;li&gt;Apple&lt;/li&gt;
  &lt;li&gt;Banana&lt;/li&gt;
  &lt;li&gt;Cherry&lt;/li&gt;
&lt;/ul&gt;</code></pre>

        <h4>Daftar Terurut (Ordered List - &lt;ol&gt;)</h4>
        <p>Daftar terurut digunakan ketika item dalam daftar memiliki urutan tertentu. Ini berguna ketika Anda ingin menyusun informasi dalam langkah-langkah atau urutan numerik.</p>

        <h4>Contoh Penggunaan Daftar Terurut:</h4>
        <pre><code>&lt;ol&gt;
  &lt;li&gt;Langkah pertama&lt;/li&gt;
  &lt;li&gt;Langkah kedua&lt;/li&gt;
  &lt;li&gt;Langkah ketiga&lt;/li&gt;
&lt;/ol&gt;</code></pre>

        <h4>Perbedaan antara Daftar Terurut dan Daftar Tidak Terurut:</h4>
        <ul>
            <li><strong>Daftar Tidak Terurut (<code>&lt;ul&gt;</code>):</strong> Digunakan untuk item yang tidak memerlukan urutan khusus.</li>
            <li><strong>Daftar Terurut (<code>&lt;ol&gt;</code>):</strong> Digunakan untuk item yang memerlukan urutan tertentu, seperti langkah-langkah atau instruksi yang harus diikuti dalam urutan yang benar.</li>
        </ul>

        <h3>4. Mengapa Heading, Paragraf, dan List Penting dalam HTML?</h3>
        <p>Heading, paragraf, dan list adalah elemen dasar yang sangat penting dalam HTML karena mereka membantu menyusun halaman web dengan cara yang terstruktur, membuatnya mudah dibaca dan dimengerti oleh pengunjung. Selain itu, penggunaan elemen-elemen ini yang tepat sangat penting untuk SEO, karena mesin pencari akan lebih mudah memahami dan mengindeks halaman yang terstruktur dengan baik.</p>

        <p>Penggunaan heading yang benar membantu pembaca dan mesin pencari memahami topik utama dan subtopik dalam halaman. Paragraf memungkinkan untuk menyusun informasi dalam potongan-potongan kecil yang mudah dicerna, sementara list mempermudah penyusunan informasi yang berbentuk urutan atau item-item yang relevan.</p>
    ',
            ],


            [
                'course_id' => 7,
                'urutan' => 2,
                'judul' => 'Form Input',
                'content' => '
        <h1>form input (input, select, textarea)</h1>
        <h2>Pendahuluan</h2>
        <p>Formulir (form) dalam HTML digunakan untuk mengumpulkan data dari pengguna. Elemen form memungkinkan pengguna untuk memasukkan data seperti nama, alamat email, dan lain-lain, yang kemudian dapat diproses oleh server. Di dalam formulir HTML, kita sering menggunakan elemen seperti <strong>input</strong>, <strong>select</strong>, dan <strong>textarea</strong> untuk menerima berbagai jenis input dari pengguna. Pada materi ini, kita akan membahas cara penggunaan elemen-elemen ini dengan penjelasan yang mendalam.</p>

        <h3>1. Input</h3>
        <p>Elemen <code>&lt;input&gt;</code> adalah elemen yang sangat umum digunakan dalam HTML untuk menerima input dari pengguna. Elemen ini dapat digunakan untuk berbagai jenis input, seperti teks, angka, tanggal, dan lain-lain. Jenis input ditentukan melalui atribut <code>type</code>.</p>

        <h4>Jenis-Jenis Input yang Umum Digunakan:</h4>
        <ul>
            <li><strong>Text:</strong> <code>&lt;input type="text"&gt;</code> digunakan untuk menerima input teks dari pengguna, seperti nama atau alamat.</li>
            <li><strong>Password:</strong> <code>&lt;input type="password"&gt;</code> digunakan untuk menerima input yang bersifat rahasia, seperti kata sandi, di mana karakter yang dimasukkan disembunyikan.</li>
            <li><strong>Checkbox:</strong> <code>&lt;input type="checkbox"&gt;</code> digunakan untuk membuat opsi pilihan yang dapat dipilih oleh pengguna (true/false).</li>
            <li><strong>Radio:</strong> <code>&lt;input type="radio"&gt;</code> digunakan untuk memilih satu opsi dari beberapa pilihan yang tersedia.</li>
            <li><strong>Submit:</strong> <code>&lt;input type="submit"&gt;</code> digunakan untuk mengirimkan formulir ke server.</li>
            <li><strong>Button:</strong> <code>&lt;input type="button"&gt;</code> digunakan untuk membuat tombol yang tidak mengirimkan formulir, tetapi dapat diprogram dengan JavaScript untuk menjalankan tindakan tertentu.</li>
        </ul>

        <h4>Contoh Penggunaan Elemen Input:</h4>
        <pre><code>&lt;form&gt;
  &lt;label for="nama"&gt;Nama:&lt;/label&gt;
  &lt;input type="text" id="nama" name="nama"&gt;

  &lt;label for="password"&gt;Kata Sandi:&lt;/label&gt;
  &lt;input type="password" id="password" name="password"&gt;

  &lt;input type="submit" value="Kirim"&gt;
&lt;/form&gt;</code></pre>

        <h4>Penjelasan Lebih Lanjut:</h4>
        <p>Elemen <code>&lt;input&gt;</code> sangat fleksibel karena memungkinkan berbagai jenis data dikumpulkan dari pengguna. Atribut <code>type</code> menentukan tipe input yang diterima. Misalnya, ketika menggunakan <code>type="text"</code>, pengguna dapat memasukkan teks biasa, sementara <code>type="password"</code> akan menyembunyikan karakter input. Dengan menggunakan <code>type="radio"</code> atau <code>type="checkbox"</code>, kita dapat menyediakan opsi yang memungkinkan pengguna untuk memilih lebih dari satu opsi (checkbox) atau hanya satu opsi (radio).</p>

        <h4>Manfaat Penggunaan Input:</h4>
        <ul>
            <li><strong>Koleksi Data:</strong> Formulir HTML memungkinkan kita mengumpulkan berbagai jenis data dari pengguna dengan cara yang efisien.</li>
            <li><strong>Kemudahan Penggunaan:</strong> Input yang tepat mempermudah pengguna dalam memberikan data yang dibutuhkan, seperti nama, email, atau preferensi mereka.</li>
            <li><strong>Validasi:</strong> Beberapa tipe input memungkinkan kita untuk melakukan validasi data sebelum mengirimkan formulir ke server, seperti memeriksa format email atau memastikan bahwa kata sandi tidak kosong.</li>
        </ul>

        <h3>2. Select (Dropdown Menu)</h3>
        <p>Elemen <code>&lt;select&gt;</code> digunakan untuk membuat menu dropdown, yang memungkinkan pengguna memilih satu atau beberapa pilihan dari daftar yang disediakan. Biasanya, elemen <code>&lt;select&gt;</code> digunakan bersama dengan elemen <code>&lt;option&gt;</code> untuk menampilkan pilihan-pilihan yang dapat dipilih oleh pengguna.</p>

        <h4>Contoh Penggunaan Elemen Select:</h4>
        <pre><code>&lt;form&gt;
  &lt;label for="negara"&gt;Pilih Negara:&lt;/label&gt;
  &lt;select id="negara" name="negara"&gt;
    &lt;option value="indonesia"&gt;Indonesia&lt;/option&gt;
    &lt;option value="malaysia"&gt;Malaysia&lt;/option&gt;
    &lt;option value="singapura"&gt;Singapura&lt;/option&gt;
  &lt;/select&gt;
  &lt;input type="submit" value="Kirim"&gt;
&lt;/form&gt;</code></pre>

        <h4>Penjelasan Lebih Lanjut:</h4>
        <p>Elemen <code>&lt;select&gt;</code> memungkinkan kita untuk membuat dropdown menu yang dapat menampung beberapa pilihan di dalamnya. Setiap pilihan dalam dropdown ditandai dengan elemen <code>&lt;option&gt;</code>. Atribut <code>value</code> dalam elemen <code>&lt;option&gt;</code> menentukan nilai yang dikirimkan ketika pengguna memilih pilihan tersebut. Menu dropdown sangat berguna ketika ada banyak pilihan, sehingga tidak perlu menampilkan semuanya sekaligus.</p>

        <h4>Manfaat Penggunaan Select:</h4>
        <ul>
            <li><strong>Penyederhanaan Pilihan:</strong> Menggunakan dropdown menu membuat daftar pilihan yang banyak menjadi lebih ringkas dan mudah diakses oleh pengguna.</li>
            <li><strong>Pengurangan Kesalahan:</strong> Dengan menyediakan pilihan tetap, pengguna dapat memilih opsi yang benar tanpa perlu mengetikkan data secara manual, yang mengurangi kesalahan.</li>
            <li><strong>Mempermudah Navigasi:</strong> Dropdown menu yang terorganisir dengan baik mempermudah pengguna dalam menemukan pilihan yang mereka inginkan.</li>
        </ul>

        <h3>3. Textarea</h3>
        <p>Elemen <code>&lt;textarea&gt;</code> digunakan untuk menerima input teks yang lebih panjang dari pengguna. Biasanya, elemen ini digunakan untuk meminta pengguna menulis pesan, komentar, atau opini. Tidak seperti elemen <code>&lt;input&gt;</code> yang hanya dapat digunakan untuk input satu baris, <code>&lt;textarea&gt;</code> memungkinkan input multi-baris.</p>

        <h4>Contoh Penggunaan Textarea:</h4>
        <pre><code>&lt;form&gt;
  &lt;label for="komentar"&gt;Komentar Anda:&lt;/label&gt;
  &lt;textarea id="komentar" name="komentar" rows="4" cols="50"&gt;&lt;/textarea&gt;
  &lt;input type="submit" value="Kirim"&gt;
&lt;/form&gt;</code></pre>

        <h4>Penjelasan Lebih Lanjut:</h4>
        <p>Elemen <code>&lt;textarea&gt;</code> digunakan untuk menerima input teks yang lebih panjang. Pengguna dapat mengetikkan beberapa baris teks di dalam area textarea. Anda bisa mengatur ukuran area input menggunakan atribut <code>rows</code> untuk menentukan jumlah baris dan <code>cols</code> untuk menentukan lebar kolom. Textarea sangat berguna ketika Anda ingin menerima data dalam format yang lebih bebas, seperti komentar, deskripsi, atau alamat.</p>

        <h4>Manfaat Penggunaan Textarea:</h4>
        <ul>
            <li><strong>Input Teks Panjang:</strong> Textarea digunakan ketika Anda membutuhkan area untuk teks panjang, seperti komentar atau pesan dari pengguna.</li>
            <li><strong>Fleksibilitas:</strong> Dengan textarea, pengguna bisa menulis lebih bebas tanpa dibatasi oleh ukuran baris input seperti pada elemen <code>&lt;input&gt;</code>.</li>
            <li><strong>Mempermudah Pengumpulan Data:</strong> Teks panjang dapat dikumpulkan dengan lebih mudah menggunakan textarea, yang memungkinkan pengguna untuk memberikan masukan lebih rinci dan mendalam.</li>
        </ul>

        <h3>4. Mengapa Form Input Penting dalam HTML?</h3>
        <p>Form input sangat penting dalam HTML karena memungkinkan kita mengumpulkan informasi dari pengguna yang kemudian dapat digunakan untuk berbagai tujuan, seperti registrasi, login, pengisian survey, atau pengumpulan feedback. Dengan menggunakan elemen seperti input, select, dan textarea, kita dapat menyediakan antarmuka yang jelas dan mudah digunakan untuk mengumpulkan data dari pengguna. Formulir yang baik memungkinkan pengguna memberikan input yang diperlukan dengan cara yang cepat dan efisien.</p>
    ',
            ],

            [
                'course_id' => 7,
                'urutan' => 3,
                'judul' => 'Image, Video, & Audio',
                'content' => '
        <p>Di dalam dunia pengembangan web, media seperti gambar, video, dan audio adalah komponen penting dalam menyampaikan informasi kepada pengguna. Dengan HTML, kamu bisa menyisipkan berbagai jenis media ke dalam halaman web. Mari kita pelajari cara untuk melakukannya.</p>

        <h3>1. Menyisipkan Gambar</h3>
        <p>Untuk menampilkan gambar di halaman web, kita menggunakan tag <code>&lt;img&gt;</code>. Tag ini digunakan untuk menyisipkan gambar statis, yang sering kali digunakan untuk logo, ilustrasi, ikon, dan foto. Gambar adalah salah satu jenis konten multimedia yang membuat halaman web lebih menarik dan informatif.</p>
        <p>Berikut adalah contoh penggunaan tag <code>&lt;img&gt;</code>:</p>
        <pre><code>&lt;img src="images/gambar.jpg" alt="Gambar Deskripsi" width="600" height="400"&gt;</code></pre>

        <p><strong>Penjelasan:</strong>
            <ul>
                <li><code>src</code>: Atribut ini menunjukkan lokasi file gambar yang ingin ditampilkan. Ini bisa berupa path relatif, seperti <code>images/gambar.jpg</code>, atau URL absolut, seperti <code>https://example.com/gambar.jpg</code>.</li>
                <li><code>alt</code>: Atribut ini memberikan deskripsi alternatif untuk gambar. Deskripsi ini muncul ketika gambar gagal dimuat atau ketika pengguna menggunakan pembaca layar. Atribut ini juga berfungsi untuk SEO (Search Engine Optimization) karena mesin pencari dapat membaca deskripsi gambar.</li>
                <li><code>width</code> dan <code>height</code>: Atribut ini mengontrol ukuran gambar yang ditampilkan di halaman. Meskipun gambar asli dapat memiliki dimensi yang lebih besar atau lebih kecil, atribut ini memungkinkan kamu untuk menyesuaikan tampilan gambar sesuai kebutuhan.</li>
            </ul>
        </p>

        <p><strong>Contoh lain:</strong> Jika gambar berada dalam folder yang terpisah, kamu bisa menggunakan path relatif untuk mengaksesnya, seperti berikut:</p>
        <pre><code>&lt;img src="assets/images/logo.png" alt="Logo Website"&gt;</code></pre>

        <h3>2. Menyisipkan Video</h3>
        <p>Selain gambar, video juga merupakan media yang sangat efektif dalam menyampaikan informasi secara visual dan audio. HTML menyediakan tag <code>&lt;video&gt;</code> untuk menyisipkan video ke dalam halaman web. Dengan tag ini, kamu bisa mengontrol pemutaran video secara langsung di halaman tanpa perlu menggunakan plugin tambahan seperti Flash.</p>
        <p>Berikut adalah cara menggunakan tag <code>&lt;video&gt;</code> untuk menyisipkan video:</p>
        <pre><code>&lt;video controls width="600" height="400"&gt;
    &lt;source src="video.mp4" type="video/mp4"&gt;
    Browser Anda tidak mendukung elemen video.
&lt;/video&gt;</code></pre>

        <p><strong>Penjelasan:</strong>
            <ul>
                <li><code>controls</code>: Atribut ini menambahkan kontrol pemutaran, seperti tombol play/pause, volume, dan progress bar. Tanpa atribut ini, video akan diputar otomatis tanpa kontrol.</li>
                <li><code>width</code> dan <code>height</code>: Atribut ini mengatur ukuran video di halaman.</li>
                <li><code>&lt;source&gt;</code>: Elemen <code>&lt;source&gt;</code> digunakan untuk mendefinisikan file video yang akan diputar. Atribut <code>src</code> menunjukkan lokasi file, sedangkan atribut <code>type</code> menunjukkan format video (misalnya, <code>video/mp4</code>).</li>
            </ul>
        </p>

        <p><strong>Catatan:</strong> Sebaiknya kamu menyediakan beberapa format video (seperti .mp4, .webm, .ogg) untuk memastikan kompatibilitas dengan berbagai browser. HTML5 memungkinkan kamu untuk menyediakan berbagai format video untuk kompatibilitas lintas platform.</p>

        <h3>3. Menyisipkan Audio</h3>
        <p>Selain video, audio juga bisa disisipkan menggunakan tag <code>&lt;audio&gt;</code>. Media audio sering digunakan dalam aplikasi web untuk musik, suara latar, atau efek suara. Seperti halnya tag video, tag audio juga mendukung atribut <code>controls</code> untuk memberikan kontrol pemutaran kepada pengguna.</p>
        <p>Berikut adalah contoh untuk menyisipkan file audio:</p>
        <pre><code>&lt;audio controls&gt;
    &lt;source src="musik.mp3" type="audio/mp3"&gt;
    Browser Anda tidak mendukung elemen audio.
&lt;/audio&gt;</code></pre>

        <p><strong>Penjelasan:</strong>
            <ul>
                <li><code>controls</code>: Menambahkan kontrol pemutaran untuk audio, termasuk tombol play/pause dan pengaturan volume.</li>
                <li><code>src</code>: Menunjukkan lokasi file audio yang ingin diputar.</li>
                <li><code>type</code>: Menentukan format file audio, misalnya <code>audio/mp3</code> atau <code>audio/ogg</code>.</li>
            </ul>
        </p>

        <p>Jika pengguna memiliki browser yang tidak mendukung elemen audio, kamu bisa menambahkan pesan alternatif di dalam tag <code>&lt;audio&gt;</code>, seperti yang ditunjukkan di atas ("Browser Anda tidak mendukung elemen audio").</p>

        <h3>Ringkasan:</h3>
        <ul>
            <li><code>&lt;img&gt;</code> digunakan untuk menyisipkan gambar dengan atribut <code>src</code> dan <code>alt</code>.</li>
            <li><code>&lt;video&gt;</code> digunakan untuk menyisipkan video, dengan kontrol pemutaran menggunakan atribut <code>controls</code>.</li>
            <li><code>&lt;audio&gt;</code> digunakan untuk menyisipkan file audio dengan kontrol pemutaran menggunakan atribut <code>controls</code>.</li>
        </ul>
        <p>Dengan memahami cara menyisipkan gambar, video, dan audio ini, kamu bisa membuat halaman web yang lebih menarik dan interaktif!</p>
    ',
            ],

            [
                'course_id' => 7,
                'urutan' => 4,
                'judul' => 'Link & Navigation',
                'content' => '
        <p>Link dan navigasi adalah komponen penting dalam membangun sebuah website. Mereka memungkinkan pengguna untuk berpindah antar halaman atau bagian-bagian tertentu dari halaman yang sama. HTML memberikan tag khusus untuk membuat link dan mengorganisir navigasi di halaman web.</p>

        <h3>1. Menambahkan Link (Tautan)</h3>
        <p>Link atau tautan adalah elemen HTML yang menghubungkan satu halaman dengan halaman lainnya. Link dibuat menggunakan tag <code>&lt;a&gt;</code> (anchor). Tautan ini dapat mengarah ke halaman lain, ke bagian lain di halaman yang sama, atau ke sumber daya eksternal.</p>
        <p>Berikut adalah contoh cara membuat tautan:</p>
        <pre><code>&lt;a href="https://www.example.com"&gt;Kunjungi Website&lt;/a&gt;</code></pre>

        <p><strong>Penjelasan:</strong>
            <ul>
                <li><code>href</code>: Atribut <code>href</code> adalah atribut utama pada tag <code>&lt;a&gt;</code> yang berfungsi untuk menentukan tujuan dari tautan tersebut. Nilai dari atribut ini bisa berupa URL absolut (misalnya, <code>https://www.example.com</code>) atau path relatif (misalnya, <code>page.html</code>).</li>
                <li><code>&lt;a&gt;</code>: Tag ini membungkus teks atau elemen lain yang akan menjadi tautan. Pengguna dapat mengklik elemen ini untuk menuju ke lokasi yang ditentukan dalam atribut <code>href</code>.</li>
            </ul>
        </p>

        <h3>2. Menambahkan Link ke Bagian Tertentu dalam Halaman</h3>
        <p>Selain mengarah ke halaman lain, tautan juga bisa mengarah ke bagian tertentu dalam halaman yang sama. Ini sangat berguna untuk membuat navigasi dalam halaman yang panjang atau untuk membuat daftar isi.</p>
        <pre><code>&lt;a href="#bagian1"&gt;Ke Bagian 1&lt;/a&gt;</code></pre>
        <p>Dan pada bagian yang dituju, gunakan atribut <code>id</code>:</p>
        <pre><code>&lt;div id="bagian1"&gt;Ini adalah Bagian 1&lt;/div&gt;</code></pre>

        <h3>3. Menambahkan Link ke Email</h3>
        <p>Kamu juga bisa menambahkan link yang membuka aplikasi email untuk mengirim email ke alamat tertentu. Untuk melakukannya, gunakan skema <code>mailto:</code> dalam atribut <code>href</code>.</p>
        <pre><code>&lt;a href="mailto:email@example.com"&gt;Kirim Email&lt;/a&gt;</code></pre>

        <h3>4. Membuat Menu Navigasi</h3>
        <p>Untuk mempermudah navigasi di halaman web, kamu bisa membuat menu navigasi dengan beberapa link yang mengarah ke bagian-bagian tertentu dalam halaman atau ke halaman lain.</p>
        <pre><code>&lt;nav&gt;
    &lt;ul&gt;
        &lt;li&gt;&lt;a href="#home"&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#about"&gt;About&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#services"&gt;Services&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>

        <p><strong>Penjelasan:</strong>
            <ul>
                <li><code>&lt;nav&gt;</code>: Elemen ini digunakan untuk membungkus link navigasi. Ini memberi tahu browser bahwa elemen di dalamnya adalah bagian dari navigasi situs web.</li>
                <li><code>&lt;ul&gt;</code>: Tag ini membuat daftar tak terurut. Di dalamnya, kamu bisa menambahkan item daftar dengan tag <code>&lt;li&gt;</code>.</li>
                <li><code>&lt;a&gt;</code>: Tag ini digunakan untuk membuat tautan dalam menu navigasi.</li>
            </ul>
        </p>

        <h3>5. Membuka Link di Tab Baru</h3>
        <p>Jika kamu ingin agar link terbuka di tab baru saat diklik, tambahkan atribut <code>target="_blank"</code> pada tag <code>&lt;a&gt;</code>.</p>
        <pre><code>&lt;a href="https://www.example.com" target="_blank"&gt;Kunjungi Website&lt;/a&gt;</code></pre>

        <h3>Ringkasan:</h3>
        <ul>
            <li><code>&lt;a&gt;</code> digunakan untuk membuat link, dengan atribut <code>href</code> yang mengarahkan ke lokasi tujuan.</li>
            <li><code>&lt;nav&gt;</code> digunakan untuk membuat menu navigasi yang dapat menghubungkan berbagai bagian dalam halaman atau halaman lain.</li>
            <li><code>target="_blank"</code> digunakan untuk membuka link di tab baru.</li>
        </ul>

        <p>Dengan memahami cara membuat link dan navigasi yang baik, kamu bisa membuat website yang lebih interaktif dan mudah dijelajahi.</p>
    ',
            ],










            [
                'course_id' => 8,
                'urutan' => 1,
                'judul' => 'Elemen Layout Dasar',
                'content' => '
        <h2>Pendahuluan</h2>
        <p>HTML tidak hanya digunakan untuk menampilkan konten, tetapi juga untuk menyusun struktur halaman web dengan rapi dan semantik. Untuk itu, kita menggunakan elemen layout dasar seperti <code>&lt;div&gt;</code>, <code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;section&gt;</code>, dan <code>&lt;article&gt;</code>. Elemen-elemen ini membantu developer membuat tata letak yang lebih mudah dipahami oleh browser, developer lain, bahkan oleh mesin pencari.</p>

        <h3>1. &lt;div&gt; - Elemen Kontainer Umum</h3>
        <p><code>&lt;div&gt;</code> (singkatan dari "division") adalah elemen non-semantik yang digunakan sebagai kontainer umum untuk mengelompokkan elemen HTML lainnya. Elemen ini tidak memiliki arti semantik, namun sangat berguna dalam pengelompokan dan pengaturan layout menggunakan CSS.</p>

        <pre><code>&lt;div class="konten"&gt;
  &lt;p&gt;Ini adalah paragraf di dalam div.&lt;/p&gt;
&lt;/div&gt;</code></pre>

        <ul>
            <li><strong>Non-semantik:</strong> Tidak menggambarkan arti konten di dalamnya.</li>
            <li><strong>Fleksibel:</strong> Sering digunakan bersama CSS untuk membentuk grid, layout, atau posisi elemen.</li>
        </ul>

        <h3>2. &lt;header&gt; - Bagian Atas Halaman</h3>
        <p><code>&lt;header&gt;</code> adalah elemen semantik yang mewakili bagian kepala dari halaman atau bagian dari konten. Biasanya digunakan untuk memuat judul, navigasi utama, logo, atau elemen pengantar lainnya.</p>

        <pre><code>&lt;header&gt;
  &lt;h1&gt;Selamat Datang di Website Saya&lt;/h1&gt;
  &lt;nav&gt;
    &lt;a href="/"&gt;Beranda&lt;/a&gt;
    &lt;a href="/kontak"&gt;Kontak&lt;/a&gt;
  &lt;/nav&gt;
&lt;/header&gt;</code></pre>

        <p><strong>Catatan:</strong> &lt;header&gt; tidak harus muncul hanya sekali di halaman. Ia bisa digunakan di dalam &lt;article&gt; atau &lt;section&gt; untuk memberikan pengantar lokal.</p>

        <h3>3. &lt;footer&gt; - Bagian Bawah Halaman</h3>
        <p><code>&lt;footer&gt;</code> adalah elemen semantik yang biasanya terletak di bagian bawah halaman atau konten. Elemen ini biasanya berisi informasi hak cipta, tautan kebijakan privasi, atau kontak pengembang.</p>

        <pre><code>&lt;footer&gt;
  &lt;p&gt;&copy; 2025 Website Saya. Semua Hak Dilindungi.&lt;/p&gt;
&lt;/footer&gt;</code></pre>

        <p><strong>Penggunaan:</strong> Sama seperti &lt;header&gt;, elemen &lt;footer&gt; juga bisa digunakan di dalam &lt;section&gt; atau &lt;article&gt; sebagai penutup lokal konten.</p>

        <h3>4. &lt;section&gt; - Bagian Terpisah dari Konten</h3>
        <p><code>&lt;section&gt;</code> adalah elemen semantik yang digunakan untuk mengelompokkan konten yang memiliki tema atau tujuan tertentu. Biasanya digunakan untuk membagi halaman menjadi bagian-bagian yang lebih kecil seperti fitur, berita, atau artikel.</p>

        <pre><code>&lt;section&gt;
  &lt;h2&gt;Fitur Utama&lt;/h2&gt;
  &lt;p&gt;Kami menawarkan berbagai fitur menarik.&lt;/p&gt;
&lt;/section&gt;</code></pre>

        <ul>
            <li><strong>Semantik:</strong> Menjelaskan struktur dan tujuan konten kepada browser dan pembaca screen reader.</li>
            <li><strong>SEO-friendly:</strong> Membantu mesin pencari memahami struktur konten.</li>
        </ul>

        <h3>5. &lt;article&gt; - Konten Independen</h3>
        <p><code>&lt;article&gt;</code> digunakan untuk membungkus konten yang bisa berdiri sendiri dan dapat dipublikasikan secara independen seperti postingan blog, berita, atau forum.</p>

        <pre><code>&lt;article&gt;
  &lt;header&gt;
    &lt;h2&gt;Judul Artikel&lt;/h2&gt;
    &lt;p&gt;Ditulis oleh Admin&lt;/p&gt;
  &lt;/header&gt;
  &lt;p&gt;Ini adalah isi utama artikel yang menjelaskan topik tertentu.&lt;/p&gt;
  &lt;footer&gt;
    &lt;p&gt;Dipublikasikan: 21 April 2025&lt;/p&gt;
  &lt;/footer&gt;
&lt;/article&gt;</code></pre>

        <p><strong>Kelebihan:</strong> &lt;article&gt; memudahkan pengelompokan konten yang bisa berdiri sendiri dan berguna dalam pengelolaan CMS atau feed berita.</p>

        <h3>Kesimpulan</h3>
        <p>Memahami elemen layout dasar HTML sangat penting untuk membangun struktur halaman web yang baik. Elemen seperti <code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;section&gt;</code>, dan <code>&lt;article&gt;</code> memperkuat semantik HTML dan membuat konten lebih mudah dipahami baik oleh manusia maupun mesin pencari. Sementara itu, <code>&lt;div&gt;</code> tetap menjadi alat penting untuk layout yang fleksibel bersama CSS. Gunakan elemen semantik sesuai kebutuhan agar struktur halaman menjadi lebih logis, mudah dirawat, dan lebih profesional.</p>
    '
            ],




            [
                'course_id' => 8,
                'urutan' => 2,
                'judul' => 'Table Layout & Grid Sederhana',
                'content' =>  '
                <h2>Pendahuluan</h2>
                <p>Pada tahap awal pengembangan web, salah satu cara untuk mengatur tata letak (layout) halaman adalah dengan menggunakan <strong>tabel HTML</strong> dan konsep <strong>grid</strong>. Meskipun penggunaan tabel untuk layout sudah tidak direkomendasikan dalam praktik modern, pemahaman tentang tabel sangat penting untuk menampilkan data tabular. Sementara itu, konsep grid lebih disarankan karena mendukung desain yang fleksibel dan responsif.</p>

                <h3>1. Layout dengan Tabel HTML</h3>
                <p>Tabel HTML digunakan untuk menyusun data dalam baris dan kolom. Tabel terdiri dari elemen-elemen berikut:</p>
                <ul>
                    <li><code>&lt;table&gt;</code>: Elemen utama tabel</li>
                    <li><code>&lt;tr&gt;</code>: Table Row (baris tabel)</li>
                    <li><code>&lt;th&gt;</code>: Table Header (judul kolom)</li>
                    <li><code>&lt;td&gt;</code>: Table Data (isi sel)</li>
                </ul>

                <p><strong>Contoh Tabel Sederhana:</strong></p>
                <pre><code>&lt;table border="1"&gt;
          &lt;tr&gt;
            &lt;th&gt;Nama&lt;/th&gt;
            &lt;th&gt;Jurusan&lt;/th&gt;
            &lt;th&gt;Angkatan&lt;/th&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td&gt;Andi&lt;/td&gt;
            &lt;td&gt;Informatika&lt;/td&gt;
            &lt;td&gt;2022&lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td&gt;Budi&lt;/td&gt;
            &lt;td&gt;Sistem Informasi&lt;/td&gt;
            &lt;td&gt;2023&lt;/td&gt;
          &lt;/tr&gt;
        &lt;/table&gt;</code></pre>

                <p><strong>Catatan:</strong> Gunakan atribut <code>border</code> untuk melihat garis tabel saat belajar, namun dalam praktik modern, sebaiknya gaya (seperti garis, warna, padding) diatur dengan CSS.</p>

                <h4>Kelebihan Layout dengan Tabel:</h4>
                <ul>
                    <li>Mudah digunakan untuk menampilkan data tabular seperti laporan atau rekap.</li>
                    <li>Strukturnya jelas dan rapi untuk data yang berbentuk baris-kolom.</li>
                </ul>

                <h4>Kekurangan:</h4>
                <ul>
                    <li>Sulit dibuat responsif untuk tampilan mobile.</li>
                    <li>Tidak fleksibel untuk layout desain modern.</li>
                    <li>Tidak semantik jika digunakan untuk layout halaman.</li>
                </ul>

                <hr/>

                <h3>2. Layout dengan Grid Sederhana (Menggunakan CSS Grid)</h3>
                <p>Untuk layout modern, kita sebaiknya menggunakan <strong>CSS Grid</strong>. Grid adalah sistem layout berbasis kolom dan baris yang sangat fleksibel, powerful, dan responsif. Kita bisa menggunakannya untuk menyusun halaman seperti galeri, dashboard, atau kolom konten.</p>

                <p><strong>Contoh Layout Grid Sederhana:</strong></p>
                <pre><code>&lt;style&gt;
          .grid-container {
            display: grid;
            grid-template-columns: auto auto auto;
            gap: 10px;
            background-color: #ddd;
            padding: 10px;
          }
          .grid-item {
            background-color: white;
            padding: 20px;
            text-align: center;
            border: 1px solid #ccc;
          }
        &lt;/style&gt;

        &lt;div class="grid-container"&gt;
          &lt;div class="grid-item"&gt;1&lt;/div&gt;
          &lt;div class="grid-item"&gt;2&lt;/div&gt;
          &lt;div class="grid-item"&gt;3&lt;/div&gt;
          &lt;div class="grid-item"&gt;4&lt;/div&gt;
          &lt;div class="grid-item"&gt;5&lt;/div&gt;
          &lt;div class="grid-item"&gt;6&lt;/div&gt;
        &lt;/div&gt;</code></pre>

                <p><strong>Penjelasan:</strong></p>
                <ul>
                    <li><code>display: grid;</code> mengaktifkan grid layout pada kontainer.</li>
                    <li><code>grid-template-columns: auto auto auto;</code> menciptakan 3 kolom dengan lebar otomatis.</li>
                    <li><code>gap:</code> memberikan jarak antar elemen.</li>
                </ul>

                <h4>Kelebihan CSS Grid:</h4>
                <ul>
                    <li>Lebih modern dan fleksibel daripada tabel.</li>
                    <li>Lebih mudah untuk membuat desain responsif.</li>
                    <li>Mendukung layout kompleks seperti dua kolom, sidebar, header, dan konten utama.</li>
                </ul>

                <h4>Contoh Kasus: Tata Letak Dashboard</h4>
                <pre><code>&lt;style&gt;
          .dashboard {
            display: grid;
            grid-template-areas:
              "header header"
              "sidebar main"
              "footer footer";
            grid-template-columns: 200px 1fr;
            grid-template-rows: 60px 1fr 40px;
            gap: 10px;
          }
          .header { grid-area: header; background: #4CAF50; color: white; padding: 10px; }
          .sidebar { grid-area: sidebar; background: #f0f0f0; padding: 10px; }
          .main { grid-area: main; background: white; padding: 10px; }
          .footer { grid-area: footer; background: #ddd; padding: 10px; text-align: center; }
        &lt;/style&gt;

        &lt;div class="dashboard"&gt;
          &lt;div class="header"&gt;Header&lt;/div&gt;
          &lt;div class="sidebar"&gt;Menu&lt;/div&gt;
          &lt;div class="main"&gt;Konten Utama&lt;/div&gt;
          &lt;div class="footer"&gt;Footer&lt;/div&gt;
        &lt;/div&gt;</code></pre>

                <p>Dengan CSS Grid, kita bisa membuat layout kompleks dengan kode yang rapi dan mudah dipahami.</p>

                <h3>Kesimpulan</h3>
                <p>Untuk menyusun layout halaman, HTML menyediakan beberapa cara. Tabel cocok untuk data tabular, sedangkan CSS Grid lebih cocok untuk layout modern yang responsif. Sebagai pemula, penting untuk memahami kedua pendekatan agar bisa memilih teknik yang paling sesuai untuk kebutuhan proyek web Anda.</p>
            '
            ],




            [
                'course_id' => 8,
                'urutan' => 3,
                'judul' => 'Elemen dengan Hierarki Semantik yang Benar',
                'content' => '<h2>Pendahuluan</h2>
        <p>Dalam HTML, <strong>elemen semantik</strong> adalah elemen yang secara eksplisit menyampaikan makna dari kontennya, baik kepada browser maupun pembaca (manusia maupun mesin seperti screen reader). Penggunaan elemen semantik yang benar akan membantu struktur halaman lebih rapi, mudah dipahami, dan lebih SEO-friendly.</p>

        <p>Sebagai developer web pemula, penting untuk mengetahui <strong>hierarki semantik</strong> agar halaman yang dibuat tidak hanya “berfungsi” tetapi juga “berarti” dan terstruktur baik secara logika maupun visual.</p>

        <hr/>

        <h3>1. Apa Itu Elemen Semantik?</h3>
        <p>Elemen semantik adalah tag HTML yang secara jelas mendeskripsikan tujuannya. Contohnya:</p>
        <ul>
            <li><code>&lt;header&gt;</code> — bagian kepala halaman atau bagian atas dari suatu section.</li>
            <li><code>&lt;nav&gt;</code> — bagian navigasi dari sebuah halaman.</li>
            <li><code>&lt;main&gt;</code> — konten utama yang unik untuk halaman tersebut.</li>
            <li><code>&lt;section&gt;</code> — blok konten yang berkaitan dan bisa berdiri sendiri secara tematis.</li>
            <li><code>&lt;article&gt;</code> — konten independen dan lengkap, seperti berita atau posting blog.</li>
            <li><code>&lt;aside&gt;</code> — konten pelengkap (sidebar, kutipan, iklan).</li>
            <li><code>&lt;footer&gt;</code> — bagian bawah halaman atau bagian penutup suatu konten.</li>
        </ul>

        <hr/>

        <h3>2. Hierarki Semantik yang Benar</h3>
        <p>Hierarki semantik mengatur bagaimana elemen-elemen disusun berdasarkan makna dan fungsinya. Ini sangat penting untuk:</p>
        <ul>
            <li>Memastikan struktur dokumen logis dan konsisten</li>
            <li>Memudahkan navigasi menggunakan teknologi bantu</li>
            <li>Meningkatkan performa SEO (Search Engine Optimization)</li>
        </ul>

        <p><strong>Contoh struktur semantik yang benar:</strong></p>
        <pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang="id"&gt;
&lt;head&gt;
  &lt;meta charset="UTF-8"&gt;
  &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
  &lt;title&gt;Contoh Hierarki Semantik&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

  &lt;header&gt;
    &lt;h1&gt;Website Saya&lt;/h1&gt;
    &lt;nav&gt;
      &lt;ul&gt;
        &lt;li&gt;&lt;a href="#beranda"&gt;Beranda&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#artikel"&gt;Artikel&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#kontak"&gt;Kontak&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/nav&gt;
  &lt;/header&gt;

  &lt;main&gt;
    &lt;section&gt;
      &lt;h2&gt;Tentang Kami&lt;/h2&gt;
      &lt;p&gt;Ini adalah paragraf pembuka yang menjelaskan isi dari website kami.&lt;/p&gt;
    &lt;/section&gt;

    &lt;article&gt;
      &lt;h2&gt;Judul Artikel&lt;/h2&gt;
      &lt;p&gt;Konten utama dari artikel kami yang bersifat mandiri.&lt;/p&gt;
    &lt;/article&gt;

    &lt;aside&gt;
      &lt;h3&gt;Berita Terkini&lt;/h3&gt;
      &lt;p&gt;Ini adalah informasi tambahan yang relevan namun bukan bagian utama.&lt;/p&gt;
    &lt;/aside&gt;
  &lt;/main&gt;

  &lt;footer&gt;
    &lt;p&gt;&copy; 2025 Website Saya. Semua Hak Dilindungi.&lt;/p&gt;
  &lt;/footer&gt;

&lt;/body&gt;
&lt;/html&gt;
</code></pre>

        <p><strong>Catatan:</strong> Perhatikan bagaimana setiap elemen diletakkan pada tempatnya sesuai fungsinya. Ini akan memberikan struktur yang kuat dan logis.</p>

        <hr/>

        <h3>3. Perbandingan: Semantik vs Non-Semantik</h3>
        <table border="1" cellpadding="6">
            <thead>
                <tr>
                    <th>Semantik</th>
                    <th>Non-Semantik</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>&lt;header&gt;</code></td>
                    <td><code>&lt;div id="header"&gt;</code></td>
                </tr>
                <tr>
                    <td><code>&lt;nav&gt;</code></td>
                    <td><code>&lt;div class="nav"&gt;</code></td>
                </tr>
                <tr>
                    <td><code>&lt;article&gt;</code></td>
                    <td><code>&lt;div class="article"&gt;</code></td>
                </tr>
            </tbody>
        </table>

        <p>Non-semantik tetap bisa bekerja, namun kurang jelas tujuannya dan tidak ramah bagi mesin pencari atau alat bantu visual.</p>

        <hr/>

        <h3>4. Pentingnya Penggunaan Hierarki Heading (H1-H6)</h3>
        <p>Elemen heading (<code>&lt;h1&gt;</code> sampai <code>&lt;h6&gt;</code>) juga merupakan bagian dari struktur semantik yang penting.</p>
        <ul>
            <li><code>&lt;h1&gt;</code> hanya boleh satu per halaman, berfungsi sebagai judul utama.</li>
            <li><code>&lt;h2&gt;</code> digunakan untuk sub-judul utama dari <code>&lt;h1&gt;</code>.</li>
            <li>Gunakan <code>&lt;h3&gt;</code> dan seterusnya secara berurutan sesuai kedalaman topik.</li>
        </ul>

        <pre><code>&lt;h1&gt;Tutorial HTML&lt;/h1&gt;
  &lt;h2&gt;Pendahuluan&lt;/h2&gt;
  &lt;h2&gt;Dasar-dasar HTML&lt;/h2&gt;
    &lt;h3&gt;Apa Itu Tag?&lt;/h3&gt;
    &lt;h3&gt;Apa Itu Atribut?&lt;/h3&gt;
</code></pre>

        <p>Struktur heading ini membantu pembaca (dan mesin pencari) memahami isi dokumen secara hirarkis dan terstruktur.</p>

        <hr/>

        <h3>Kesimpulan</h3>
        <p>Menggunakan elemen HTML secara semantik dan sesuai hierarki sangat penting untuk membuat halaman web yang profesional, terstruktur, mudah dipahami, dan mudah diakses. Elemen-elemen seperti <code>&lt;header&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;section&gt;</code>, dan <code>&lt;footer&gt;</code> bukan hanya membantu pengembang, tapi juga memberikan manfaat besar untuk mesin pencari, pembaca layar, dan pengguna secara umum.</p>
        <p>Latihlah selalu membuat struktur HTML yang bersih, semantik, dan hierarkis agar kualitas kode kamu meningkat sejak awal.</p>
    '
            ],














            [
                'course_id' => 9,
                'urutan' => 1,
                'judul' => 'Apa Itu CSS?',
                'content' => "
        <p><strong>CSS</strong> (Cascading Style Sheets) adalah bahasa desain yang digunakan untuk mengatur tampilan dan tata letak elemen-elemen dalam halaman web. Jika HTML berfungsi sebagai kerangka atau struktur dari sebuah website, maka CSS bertindak sebagai \"pakaian\" yang memberikan warna, bentuk, dan keindahan visual terhadap struktur tersebut.</p>

        <h3>Apa Itu CSS?</h3>
        <p>CSS adalah bahasa yang digunakan untuk menentukan bagaimana elemen HTML ditampilkan di layar, kertas, atau media lainnya. CSS mengontrol segala aspek visual dari halaman web seperti:</p>
        <ul>
            <li>Warna teks dan latar belakang</li>
            <li>Jenis dan ukuran font</li>
            <li>Jarak antar elemen (margin, padding)</li>
            <li>Ukuran dan posisi layout</li>
            <li>Efek visual seperti bayangan, transisi, dan animasi</li>
            <li>Responsivitas (tampilan di perangkat mobile, tablet, dan desktop)</li>
        </ul>

        <h3>Peran CSS dalam Desain Web</h3>
        <p>Tanpa CSS, semua halaman web akan terlihat polos dan seragam. CSS memungkinkan desainer web untuk menciptakan pengalaman visual yang menarik dan konsisten di seluruh situs.</p>

        <p>Berikut beberapa peran penting CSS dalam pengembangan web:</p>
        <ol>
            <li><strong>Pemisahan antara Konten dan Presentasi:</strong> Dengan CSS, kita dapat memisahkan struktur konten (HTML) dari tampilan visualnya. Ini membuat kode lebih bersih dan mudah dikelola.</li>
            <li><strong>Desain Konsisten:</strong> CSS memungkinkan kita mendefinisikan gaya global (seperti warna tema dan font) yang bisa diterapkan di banyak halaman sekaligus melalui file eksternal.</li>
            <li><strong>Responsif:</strong> Dengan CSS media queries, kita dapat membuat desain yang menyesuaikan ukuran layar sehingga tampak baik di smartphone, tablet, maupun desktop.</li>
            <li><strong>Pengelolaan Tampilan yang Lebih Mudah:</strong> Mengubah satu baris di file CSS bisa langsung mengubah tampilan seluruh website tanpa perlu menyentuh setiap elemen HTML satu per satu.</li>
        </ol>

        <h3>Contoh Penerapan CSS</h3>
        <pre><code>&lt;style&gt;
    body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
    }
    h1 {
        color: #2c3e50;
        text-align: center;
    }
    p {
        line-height: 1.6;
        color: #555;
    }
&lt;/style&gt;
        </code></pre>

        <p>Contoh di atas menunjukkan bagaimana CSS dapat mengubah tampilan elemen <code>body</code>, <code>h1</code>, dan <code>p</code>. Tanpa CSS, teks hanya tampil default tanpa gaya tambahan.</p>

        <h3>Kesimpulan</h3>
        <p>CSS adalah komponen fundamental dalam web development yang berperan besar dalam mempercantik tampilan dan memastikan situs terlihat profesional. Untuk membangun situs web yang menarik, responsif, dan mudah diakses, penguasaan CSS sangatlah penting. CSS juga merupakan dasar untuk belajar lebih lanjut ke framework seperti Bootstrap dan preprocessor seperti SASS.</p>
    "
            ],



            [
                'course_id' => 9,
                'urutan' => 2,
                'judul' => 'Config CSS',
                'content' => "
                <h1>Cara Menghubungkan CSS dengan HTML (Inline, Internal, Eksternal)</h1>
        <p>Pada dasarnya, CSS dapat diterapkan ke dalam HTML dengan tiga cara utama: <strong>inline</strong>, <strong>internal</strong>, dan <strong>eksternal</strong>. Masing-masing metode memiliki kegunaan dan karakteristik yang berbeda, tergantung pada konteks penggunaannya.</p>

        <h3>1. Inline CSS</h3>
        <p>Inline CSS adalah gaya yang ditulis langsung pada atribut <code>style</code> di dalam elemen HTML. Metode ini hanya berlaku pada elemen tersebut secara spesifik.</p>

        <p><strong>Contoh:</strong></p>
        <pre><code>&lt;p style=\"color: red; font-size: 18px;\"&gt;Ini paragraf dengan inline CSS&lt;/p&gt;</code></pre>

        <p><strong>Kelebihan:</strong></p>
        <ul>
            <li>Cepat dan mudah diterapkan untuk gaya tunggal atau pengujian cepat.</li>
        </ul>
        <p><strong>Kekurangan:</strong></p>
        <ul>
            <li>Sulit dikelola jika digunakan dalam skala besar.</li>
            <li>Melanggar prinsip pemisahan antara konten dan tampilan.</li>
            <li>Menambah panjang tag HTML dan bisa membuat kode menjadi tidak rapi.</li>
        </ul>

        <h3>2. Internal CSS</h3>
        <p>Internal CSS ditulis di dalam tag <code>&lt;style&gt;</code> yang ditempatkan di bagian <code>&lt;head&gt;</code> dari dokumen HTML. Gaya ini berlaku untuk satu halaman HTML saja.</p>

        <p><strong>Contoh:</strong></p>
        <pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;style&gt;
        h1 {
            color: blue;
            text-align: center;
        }
        p {
            font-size: 16px;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Judul Halaman&lt;/h1&gt;
    &lt;p&gt;Ini paragraf dengan internal CSS.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

        <p><strong>Kelebihan:</strong></p>
        <ul>
            <li>Mudah diterapkan dan diatur di satu halaman.</li>
            <li>Tidak memerlukan file terpisah.</li>
        </ul>
        <p><strong>Kekurangan:</strong></p>
        <ul>
            <li>Tidak efisien jika digunakan di banyak halaman (tidak dapat digunakan ulang).</li>
            <li>Menambah beban file HTML.</li>
        </ul>

        <h3>3. Eksternal CSS</h3>
        <p>Eksternal CSS adalah metode paling direkomendasikan dan profesional. Gaya ditulis di file CSS terpisah (misalnya <code>style.css</code>) dan dihubungkan ke HTML menggunakan tag <code>&lt;link&gt;</code> di bagian <code>&lt;head&gt;</code>.</p>

        <p><strong>Contoh struktur file:</strong></p>
        <ul>
            <li><code>index.html</code> — file HTML</li>
            <li><code>style.css</code> — file CSS</li>
        </ul>

        <p><strong>File: index.html</strong></p>
        <pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;link rel=\"stylesheet\" href=\"style.css\"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Halo Dunia&lt;/h1&gt;
    &lt;p&gt;Paragraf dengan eksternal CSS&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

        <p><strong>File: style.css</strong></p>
        <pre><code>h1 {
    color: green;
}
p {
    font-style: italic;
}</code></pre>

        <p><strong>Kelebihan:</strong></p>
        <ul>
            <li>Dapat digunakan kembali di banyak halaman.</li>
            <li>Memisahkan kode HTML dan CSS untuk keterbacaan dan pengelolaan yang lebih baik.</li>
            <li>Loading halaman bisa lebih cepat jika browser menyimpan cache CSS.</li>
        </ul>
        <p><strong>Kekurangan:</strong></p>
        <ul>
            <li>Membutuhkan file terpisah.</li>
            <li>Jika file eksternal tidak dimuat (misalnya karena koneksi buruk), tampilan bisa kacau.</li>
        </ul>

        <h3>Kesimpulan</h3>
        <p>Dalam praktik profesional, penggunaan <strong>eksternal CSS</strong> sangat dianjurkan karena mendukung prinsip pemrograman yang rapi, modular, dan efisien. Namun, pemahaman tentang inline dan internal CSS tetap penting karena ada kalanya dibutuhkan, misalnya saat membuat email template atau testing cepat.</p>
    "
            ],
            [
                'course_id' => 9,
                'urutan' => 3,
                'judul' => 'CSS: selector, properti, dan value',
                'content' => "<h1>Menyusun Aturan CSS: Selector, Properti, dan Value(nilai)</h1>
                <p>CSS (Cascading Style Sheets) bekerja dengan cara mengatur bagaimana elemen-elemen HTML ditampilkan di browser. Untuk menyusun aturan CSS yang efektif, kita harus memahami tiga komponen utama dalam setiap aturan CSS, yaitu: <strong>selector</strong>, <strong>properti</strong>, dan <strong>nilai (value)</strong>.</p>

        <h3>1. Struktur Dasar Aturan CSS</h3>
        <p>Aturan CSS ditulis dalam format sebagai berikut:</p>
        <pre><code>selector {
    property: value;
}</code></pre>

        <p>Contoh:</p>
        <pre><code>p {
    color: blue;
    font-size: 16px;
}</code></pre>

        <p>Contoh di atas berarti semua elemen <code>&lt;p&gt;</code> (paragraf) di halaman akan memiliki teks berwarna biru dan ukuran font 16 piksel.</p>

        <h3>2. Selector</h3>
        <p>Selector adalah bagian pertama dalam aturan CSS yang digunakan untuk memilih elemen HTML mana yang akan diberi gaya.</p>
        <p>Jenis-jenis selector:</p>
        <ul>
            <li><strong>Selector Tag:</strong> memilih elemen berdasarkan nama tag HTML, misalnya <code>h1</code>, <code>p</code>, <code>div</code>.</li>
            <li><strong>Selector Class:</strong> memilih elemen berdasarkan atribut class. Ditandai dengan tanda titik (<code>.</code>).</li>
            <li><strong>Selector ID:</strong> memilih elemen berdasarkan atribut id. Ditandai dengan tanda pagar (<code>#</code>).</li>
        </ul>

        <p>Contoh:</p>
        <pre><code>/* Tag selector */
h1 {
    color: red;
}

/* Class selector */
.text-biru {
    color: blue;
}

/* ID selector */
#judul-utama {
    font-size: 24px;
}</code></pre>

        <h3>3. Properti</h3>
        <p>Properti adalah atribut gaya yang ingin Anda ubah. Ada ratusan properti dalam CSS yang bisa mengatur warna, ukuran, margin, padding, border, posisi, dan banyak lagi.</p>
        <p>Beberapa contoh properti umum:</p>
        <ul>
            <li><code>color</code>: mengatur warna teks</li>
            <li><code>background-color</code>: mengatur warna latar belakang</li>
            <li><code>font-size</code>: mengatur ukuran font</li>
            <li><code>text-align</code>: mengatur perataan teks (left, center, right)</li>
            <li><code>margin</code>: mengatur jarak luar elemen</li>
            <li><code>padding</code>: mengatur jarak dalam elemen</li>
        </ul>

        <h3>4. Nilai (Value)</h3>
        <p>Setiap properti CSS harus diberi nilai. Nilai ini bisa berupa kata kunci (seperti <code>center</code>, <code>bold</code>), ukuran (seperti <code>14px</code>, <code>1.5em</code>), warna (seperti <code>blue</code>, <code>#ff0000</code>), atau unit lainnya.</p>

        <p>Contoh lengkap aturan CSS:</p>
        <pre><code>.kotak {
    width: 200px;
    height: 100px;
    background-color: lightblue;
    border: 2px solid black;
}</code></pre>

        <h3>5. Beberapa Catatan Penting</h3>
        <ul>
            <li>Setiap deklarasi CSS diakhiri dengan tanda titik koma (<code>;</code>).</li>
            <li>Beberapa properti bisa digabung dalam satu baris, misalnya <code>margin: 10px 20px;</code>.</li>
            <li>Nama class dan id harus sesuai dengan elemen HTML yang dituju agar gaya diterapkan dengan benar.</li>
            <li>CSS bersifat cascading, artinya jika ada lebih dari satu aturan berlaku untuk satu elemen, maka aturan dengan spesifikasi tertinggi akan menang (misalnya, ID lebih kuat dari class, dan class lebih kuat dari tag).</li>
        </ul>

        <h3>6. Kesimpulan</h3>
        <p>Menyusun aturan CSS yang rapi dan logis adalah fondasi dari desain web modern. Dengan memahami struktur selector, properti, dan nilai, mahasiswa pemula dapat mulai membangun halaman web yang lebih menarik dan profesional. Latihan menyusun berbagai selector dan mengatur tampilannya akan sangat membantu memperkuat pemahaman dasar ini.</p>"
            ],









            [
                'course_id' => 10,
                'urutan' => 1,
                'judul' => 'Menata Text & Font',
                'content' => '
<h2>Pengantar</h2>
<p>Dalam dunia pengembangan web, tampilan teks (tipografi) memainkan peran yang sangat penting dalam membangun kenyamanan membaca, memperkuat estetika desain, dan menyampaikan pesan secara efektif. Tanpa pengaturan teks yang baik, sebuah halaman web akan terasa kacau, sulit dibaca, dan tidak profesional. Oleh karena itu, memahami konsep <strong>font</strong>, <strong>ukuran</strong>, <strong>warna</strong>, <strong>jarak antar huruf</strong>, dan <strong>perataan teks</strong> adalah langkah dasar yang harus dikuasai oleh setiap calon web developer.</p>

<h2>1. Font (Jenis Huruf)</h2>
<p><strong>Definisi:</strong> Font adalah gaya visual dari karakter huruf, angka, atau simbol. Dalam web design, font bukan sekadar pilihan estetis, tetapi juga berkaitan erat dengan keterbacaan dan identitas visual sebuah website.</p>

<p><strong>Properti CSS:</strong> <code>font-family</code></p>

<pre><code>p {
    font-family: "Arial", "Helvetica", sans-serif;
}</code></pre>

<p><strong>Penjelasan:</strong> Dalam CSS, kita dapat menentukan beberapa font sekaligus (font stack) untuk memastikan fallback jika font utama tidak tersedia di perangkat pengguna.</p>

<p><strong>Kategori Umum Font:</strong></p>
<ul>
    <li><strong>Serif:</strong> Memiliki garis kecil di ujung huruf (contoh: Times New Roman). Cocok untuk kesan formal dan tradisional.</li>
    <li><strong>Sans-serif:</strong> Tidak memiliki garis kecil (contoh: Arial). Lebih modern dan lebih mudah dibaca di layar digital.</li>
    <li><strong>Monospace:</strong> Setiap karakter memiliki lebar yang sama (contoh: Courier New). Sering digunakan untuk menampilkan kode.</li>
    <li><strong>Cursive:</strong> Meniru tulisan tangan (contoh: Pacifico). Biasanya digunakan untuk desain kreatif, tetapi kurang ideal untuk teks panjang.</li>
    <li><strong>Fantasy:</strong> Font dekoratif untuk efek khusus (contoh: Impact).</li>
</ul>

<p><strong>Kenapa Memilih Font dengan Hati-hati?</strong><br>
Pilihan font mempengaruhi nuansa emosional website. Misalnya, situs berita sebaiknya menggunakan serif untuk menunjukkan keseriusan, sedangkan aplikasi startup bisa memilih sans-serif untuk kesan modern dan santai.</p>

<h2>2. Ukuran Teks (Font Size)</h2>
<p><strong>Definisi:</strong> Ukuran teks menentukan seberapa besar karakter tampil di layar. Ukuran yang salah dapat membuat teks sulit dibaca, bahkan menghalangi pengguna mengakses informasi.</p>

<p><strong>Properti CSS:</strong> <code>font-size</code></p>

<pre><code>h1 {
    font-size: 2em;
}
</code></pre>

<p><strong>Unit Pengukuran:</strong></p>
<ul>
    <li><strong>px (pixel):</strong> Unit absolut, memberikan kontrol penuh atas ukuran tetapi kurang fleksibel untuk desain responsif.</li>
    <li><strong>em:</strong> Unit relatif terhadap ukuran elemen induk.</li>
    <li><strong>rem:</strong> Unit relatif terhadap ukuran elemen root (&lt;html&gt;), konsisten di seluruh dokumen.</li>
    <li><strong>%:</strong> Persentase terhadap elemen induk.</li>
</ul>

<p><strong>Prinsip Penting:</strong> Gunakan <em>unit relatif</em> (seperti <code>rem</code> atau <code>em</code>) untuk membuat website yang responsif dan mudah disesuaikan di berbagai ukuran layar.</p>

<h2>3. Warna Teks (Text Color)</h2>
<p><strong>Definisi:</strong> Warna teks bukan hanya elemen dekoratif. Warna juga menentukan keterbacaan, hierarki informasi, dan kesan emosional yang ditimbulkan oleh sebuah halaman.</p>

<p><strong>Properti CSS:</strong> <code>color</code></p>

<pre><code>p {
    color: #1a1a1a;
}</code></pre>

<p><strong>Format Penulisan Warna:</strong></p>
<ul>
    <li>Nama warna (contoh: red, blue)</li>
    <li>Hexadecimal (contoh: #ff5733)</li>
    <li>RGB (contoh: rgb(255, 87, 51))</li>
    <li>RGBA (contoh: rgba(255, 87, 51, 0.7))</li>
    <li>HSL (contoh: hsl(10, 100%, 60%))</li>
</ul>

<p><strong>Prinsip Desain:</strong> Pastikan ada cukup <em>kontras</em> antara teks dan latar belakang untuk menjaga keterbacaan, terutama untuk aksesibilitas pengguna berkebutuhan khusus.</p>

<h2>4. Jarak Antar Huruf (Letter Spacing)</h2>
<p><strong>Definisi:</strong> Letter spacing adalah pengaturan jarak antar karakter huruf dalam teks. Pengaturan ini bisa memperbaiki keterbacaan atau menciptakan efek visual tertentu.</p>

<p><strong>Properti CSS:</strong> <code>letter-spacing</code></p>

<pre><code>h2 {
    letter-spacing: 1px;
}</code></pre>

<p><strong>Penggunaan Umum:</strong></p>
<ul>
    <li>Heading atau judul besar biasanya diberi letter spacing agar terlihat lebih lapang dan elegan.</li>
    <li>Untuk teks dengan huruf kapital semua (uppercase), letter spacing sedikit lebih besar meningkatkan keterbacaan.</li>
</ul>

<p><strong>Catatan Penting:</strong> Letter spacing yang berlebihan dapat menyebabkan teks sulit dibaca, jadi gunakan dengan bijak.</p>

<h2>5. Perataan Teks (Text Alignment)</h2>
<p><strong>Definisi:</strong> Text alignment mengatur bagaimana teks ditempatkan secara horizontal di dalam elemen induknya.</p>

<p><strong>Properti CSS:</strong> <code>text-align</code></p>

<pre><code>p {
    text-align: center;
}</code></pre>

<p><strong>Nilai Text-Align:</strong></p>
<ul>
    <li><strong>left:</strong> Meratakan teks ke kiri (default untuk bahasa Latin)</li>
    <li><strong>right:</strong> Meratakan teks ke kanan</li>
    <li><strong>center:</strong> Membuat teks rata tengah</li>
    <li><strong>justify:</strong> Membuat teks merata di kedua sisi (seperti di koran)</li>
</ul>

<p><strong>Pengaruh Alignment:</strong> Pemilihan perataan mempengaruhi ritme membaca pengguna. "Justify" cocok untuk teks panjang, sedangkan "center" lebih pas untuk teks pendek seperti judul atau kutipan.</p>

<h2>Kesimpulan</h2>
<p>Tipografi bukan hanya tentang keindahan, tetapi juga tentang komunikasi. Dengan menguasai pengaturan font, ukuran, warna, jarak huruf, dan perataan teks, Anda bisa meningkatkan pengalaman pengguna, menyampaikan pesan dengan jelas, dan memperkuat kesan profesional dari website yang Anda bangun. Tipografi yang baik adalah dasar dari desain web yang efektif.</p>
            '
            ],





            [
                'course_id' => 10,
                'urutan' => 2,
                'judul' => 'Padding, Margin, & Border',
                'content' => '
<h2>Pendahuluan</h2>
<p>Dalam pengembangan web, memahami bagaimana elemen HTML disusun sangat penting untuk menghasilkan tampilan yang rapi, seimbang, dan menarik. Tiga konsep dasar dalam pengaturan ruang antar elemen adalah <strong>padding</strong>, <strong>margin</strong>, dan <strong>border</strong>. Ketiga properti ini merupakan bagian dari konsep besar yang disebut <em>Box Model</em> di CSS.</p>

<h2>Pengertian Box Model</h2>
<p><strong>Box Model</strong> adalah cara browser memvisualisasikan setiap elemen HTML sebagai sebuah kotak persegi panjang yang terdiri dari:</p>
<ul>
    <li><strong>Content:</strong> Area tempat isi teks atau gambar berada.</li>
    <li><strong>Padding:</strong> Ruang di dalam border yang mengelilingi konten.</li>
    <li><strong>Border:</strong> Garis yang mengelilingi padding dan konten.</li>
    <li><strong>Margin:</strong> Ruang di luar border yang memisahkan elemen dari elemen lain.</li>
</ul>

<p>Visualisasi sederhana:</p>
<pre>
[ Margin ]
 [ Border ]
  [ Padding ]
   [ Content ]
  [ Padding ]
 [ Border ]
[ Margin ]
</pre>

<h2>1. Padding</h2>
<p><strong>Definisi:</strong> Padding adalah ruang kosong antara konten elemen dan batas border-nya. Padding mendorong konten menjauh dari border dan memberikan "ruang napas" di dalam elemen.</p>

<p><strong>Properti CSS:</strong></p>
<pre><code>div {
    padding: 20px;
}
</code></pre>

<p><strong>Aturan Penulisan:</strong></p>
<ul>
    <li><strong>padding-top</strong>, <strong>padding-right</strong>, <strong>padding-bottom</strong>, <strong>padding-left</strong> untuk sisi spesifik.</li>
    <li>Jika hanya menggunakan <code>padding</code> tunggal:
        <ul>
            <li>1 nilai: semua sisi sama.</li>
            <li>2 nilai: vertikal (atas/bawah) | horizontal (kiri/kanan).</li>
            <li>3 nilai: atas | kiri/kanan | bawah.</li>
            <li>4 nilai: atas | kanan | bawah | kiri (searah jarum jam).</li>
        </ul>
    </li>
</ul>

<p><strong>Contoh:</strong></p>
<pre><code>div {
    padding: 10px 20px 30px 40px;
}
/* padding-top: 10px; padding-right: 20px; padding-bottom: 30px; padding-left: 40px; */
</code></pre>

<h2>2. Border</h2>
<p><strong>Definisi:</strong> Border adalah garis yang mengelilingi padding dan konten sebuah elemen. Border dapat digunakan untuk menegaskan batas visual antar elemen.</p>

<p><strong>Properti CSS:</strong></p>
<pre><code>div {
    border: 2px solid black;
}
</code></pre>

<p><strong>Komponen Border:</strong></p>
<ul>
    <li><strong>Lebar border (border-width)</strong> — Contoh: 1px, 5px</li>
    <li><strong>Gaya border (border-style)</strong> — solid, dashed, dotted, double, groove, ridge, dll.</li>
    <li><strong>Warna border (border-color)</strong> — Nama warna, hex, rgb, dll.</li>
</ul>

<p><strong>Contoh Lain:</strong></p>
<pre><code>div {
    border-width: 3px;
    border-style: dashed;
    border-color: #ff6600;
}
</code></pre>

<p><strong>Fungsi Border:</strong> Membantu menandai, membingkai, atau menonjolkan area tertentu dalam halaman web.</p>

<h2>3. Margin</h2>
<p><strong>Definisi:</strong> Margin adalah ruang kosong di luar border elemen. Margin menciptakan jarak antara satu elemen dengan elemen lainnya.</p>

<p><strong>Properti CSS:</strong></p>
<pre><code>div {
    margin: 15px;
}
</code></pre>

<p><strong>Aturan Penulisan:</strong> Sama seperti padding — margin dapat diatur per sisi: <code>margin-top</code>, <code>margin-right</code>, <code>margin-bottom</code>, dan <code>margin-left</code>.</p>

<p><strong>Catatan Penting:</strong> Saat dua margin vertikal bertemu, mereka tidak dijumlahkan, melainkan mengikuti margin terbesar. Ini disebut <em>margin collapsing</em>.</p>

<h2>Ilustrasi Hubungan Padding, Border, Margin</h2>
<p>Misal elemen div memiliki:</p>
<ul>
    <li>Width konten: 200px</li>
    <li>Padding: 20px</li>
    <li>Border: 5px</li>
    <li>Margin: 10px</li>
</ul>

<p><strong>Total lebar elemen</strong> menjadi:
<br>
200px (konten) + (2 × 20px padding) + (2 × 5px border) = 250px
</p>

<p><strong>Margin</strong> tidak dihitung dalam ukuran elemen, tetapi berpengaruh terhadap jarak antar elemen.</p>

<h2>Praktik Terbaik</h2>
<ul>
    <li>Gunakan <code>padding</code> untuk memberi ruang di dalam elemen.</li>
    <li>Gunakan <code>margin</code> untuk memberi ruang di luar elemen antar elemen lain.</li>
    <li>Gunakan <code>border</code> untuk memperjelas atau mendekorasi elemen.</li>
    <li>Gunakan <code>box-sizing: border-box;</code> untuk menghitung padding dan border ke dalam total ukuran elemen, sehingga lebih mudah mengatur layout.</li>
</ul>

<p><strong>Contoh box-sizing:</strong></p>
<pre><code>div {
    box-sizing: border-box;
}
</code></pre>

<h2>Kesimpulan</h2>
<p>Memahami padding, margin, dan border adalah kunci untuk mengontrol ruang, mengatur layout, dan menciptakan desain web yang terstruktur dan profesional. Dengan menguasai konsep ini, Anda akan memiliki pondasi kuat dalam membangun halaman web yang konsisten dan enak dipandang.</p>
            '
            ],





            [
                'course_id' => 10,
                'urutan' => 3,
                'judul' => 'Background, Gradient, & Image',
                'content' => '
<h2>Pendahuluan</h2>
<p>Pemberian background pada elemen sangat penting dalam desain web untuk mempercantik tampilan, memperjelas hirarki visual, dan meningkatkan pengalaman pengguna. Background bisa berupa warna solid, gradasi warna (gradient), atau gambar.</p>

<h2>1. Menambahkan Background Warna Solid</h2>
<p><strong>Definisi:</strong> Background warna solid adalah penggunaan satu warna rata untuk mengisi area sebuah elemen.</p>

<p><strong>Properti CSS:</strong> <code>background-color</code></p>

<pre><code>div {
    background-color: #3498db; /* biru */
}
</code></pre>

<p><strong>Penjelasan:</strong> Anda bisa menggunakan nama warna (red, blue), kode heksadesimal (#ff0000), format RGB (rgb(255, 0, 0)), atau HSL (hsl(0, 100%, 50%)).</p>

<p><strong>Contoh:</strong></p>
<pre><code>body {
    background-color: #f5f5f5;
}
</code></pre>

<h2>2. Menambahkan Background Gradient</h2>
<p><strong>Definisi:</strong> Gradient adalah transisi bertahap antara dua atau lebih warna. Ini memberikan efek visual yang lebih menarik daripada warna solid biasa.</p>

<p><strong>Properti CSS:</strong> <code>background-image</code> dengan fungsi <code>linear-gradient</code> atau <code>radial-gradient</code></p>

<h3>a. Linear Gradient</h3>
<p>Transisi warna terjadi dalam garis lurus (bisa vertikal, horizontal, atau diagonal).</p>

<pre><code>div {
    background-image: linear-gradient(to right, #ff7e5f, #feb47b);
}
</code></pre>

<p><strong>Penjelasan:</strong>
<ul>
    <li><code>to right</code>: arah gradasi dari kiri ke kanan.</li>
    <li><code>#ff7e5f</code> ke <code>#feb47b</code>: warna awal ke warna akhir.</li>
</ul>
</p>

<h3>b. Radial Gradient</h3>
<p>Transisi warna memancar dari pusat ke luar seperti lingkaran.</p>

<pre><code>div {
    background-image: radial-gradient(circle, #ff7e5f, #feb47b);
}
</code></pre>

<p><strong>Penggunaan Gradient:</strong>
<ul>
    <li>Membuat tombol lebih menarik</li>
    <li>Memberikan kesan modern pada latar belakang section</li>
    <li>Menarik perhatian ke elemen tertentu</li>
</ul>
</p>

<h2>3. Menambahkan Background Gambar</h2>
<p><strong>Definisi:</strong> Anda dapat menggunakan gambar sebagai latar belakang elemen.</p>

<p><strong>Properti CSS:</strong> <code>background-image</code></p>

<pre><code>div {
    background-image: url("gambar.jpg");
}
</code></pre>

<h3>Properti Tambahan untuk Background Gambar</h3>
<ul>
    <li><code>background-repeat</code>: mengatur apakah gambar diulang.
        <ul>
            <li><strong>repeat</strong> (default): gambar diulang baik secara horizontal maupun vertikal.</li>
            <li><strong>no-repeat</strong>: gambar hanya ditampilkan sekali.</li>
            <li><strong>repeat-x</strong>: diulang hanya secara horizontal.</li>
            <li><strong>repeat-y</strong>: diulang hanya secara vertikal.</li>
        </ul>
    </li>
    <li><code>background-size</code>: mengatur ukuran gambar.
        <ul>
            <li><strong>cover</strong>: memperbesar gambar untuk menutupi seluruh elemen.</li>
            <li><strong>contain</strong>: memperkecil gambar agar seluruh gambar terlihat.</li>
            <li><strong>nilai spesifik</strong> seperti <code>100px 200px</code>.</li>
        </ul>
    </li>
    <li><code>background-position</code>: menentukan posisi gambar.
        <ul>
            <li>Contoh: <code>center center</code>, <code>top right</code>, <code>10px 20px</code>.</li>
        </ul>
    </li>
    <li><code>background-attachment</code>: mengatur apakah background bergulir bersama halaman.
        <ul>
            <li><strong>scroll</strong> (default): background bergulir.</li>
            <li><strong>fixed</strong>: background tetap di tempat (efek parallax).</li>
        </ul>
    </li>
</ul>

<p><strong>Contoh Penggunaan Lengkap:</strong></p>
<pre><code>div {
    background-image: url("background.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}
</code></pre>

<h2>Praktik Terbaik</h2>
<ul>
    <li>Gunakan gambar background yang ukurannya tidak terlalu besar untuk menjaga kecepatan loading halaman.</li>
    <li>Selalu sertakan fallback warna latar belakang jika gambar tidak dimuat.</li>
    <li>Pastikan kontras yang cukup antara teks dan latar belakang agar keterbacaan tetap terjaga.</li>
</ul>

<h2>Kesimpulan</h2>
<p>Dengan menguasai penggunaan background warna, gradient, dan gambar, Anda dapat menciptakan tampilan web yang lebih menarik, modern, dan user-friendly. Pemilihan dan pengaturan background yang tepat dapat meningkatkan estetika dan pengalaman pengguna secara keseluruhan.</p>
            '
            ],






            [
                'course_id' => 10,
                'urutan' => 4,
                'judul' => 'Width, Height, & Display',
                'content' => '
<h2>Pendahuluan</h2>
<p>Dalam pengembangan web, sangat penting untuk dapat mengatur ukuran elemen agar tampilan menjadi sesuai dengan desain yang diinginkan. Tiga properti utama dalam CSS yang digunakan untuk mengendalikan ukuran dan perilaku elemen adalah <strong>width</strong>, <strong>height</strong>, dan <strong>display</strong>.</p>

<h2>1. Width (Lebar)</h2>
<p><strong>Definisi:</strong> Properti <code>width</code> digunakan untuk menentukan lebar dari area konten sebuah elemen.</p>

<p><strong>Properti CSS:</strong></p>
<pre><code>div {
    width: 300px;
}
</code></pre>

<h3>Nilai yang dapat digunakan:</h3>
<ul>
    <li><strong>px (piksel)</strong>: Satuan absolut. Contoh: <code>width: 200px;</code></li>
    <li><strong>% (persen)</strong>: Satuan relatif terhadap elemen induknya (parent element). Contoh: <code>width: 50%;</code></li>
    <li><strong>vw (viewport width)</strong>: Relatif terhadap lebar jendela browser. <code>1vw = 1%</code> dari lebar viewport.</li>
    <li><strong>auto</strong>: Browser menghitung lebar secara otomatis berdasarkan konten.</li>
    <li><strong>min-content</strong>, <strong>max-content</strong>, <strong>fit-content</strong> (CSS level lanjut untuk pengaturan dinamis).</li>
</ul>

<h2>2. Height (Tinggi)</h2>
<p><strong>Definisi:</strong> Properti <code>height</code> digunakan untuk menentukan tinggi area konten sebuah elemen.</p>

<p><strong>Properti CSS:</strong></p>
<pre><code>div {
    height: 150px;
}
</code></pre>

<h3>Nilai yang dapat digunakan:</h3>
<ul>
    <li><strong>px (piksel)</strong>: Nilai absolut. Contoh: <code>height: 400px;</code></li>
    <li><strong>% (persen)</strong>: Persentase terhadap tinggi elemen induk. Perlu elemen induk memiliki tinggi tertentu agar berfungsi.</li>
    <li><strong>vh (viewport height)</strong>: Relatif terhadap tinggi jendela browser. <code>1vh = 1%</code> dari tinggi viewport.</li>
    <li><strong>auto</strong>: Tinggi disesuaikan dengan konten di dalam elemen.</li>
</ul>

<h2>3. Display</h2>
<p><strong>Definisi:</strong> Properti <code>display</code> menentukan bagaimana sebuah elemen dirender di halaman dan mempengaruhi perilaku pengaturan <code>width</code> dan <code>height</code>.</p>

<h3>Nilai penting pada Display:</h3>
<ul>
    <li><strong>block</strong>: Elemen menempati seluruh lebar baris. Kita dapat mengatur <code>width</code> dan <code>height</code>. Contoh elemen: &lt;div&gt;, &lt;p&gt;, &lt;h1&gt;.</li>
    <li><strong>inline</strong>: Elemen hanya sebesar kontennya dan tidak bisa diatur <code>width</code>/<code>height</code>. Contoh elemen: &lt;span&gt;, &lt;a&gt;.</li>
    <li><strong>inline-block</strong>: Seperti inline, tetapi bisa diatur <code>width</code> dan <code>height</code>.</li>
    <li><strong>none</strong>: Elemen tidak ditampilkan di halaman.</li>
    <li><strong>flex</strong>: Digunakan untuk layout fleksibel modern (dalam pembahasan lebih lanjut).</li>
    <li><strong>grid</strong>: Digunakan untuk membuat layout berbasis grid (lebih lanjut di topik lanjutan).</li>
</ul>

<h3>Contoh:</h3>

<pre><code>div {
    display: block;
    width: 80%;
    height: 200px;
    background-color: lightblue;
}

span {
    display: inline;
    background-color: yellow;
}

.button {
    display: inline-block;
    width: 100px;
    height: 40px;
    background-color: green;
    color: white;
    text-align: center;
}
</code></pre>

<h2>Catatan Penting:</h2>
<ul>
    <li>Secara default, elemen <strong>block</strong> akan mengisi 100% lebar induknya, sedangkan elemen <strong>inline</strong> hanya selebar kontennya.</li>
    <li>Untuk mengubah elemen inline agar bisa diberi ukuran, ubah menjadi <code>inline-block</code>.</li>
    <li>Jika ingin elemen tidak muncul, gunakan <code>display: none</code>.</li>
</ul>

<h2>Praktik Terbaik</h2>
<ul>
    <li>Gunakan satuan relatif (% atau vw/vh) agar desain lebih responsif.</li>
    <li>Perhatikan hubungan antara display dan kontrol ukuran elemen.</li>
    <li>Untuk layout yang lebih kompleks dan responsif, nantinya kombinasi display: flex atau grid sangat membantu.</li>
</ul>

<h2>Kesimpulan</h2>
<p>Dengan memahami dan mengatur <strong>width</strong>, <strong>height</strong>, dan <strong>display</strong>, Anda dapat mengontrol ukuran dan perilaku elemen secara efektif, menghasilkan layout yang rapi, fleksibel, dan profesional. Ini adalah fondasi penting sebelum masuk ke teknik layout lanjutan seperti Flexbox dan CSS Grid.</p>
            '
            ],
            

            [
                'course_id' => 11,
                'urutan' => 1,
                'judul' => 'Responsif Design',
                'content' => '
<h2>Apa itu Desain Responsif?</h2>

<p>Desain responsif adalah pendekatan dalam pengembangan web yang bertujuan untuk membuat halaman web tampil dengan baik di berbagai perangkat, baik itu desktop, tablet, maupun smartphone. Ini berarti, tampilan dan tata letak website akan menyesuaikan ukuran layar pengguna secara otomatis, tanpa perlu membuat versi website yang berbeda untuk setiap perangkat.</p>

<h3>Mengapa Desain Responsif Penting?</h3>
<ul>
<li><strong>Pengalaman Pengguna (User Experience)</strong>: Dengan desain responsif, pengguna dapat dengan nyaman mengakses konten tanpa harus memperbesar, menggeser, atau mengalami tampilan yang rusak.</li>
<li><strong>SEO (Search Engine Optimization)</strong>: Google memberikan peringkat lebih tinggi kepada situs yang responsif, karena pengalaman pengguna yang lebih baik.</li>
<li><strong>Efisiensi</strong>: Tidak perlu membuat dan memelihara beberapa versi website untuk perangkat yang berbeda, cukup satu website yang bisa beradaptasi otomatis.</li>
</ul>

<h3>Bagaimana Cara Menerapkan Desain Responsif?</h3>
<p>Beberapa teknik utama dalam desain responsif antara lain:</p>
<ul>
<li><strong>Media Queries</strong>: Digunakan di CSS untuk menerapkan style berbeda berdasarkan ukuran layar.</li>
<li><strong>Grid Layout dan Flexbox</strong>: Membantu mengatur tata letak elemen yang fleksibel dan adaptif.</li>
<li><strong>Persentase dan Satuan Fleksibel</strong>: Menggunakan satuan seperti %, vw, vh agar elemen mengikuti ukuran layar, bukan ukuran tetap (px).</li>
<li><strong>Responsive Images</strong>: Menggunakan gambar yang dapat menyesuaikan ukurannya agar tidak melebihi layar perangkat.</li>
</ul>

<h3>Contoh Penggunaan Media Queries</h3>

<pre><code>
/* Gaya untuk layar besar */
body {
  background-color: lightblue;
}

/* Gaya untuk layar kecil (maksimal lebar 600px) */
@media (max-width: 600px) {
  body {
    background-color: lightgreen;
  }
}
</code></pre>

<p>Dalam contoh di atas, latar belakang akan berwarna biru pada layar besar, dan berubah menjadi hijau pada layar kecil seperti smartphone.</p>

<h3>Kesimpulan</h3>
<p>Desain responsif adalah kunci utama untuk membuat website modern yang mudah diakses di berbagai perangkat. Dengan menggunakan prinsip-prinsip seperti media queries, layout fleksibel, dan gambar responsif, kita bisa memastikan website selalu nyaman dilihat oleh semua pengguna, tanpa peduli perangkat apa yang mereka gunakan.</p>
            '
            ],



            [
                'course_id' => 11,
                'urutan' => 2,
                'judul' => 'Menyusun Layout Responsif & Viewport Units',
                'content' => '
<h2>Menyusun Layout Responsif Menggunakan Persentase dan Viewport Units</h2>

<p>Pada desain web modern, membuat layout yang responsif adalah keharusan. Salah satu teknik dasar yang sering digunakan adalah menggunakan satuan ukuran relatif, seperti persentase (%) dan viewport units (vw, vh). Dengan cara ini, elemen pada halaman web dapat menyesuaikan ukuran layar secara otomatis tanpa perlu membuat banyak perubahan manual.</p>

<h3>Mengapa Menggunakan Persentase dan Viewport Units?</h3>
<ul>
<li><strong>Fleksibel</strong>: Elemen akan otomatis menyesuaikan ukuran layar pengguna.</li>
<li><strong>Hemat Waktu</strong>: Tidak perlu membuat banyak media queries untuk berbagai ukuran layar.</li>
<li><strong>User Experience Lebih Baik</strong>: Tampilan tetap rapi dan proporsional di berbagai perangkat.</li>
</ul>

<h3>Apa itu Satuan Persentase (%)?</h3>
<p>Persentase digunakan untuk mengatur ukuran elemen relatif terhadap ukuran elemen induknya (parent). Contohnya, jika sebuah elemen memiliki <code>width: 50%;</code>, maka lebarnya akan menjadi setengah dari lebar elemen induknya.</p>

<pre><code>
.container {
  width: 80%;
}
</code></pre>

<p>Artinya, lebar elemen <code>.container</code> akan selalu 80% dari elemen induk, berapapun ukuran layar pengguna.</p>

<h3>Apa itu Viewport Units (vw, vh)?</h3>
<ul>
<li><strong>vw (viewport width)</strong>: 1vw = 1% dari lebar layar.</li>
<li><strong>vh (viewport height)</strong>: 1vh = 1% dari tinggi layar.</li>
<li><strong>vmin</strong>: 1% dari ukuran sisi viewport yang lebih kecil (antara lebar dan tinggi).</li>
<li><strong>vmax</strong>: 1% dari ukuran sisi viewport yang lebih besar.</li>
</ul>

<h4>Contoh Penggunaan Viewport Units:</h4>

<pre><code>
.header {
  height: 20vh; /* Tinggi header adalah 20% dari tinggi layar */
}

.sidebar {
  width: 25vw; /* Lebar sidebar adalah 25% dari lebar layar */
}
</code></pre>

<p>Dengan menggunakan viewport units, elemen-elemen di halaman akan langsung beradaptasi terhadap ukuran jendela browser tanpa memerlukan perubahan lain.</p>

<h3>Perbandingan Persentase vs Viewport Units</h3>
<table border="1" cellpadding="8" cellspacing="0">
<tr>
<th>Persentase (%)</th>
<th>Viewport Units (vw/vh)</th>
</tr>
<tr>
<td>Relatif terhadap ukuran elemen induk.</td>
<td>Relatif terhadap ukuran layar browser.</td>
</tr>
<tr>
<td>Lebih cocok untuk mengatur layout di dalam container.</td>
<td>Lebih cocok untuk membuat elemen besar seperti header penuh layar.</td>
</tr>
</table>

<h3>Contoh Layout Sederhana Menggunakan Persentase dan Viewport Units</h3>

<pre><code>
.container {
  width: 90%;
  margin: 0 auto;
}

.banner {
  height: 50vh;
  background-color: lightblue;
}

.content {
  width: 60%;
  float: left;
}

.sidebar {
  width: 35%;
  float: right;
}
</code></pre>

<p>Dengan kombinasi di atas, layout akan otomatis mengikuti ukuran layar pengguna, membuat website tampil baik di semua perangkat.</p>

<h3>Kesimpulan</h3>
<p>Menggunakan persentase dan viewport units adalah teknik dasar namun sangat efektif untuk membangun layout responsif. Dengan pendekatan ini, kita bisa membuat website yang adaptif, nyaman diakses, dan profesional, tanpa harus bergantung sepenuhnya pada media queries.</p>
            '
            ],



            [
                'course_id' => 11,
                'urutan' => 3,
                'judul' => 'Media queries',
                'content' => '
<h2>Memahami Media Queries untuk Membuat Desain yang Cocok untuk Berbagai Perangkat</h2>

<p>Dalam era perangkat yang beragam seperti smartphone, tablet, laptop, dan desktop, desain website harus mampu beradaptasi dengan berbagai ukuran layar. Salah satu teknik utama untuk mencapai hal ini adalah dengan menggunakan <strong>media queries</strong> dalam CSS.</p>

<h3>Apa itu Media Queries?</h3>

<p>Media Queries adalah fitur di CSS yang memungkinkan kita menerapkan style khusus berdasarkan kondisi tertentu pada perangkat pengguna, seperti lebar layar, tinggi layar, orientasi perangkat (potrait atau landscape), dan resolusi layar.</p>

<p>Dengan media queries, kita bisa mendesain halaman web yang responsif tanpa harus membuat file HTML terpisah untuk setiap ukuran layar.</p>

<h3>Bagaimana Cara Kerja Media Queries?</h3>

<p>Media queries menggunakan aturan logika: "Jika kondisi tertentu terpenuhi, maka gunakan style berikut." Kondisi ini disebut <strong>media features</strong> (fitur media).</p>

<h4>Contoh Struktur Media Queries:</h4>

<pre><code>
@media (kondisi) {
  /* CSS untuk kondisi tersebut */
}
</code></pre>

<h3>Contoh Media Queries Sederhana</h3>

<pre><code>
/* Gaya umum untuk semua perangkat */
body {
  font-size: 16px;
}

/* Gaya khusus untuk layar dengan lebar maksimum 600px */
@media (max-width: 600px) {
  body {
    font-size: 14px;
  }
}
</code></pre>

<p>Pada contoh di atas, jika lebar layar pengguna 600px atau kurang, ukuran teks akan diperkecil menjadi 14px untuk meningkatkan kenyamanan membaca di layar kecil.</p>

<h3>Beberapa Media Features yang Sering Digunakan</h3>

<ul>
<li><strong>max-width</strong>: Menerapkan style jika lebar layar kurang dari nilai tertentu.</li>
<li><strong>min-width</strong>: Menerapkan style jika lebar layar lebih besar dari nilai tertentu.</li>
<li><strong>orientation</strong>: Mendeteksi apakah perangkat dalam mode potret (portrait) atau lanskap (landscape).</li>
<li><strong>resolution</strong>: Menyesuaikan style berdasarkan resolusi layar.</li>
</ul>

<h4>Contoh Media Queries Lainnya:</h4>

<pre><code>
/* Untuk layar besar */
@media (min-width: 1024px) {
  .container {
    width: 960px;
  }
}

/* Untuk tablet */
@media (min-width: 768px) and (max-width: 1023px) {
  .container {
    width: 90%;
  }
}

/* Untuk smartphone */
@media (max-width: 767px) {
  .container {
    width: 100%;
  }
}

/* Untuk orientasi landscape */
@media (orientation: landscape) {
  body {
    background-color: lightgrey;
  }
}
</code></pre>

<h3>Prinsip Mobile-First Design</h3>

<p>Mobile-first adalah pendekatan di mana kita mendesain dan mengkodekan website mulai dari ukuran layar terkecil (mobile), kemudian memperluasnya untuk layar yang lebih besar menggunakan media queries.</p>

<pre><code>
/* Style dasar untuk mobile */
.container {
  width: 100%;
}

/* Style tambahan untuk tablet ke atas */
@media (min-width: 768px) {
  .container {
    width: 750px;
}
</code></pre>

<p>Dengan mobile-first, website kita akan lebih ringan dan cepat di perangkat kecil, lalu tetap nyaman digunakan di perangkat yang lebih besar.</p>

<h3>Kesimpulan</h3>

<p>Media queries adalah alat yang sangat kuat dalam CSS untuk membuat desain web yang responsif. Dengan memahami cara kerja media queries dan menggunakannya dengan benar, kita bisa memastikan bahwa website kita tampil optimal di berbagai ukuran dan jenis perangkat, meningkatkan pengalaman pengguna secara keseluruhan.</p>
            '
            ],




            [
                'course_id' => 11,
                'urutan' => 4,
                'judul' => 'Responsif Design',
                'content' => '
<h2>Menggunakan Flexbox dan Grid untuk Layout Responsif yang Lebih Fleksibel</h2>

<p>Dalam pengembangan web modern, dua sistem layout yang sering digunakan untuk membangun desain responsif adalah <strong>Flexbox</strong> dan <strong>CSS Grid</strong>. Keduanya memungkinkan kita menyusun elemen di halaman dengan cara yang lebih fleksibel dan dinamis, sehingga tampilan situs bisa menyesuaikan ukuran layar perangkat pengguna secara optimal.</p>

<h3>Apa itu Flexbox?</h3>
<p><strong>Flexbox</strong> adalah model layout CSS yang memungkinkan elemen dalam sebuah kontainer untuk saling berinteraksi dengan fleksibel. Dengan Flexbox, kita bisa mengatur posisi, ukuran, dan ruang antar elemen dengan lebih mudah, baik dalam satu dimensi (horizontal atau vertikal) maupun dua dimensi.</p>

<h4>Properti Utama Flexbox:</h4>
<ul>
<li><strong>display: flex;</strong> - Menetapkan kontainer sebagai flex container.</li>
<li><strong>justify-content:</strong> Mengatur posisi elemen di sepanjang sumbu utama (horizontal).</li>
<li><strong>align-items:</strong> Mengatur posisi elemen di sepanjang sumbu silang (vertikal).</li>
<li><strong>flex-direction:</strong> Menentukan arah elemen, apakah horizontal (row) atau vertikal (column).</li>
<li><strong>flex-wrap:</strong> Menentukan apakah elemen dapat dibungkus ke baris berikutnya.</li>
</ul>

<h4>Contoh Penggunaan Flexbox:</h4>

<pre><code>
.container {
  display: flex;
  justify-content: space-between; /* Memberi jarak antar elemen */
}

.item {
  flex: 1; /* Setiap item akan mengambil ruang yang sama */
}
</code></pre>

<p>Dalam contoh di atas, kita memiliki kontainer dengan dua item. Elemen-elemen ini akan terdistribusi dengan jarak yang sama di sepanjang sumbu horizontal.</p>

<h3>Apa itu CSS Grid?</h3>
<p><strong>CSS Grid</strong> adalah sistem layout dua dimensi yang memungkinkan kita menyusun elemen dalam baris dan kolom. Grid sangat berguna ketika kita perlu mengatur layout yang lebih kompleks, seperti desain halaman dengan banyak kolom dan baris yang saling terkait.</p>

<h4>Properti Utama Grid:</h4>
<ul>
<li><strong>display: grid;</strong> - Menetapkan kontainer sebagai grid container.</li>
<li><strong>grid-template-columns:</strong> Menentukan jumlah dan ukuran kolom di dalam grid.</li>
<li><strong>grid-template-rows:</strong> Menentukan jumlah dan ukuran baris di dalam grid.</li>
<li><strong>grid-gap:</strong> Mengatur jarak antar elemen dalam grid.</li>
<li><strong>grid-column:</strong> Mengatur elemen untuk span beberapa kolom.</li>
<li><strong>grid-row:</strong> Mengatur elemen untuk span beberapa baris.</li>
</ul>

<h4>Contoh Penggunaan CSS Grid:</h4>

<pre><code>
.container {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* Membuat 3 kolom dengan lebar yang sama */
  grid-gap: 20px; /* Jarak antar elemen */
}

.item {
  background-color: lightblue;
  padding: 10px;
}
</code></pre>

<p>Di sini, kita membuat grid dengan 3 kolom yang memiliki lebar yang sama, dan ada jarak 20px antara setiap elemen di dalam grid.</p>

<h3>Perbandingan Flexbox dan Grid</h3>
<table border="1" cellpadding="8" cellspacing="0">
<tr>
<th>Flexbox</th>
<th>CSS Grid</th>
</tr>
<tr>
<td>Fokus pada layout satu dimensi (horizontal atau vertikal).</td>
<td>Fokus pada layout dua dimensi (baris dan kolom).</td>
</tr>
<tr>
<td>Cocok untuk layout yang lebih sederhana atau elemen sejenis.</td>
<td>Cocok untuk layout yang lebih kompleks, seperti desain halaman dengan banyak kolom dan baris.</td>
</tr>
<tr>
<td>Lebih mudah digunakan untuk tata letak yang fleksibel dan responsif.</td>
<td>Lebih kuat untuk kontrol layout yang presisi dan lebih banyak elemen dalam grid.</td>
</tr>
</table>

<h3>Contoh Kombinasi Flexbox dan Grid</h3>
<p>Untuk desain yang lebih kompleks, kita bisa menggabungkan Flexbox dan CSS Grid dalam satu halaman. Misalnya, kita bisa menggunakan Grid untuk membuat struktur halaman utama dan Flexbox untuk elemen-elemen di dalamnya, seperti menu navigasi atau konten artikel.</p>

<pre><code>
.header {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
}

.menu {
  display: flex;
  justify-content: space-around;
}

.main-content {
  display: flex;
  flex-direction: column;
}
</code></pre>

<h3>Kesimpulan</h3>

<p>Baik Flexbox maupun CSS Grid adalah alat yang sangat berguna untuk membangun layout responsif yang lebih fleksibel. Flexbox memberikan kontrol yang lebih baik di sepanjang satu sumbu, sementara CSS Grid memungkinkan kontrol lebih mendalam dalam dua dimensi (baris dan kolom). Dengan menggunakan keduanya secara bersama-sama, kita bisa membuat desain web yang sangat responsif dan dinamis, yang terlihat baik di berbagai ukuran layar perangkat.</p>
            '
            ],
            [
                'course_id' => 11,
                'urutan' => 4,
                'judul' => 'Responsif Design',
                'content' => ''
            ],
            [
                'course_id' => 11,
                'urutan' => 4,
                'judul' => 'Responsif Design',
                'content' => ''
            ],
            [
                'course_id' => 11,
                'urutan' => 4,
                'judul' => 'Responsif Design',
                'content' => ''
            ],
        ]);
    }
}
