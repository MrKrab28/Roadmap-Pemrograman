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
                'judul' => "Sejarah PHP",
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
                'judul' => "Cara Menginstal PHP dan Lingkungan Pengembangan (XAMPP, WAMP, LAMP)",
                'content' => "<p>Agar dapat menjalankan PHP secara lokal, Anda perlu menginstal PHP beserta web server (Apache) dan database (MySQL). Ada beberapa alat yang bisa digunakan untuk ini, di antaranya:</p><ul><li><strong>XAMPP:</strong> XAMPP adalah paket perangkat lunak yang menyediakan Apache, MySQL, PHP, dan Perl dalam satu instalasi. Ini adalah pilihan yang sangat populer di Windows, Linux, dan macOS.</li><li><strong>WAMP:</strong> WAMP adalah paket yang dirancang untuk Windows yang menyediakan Apache, MySQL, dan PHP. WAMP sering digunakan oleh pengembang Windows.</li><li><strong>LAMP:</strong> LAMP adalah paket perangkat lunak untuk Linux yang menyediakan Linux, Apache, MySQL, dan PHP. Ini adalah pilihan umum untuk pengembangan server-side di lingkungan Linux.</li></ul><p>Setelah mengunduh dan menginstal XAMPP, WAMP, atau LAMP, Anda dapat mulai menulis kode PHP di editor teks dan menjalankannya di server lokal Anda. Ini memungkinkan Anda untuk mengembangkan dan menguji aplikasi PHP tanpa harus terhubung ke server web jarak jauh.</p><p>Langkah-langkah dasar instalasi (misalnya, XAMPP):</p><ol><li>Unduh XAMPP dari situs resmi Apache Friends.</li><li>Jalankan installer dan pilih komponen yang ingin Anda instal (Apache, MySQL, PHP, dll).</li><li>Setelah instalasi selesai, buka XAMPP Control Panel dan mulai server Apache dan MySQL.</li><li>Tempatkan file PHP Anda di folder <strong>htdocs</strong> untuk memulai pengujian aplikasi.</li></ol>",
                'urutan' => 4
            ],
            [
                'course_id' => 2,
                'judul' => "Pengertian HTML dan Peranannya dalam Pembuatan Halaman Web",
                'content' => "<p><strong>HTML (HyperText Markup Language)</strong> adalah bahasa markup standar untuk membuat halaman web. HTML digunakan untuk menyusun dan menampilkan teks, gambar, video, dan elemen-elemen lainnya di browser.</p><p>HTML bukan bahasa pemrograman, tetapi bahasa yang menyusun struktur halaman web. HTML bekerja bersama CSS (untuk tampilan) dan JavaScript (untuk interaktivitas) dalam membentuk aplikasi web modern.</p><p><strong>Peran HTML:</strong></p><ul><li>Menentukan struktur dasar halaman web</li><li>Menampilkan konten seperti teks dan media</li><li>Menjadi dasar sebelum menambahkan CSS dan JavaScript</li></ul>",
                'urutan' => 1
            ],
            [
                'course_id' => 2,
                'judul' => "Struktur Dasar Dokumen HTML",
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
                'judul' => "Elemen Dasar HTML: Tag, Atribut, dan Nilai",
                'content' => "<p>HTML dibentuk dari <strong>elemen</strong> yang dimulai dengan <strong>tag</strong>. Tag HTML biasanya berpasangan (pembuka dan penutup), dan bisa memiliki <strong>atribut</strong> dengan <strong>nilai</strong> tertentu.</p><p><strong>Contoh elemen HTML:</strong></p><pre><code>&lt;a href=\"https://example.com\" target=\"_blank\"&gt;Kunjungi Website&lt;/a&gt;</code></pre><p><strong>Penjelasan:</strong></p><ul><li><strong>Tag:</strong> &lt;a&gt; dan &lt;/a&gt; digunakan untuk membuat tautan</li><li><strong>Atribut:</strong> <code>href</code> menentukan URL tujuan, <code>target</code> menentukan perilaku jendela</li><li><strong>Nilai:</strong> \"https://example.com\" adalah nilai dari <code>href</code></li></ul><p>Dengan memahami elemen HTML, Anda dapat mulai membangun struktur halaman secara semantik dan rapi.</p>",
                'urutan' => 3
            ],
            [
                'course_id' => 3,
                'judul' => 'Sintaks dasar PHP',
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
                'course_id' => 2,
                'judul' => 'Struktur Kontrol: if, switch, loop',
                'content' => "<h2>Struktur Kontrol dalam PHP</h2>

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
                'judul' => 'Fungsi dalam PHP',
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
                'judul' => 'Pengenalan Array dan Operasi Array',
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
                'judul' => 'Instalasi dan Konfigurasi MySQL',
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
                'judul' => 'Menghubungkan PHP dengan Database MySQL',
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
                'judul' => 'Menulis Query SQL di PHP: SELECT, INSERT, UPDATE, DELETE',
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
                'judul' => 'Menangani Data Form dengan PHP dan MySQL',
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
                'judul' => 'Menangani Data Form dengan PHP dan MySQL',
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
                'judul' => 'Membuat aplikasi sederhana dengan operasi CRUD',
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
                'judul' => 'Menggunakan PHP untuk menangani form dan memproses data ke database',
                'content' => '  <h2>Menggunakan PHP untuk Menangani Form dan Memproses Data ke Database</h2>

        <p>Dalam aplikasi web, form adalah cara yang umum digunakan untuk mengumpulkan data dari pengguna. Pada tutorial ini, kita akan belajar bagaimana cara membuat form, menangani data yang dikirimkan, dan memprosesnya untuk disimpan ke dalam database menggunakan PHP dan MySQL.</p>

        <hr>

        <h3>📋 Membuat Form HTML</h3>
        <p>Langkah pertama adalah membuat form HTML di mana pengguna dapat mengisi data. Contoh form untuk memasukkan data mahasiswa:</p>
        <pre><code>&lt;form action="proses.php" method="POST"&gt;
            Nama: &lt;input type="text" name="nama"&gt;&lt;br&gt;
            NIM: &lt;input type="text" name="nim"&gt;&lt;br&gt;
           &lt;button type="submit"&gt;Simpan &lt;/button&gt;
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



        ]);
    }
}
