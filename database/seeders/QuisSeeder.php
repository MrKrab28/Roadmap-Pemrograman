<?php

namespace Database\Seeders;

use App\Models\Quis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quis::insert([
            ['course_id' => 1, 'pertanyaan' => 'Apa kepanjangan dari PHP?'],
            ['course_id' => 1, 'pertanyaan' => 'Siapa pencipta awal dari bahasa PHP?'],
            ['course_id' => 1, 'pertanyaan' => 'PHP termasuk bahasa pemrograman sisi...?'],
            ['course_id' => 1, 'pertanyaan' => 'Apa fungsi utama PHP dalam pengembangan web?'],
            ['course_id' => 1, 'pertanyaan' => 'Di bawah ini yang termasuk web server untuk menjalankan PHP lokal adalah?'],



            ['course_id' => 2, 'pertanyaan' => 'Apa kepanjangan dari HTML?'],
            ['course_id' => 2, 'pertanyaan' => 'HTML digunakan untuk...?'],
            ['course_id' => 2, 'pertanyaan' => 'Tag <head> biasanya berisi...?'],
            ['course_id' => 2, 'pertanyaan' => 'Tag yang digunakan untuk membuat paragraf adalah...?'],
            ['course_id' => 2, 'pertanyaan' => 'Struktur dasar HTML dimulai dengan...?'],


            ['course_id' => 3, 'pertanyaan' => 'Apa yang dimaksud dengan variabel dalam PHP?'],
            ['course_id' => 3, 'pertanyaan' => 'Fungsi berikut ini digunakan untuk menggabungkan dua array di PHP:'],
            ['course_id' => 3, 'pertanyaan' => 'Struktur kontrol "if" digunakan untuk:'],
            ['course_id' => 3, 'pertanyaan' => 'Fungsi "array_pop()" digunakan untuk:'],
            ['course_id' => 3, 'pertanyaan' => 'Apa yang akan ditampilkan oleh kode PHP berikut? <pre> <code> $angka = [1, 2, 3, 4];
        echo $angka[2];</code>'],
            ['course_id' => 3, 'pertanyaan' => ' Apa hasil dari kode berikut?<pre><code>$buah = ["Apel", "Jeruk", "Mangga"];
        $buah[] = "Pisang";
                echo $buah[3];</code></pre>'],
            ['course_id' => 3, 'pertanyaan' => 'Apa hasil dari kode PHP berikut?<pre><code> $mobil = ["merk" => "Toyota", "model" => "Avanza", "tahun" => 2020];
        echo $mobil["model"]; </code></pre>'],








            ['course_id' => 4, 'pertanyaan' => 'Apa port default yang digunakan MySQL?'],
            ['course_id' => 4, 'pertanyaan' => 'Fungsi utama dari MySQL Workbench adalah:'],
            ['course_id' => 4, 'pertanyaan' => 'Metode yang paling aman untuk koneksi PHP ke database adalah:'],
            ['course_id' => 4, 'pertanyaan' => 'Apa perbedaan utama antara MySQLi dan PDO?'],
            ['course_id' => 4, 'pertanyaan' => 'Apa kegunaan dari query SQL SELECT?'],
            ['course_id' => 4, 'pertanyaan' => 'Apa hasil dari query berikut?<pre><code>INSERT INTO users (name) VALUES ("Rina");</code></pre>'],
            ['course_id' => 4, 'pertanyaan' => 'Query SQL manakah yang digunakan untuk menghapus data?'],
            ['course_id' => 4, 'pertanyaan' => 'Apa fungsi dari $_POST di PHP?'],




            ['course_id' => 5, 'pertanyaan' => 'Apa yang dimaksud dengan CRUD dalam konteks aplikasi web?'],
            ['course_id' => 5, 'pertanyaan' => 'Apa yang akan ditampilkan oleh kode PHP berikut? <pre><code>$conn = new mysqli("localhost", "root", "", "db_example");
            $result = $conn->query("SELECT * FROM users");
            while($row = $result->fetch_assoc()) { echo $row["name"];
            }</code></pre>'],
            ['course_id' => 5, 'pertanyaan' => 'Apa yang akan dilakukan oleh kode PHP berikut? <pre><code>$stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
            $stmt->bind_param("ss", $name, $email);
            $stmt->execute();</code></pre>'],
            ['course_id' => 5, 'pertanyaan' => 'Apa yang akan dilakukan oleh kode PHP berikut? <pre><code>$stmt = $conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
            $stmt->bind_param("ssi", $name, $email, $id);
            $stmt->execute();</code></pre>'],
            ['course_id' => 5, 'pertanyaan' => 'Apa yang akan dilakukan oleh kode PHP berikut? <pre><code>$stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();</code></pre>'],
            ['course_id' => 5, 'pertanyaan' => 'Apa yang dimaksud dengan prepared statements dalam PHP? <pre><code>$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();</code></pre>'],



            ['course_id' => 6, 'pertanyaan' => 'Fungsi apa yang digunakan untuk mencegah serangan XSS pada input pengguna di PHP?'],
            ['course_id' => 6, 'pertanyaan' => "Apa hasil dari kode berikut? <pre><code>\$name = htmlspecialchars(\"&lt;script&gt;alert('XSS')&lt;/script&gt;\");
    echo \$name;</code></pre>"],
            ['course_id' => 6, 'pertanyaan' => 'Apa keuntungan utama menggunakan prepared statements dalam PHP?'],
            ['course_id' => 6, 'pertanyaan' => 'Apa yang akan dilakukan oleh kode berikut? <pre><code>$stmt = $conn->prepare(\"SELECT * FROM users WHERE email = ?\");
            $stmt->bind_param(\"s\", $email);
            $stmt->execute();</code></pre>'],
            ['course_id' => 6, 'pertanyaan' => 'Apa fungsi dari password_verify() dalam PHP?'],
            ['course_id' => 6, 'pertanyaan' => 'Apa output dari kode berikut? <pre><code>$password = "admin123";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    echo password_verify("admin123", $hash) ? "Match" : "No Match";</code></pre>'],



            ['course_id' => 7, 'pertanyaan' => 'Tag apa yang digunakan untuk membuat heading tingkat tertinggi?'],
            ['course_id' => 7, 'pertanyaan' => 'Tag apa yang digunakan untuk membuat daftar bernomor di HTML?'],
            ['course_id' => 7, 'pertanyaan' => 'Tag apa yang digunakan untuk menampilkan video di HTML?'],
            ['course_id' => 7, 'pertanyaan' => 'Untuk membuat dropdown pada form, tag HTML yang digunakan adalah...?'],
            ['course_id' => 7, 'pertanyaan' => 'Tag <code><a></code> dalam HTML digunakan untuk...?'],



            ['course_id' => 8, 'pertanyaan' => 'Tag HTML apa yang digunakan untuk membungkus bagian utama konten halaman?'],
            ['course_id' => 8, 'pertanyaan' => 'Apa fungsi dari tag <section>?'],
            ['course_id' => 8, 'pertanyaan' => 'Tag HTML apa yang biasanya digunakan untuk bagian penutup halaman?'],
            ['course_id' => 8, 'pertanyaan' => 'Apa tujuan dari penggunaan elemen semantik dalam HTML?'],
            ['course_id' => 8, 'pertanyaan' => 'Tag HTML mana yang semantik dan digunakan untuk konten mandiri seperti artikel?'],
            ['course_id' => 8, 'pertanyaan' => 'Struktur heading HTML dimulai dari tag apa?'],


            ['course_id' => 9, 'pertanyaan' => 'Apa singkatan dari CSS?'],
            ['course_id' => 9, 'pertanyaan' => 'Apa fungsi utama CSS dalam pengembangan web?'],
            ['course_id' => 9, 'pertanyaan' => 'CSS digunakan untuk mengatur apa dalam sebuah halaman web?'],
            ['course_id' => 9, 'pertanyaan' => 'Mengapa penting memisahkan HTML dan CSS?'],
            ['course_id' => 9, 'pertanyaan' => 'Apa keuntungan menggunakan CSS dalam proyek besar?'],


            ['course_id' => 10, 'pertanyaan' => 'Apa properti CSS yang digunakan untuk mengubah jenis huruf (font)?'],
            ['course_id' => 10, 'pertanyaan' => 'Properti apa yang digunakan untuk mengatur jarak antar huruf?'],
            ['course_id' => 10, 'pertanyaan' => 'Apa perbedaan utama antara padding dan margin?'],
            ['course_id' => 10, 'pertanyaan' => 'Properti CSS apa yang digunakan untuk memberikan garis tepi pada elemen?'],
            ['course_id' => 10, 'pertanyaan' => 'Untuk mengatur agar gambar background tidak diulang, properti apa yang digunakan?'],
            ['course_id' => 10, 'pertanyaan' => 'Properti apa yang digunakan untuk menentukan lebar suatu elemen?'],
            ['course_id' => 10, 'pertanyaan' => 'Properti apa yang digunakan untuk mengatur bagaimana elemen ditampilkan (seperti block atau inline)?'],
            ['course_id' => 10, 'pertanyaan' => 'Jika ingin elemen menyesuaikan lebar jendela browser, satuan apa yang digunakan?'],


            ['course_id' => 9, 'pertanyaan' => 'Bagaimana desain responsif mempengaruhi pengalaman pengguna di berbagai perangkat, dan apa tantangan utama dalam implementasinya?'],
            ['course_id' => 9, 'pertanyaan' => 'Mengapa persentase dan viewport units (vw, vh) lebih dianjurkan dibandingkan dengan satuan tetap seperti pixel dalam menciptakan layout yang fleksibel dan responsif?'],
            ['course_id' => 9, 'pertanyaan' => 'Jelaskan bagaimana cara kerja media queries dan sebutkan beberapa contoh kondisi yang bisa ditargetkan untuk menyesuaikan tampilan dengan berbagai perangkat?'],
            ['course_id' => 9, 'pertanyaan' => 'Apa perbedaan utama antara Flexbox dan CSS Grid dalam hal layout responsif, dan kapan sebaiknya menggunakan masing-masing teknik tersebut?'],
        ]);
    }
}
