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


        ]);
    }
}
