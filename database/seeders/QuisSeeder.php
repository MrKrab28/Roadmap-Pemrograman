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

        ]);
    }
}
