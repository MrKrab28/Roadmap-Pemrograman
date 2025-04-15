<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JawbanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jawaban::insert([
            ['quis_id' => 1, 'jawaban' => 'Personal Home Page', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 1, 'jawaban' => 'PHP Hyper Module', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 1, 'jawaban' => 'Program Hosting Protocol', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 1, 'jawaban' => 'Private Home Process', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 2, 'jawaban' => 'Guido van Rossum', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 2, 'jawaban' => 'Dennis Ritchie', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 2, 'jawaban' => 'Rasmus Lerdorf', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 2, 'jawaban' => 'Brendan Eich', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 3, 'jawaban' => 'Client-side', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 3, 'jawaban' => 'Database-side', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 3, 'jawaban' => 'Server-side', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 3, 'jawaban' => 'User-side', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 4, 'jawaban' => 'Mengelola tampilan web', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 4, 'jawaban' => 'Menjalankan aplikasi mobile', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 4, 'jawaban' => 'Menangani logika backend dan database', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 4, 'jawaban' => 'Memformat teks', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 5, 'jawaban' => 'Adobe Dreamweaver', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 5, 'jawaban' => 'WordPress', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 5, 'jawaban' => 'XAMPP', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 5, 'jawaban' => 'Notepad++', 'status' => 'salah', 'opsi' => 'D'],








            ['quis_id' => 6, 'jawaban' => 'HyperTool Markup Language', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 6, 'jawaban' => 'HyperText Markup Language', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 6, 'jawaban' => 'HyperTransfer Main Language', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 6, 'jawaban' => 'HighText Markdown Language', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 7, 'jawaban' => 'Membuat logika backend', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 7, 'jawaban' => 'Membuat desain grafis', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 7, 'jawaban' => 'Membuat struktur halaman web', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 7, 'jawaban' => 'Mengatur warna CSS', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 8, 'jawaban' => 'Konten utama web', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 8, 'jawaban' => 'Form dan input', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 8, 'jawaban' => 'Judul, meta, link CSS, script', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 8, 'jawaban' => 'Tabel dan gambar', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 9, 'jawaban' => '<div>', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 9, 'jawaban' => '<p>', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 9, 'jawaban' => '<h1>', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 9, 'jawaban' => '<br>', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 10, 'jawaban' => '<html>', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 10, 'jawaban' => '<head>', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 10, 'jawaban' => '<!DOCTYPE html>', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 10, 'jawaban' => '<body>', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 11, 'jawaban' => 'Menampung data sementara untuk digunakan dalam program', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 11, 'jawaban' => 'Menyimpan string dalam array', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 11, 'jawaban' => 'Membaca file dari server', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 11, 'jawaban' => 'Mendeklarasikan fungsi dalam PHP', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 12, 'jawaban' => 'array_merge()', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 12, 'jawaban' => 'array_combine()', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 12, 'jawaban' => 'array_push()', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 12, 'jawaban' => 'array_slice()', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 13, 'jawaban' => 'Menentukan kondisi dan mengeksekusi kode tertentu', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 13, 'jawaban' => 'Menampilkan pesan error', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 13, 'jawaban' => 'Menggabungkan dua array menjadi satu', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 13, 'jawaban' => 'Menghitung panjang array', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 14, 'jawaban' => 'Menghapus elemen terakhir dari array', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 14, 'jawaban' => 'Menghapus elemen pertama dari array', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 14, 'jawaban' => 'Menambahkan elemen terakhir ke array', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 14, 'jawaban' => 'Menambahkan elemen pertama ke array', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 15, 'jawaban' => '3', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 15, 'jawaban' => '4', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 15, 'jawaban' => '2', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 15, 'jawaban' => '1', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 16, 'jawaban' => 'Jeruk', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 16, 'jawaban' => 'Mangga', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 16, 'jawaban' => 'Pisang', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 16, 'jawaban' => 'Apel', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 17, 'jawaban' => 'Avanza', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 17, 'jawaban' => 'Toyota', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 17, 'jawaban' => '2020', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 17, 'jawaban' => 'Model', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 18, 'jawaban' => '3306', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 18, 'jawaban' => '8080', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 18, 'jawaban' => '1433', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 18, 'jawaban' => '21', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 19, 'jawaban' => 'Mengelola database secara visual', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 19, 'jawaban' => 'Membuat file PHP', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 19, 'jawaban' => 'Menjalankan server Apache', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 19, 'jawaban' => 'Mengelola Git repository', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 20, 'jawaban' => 'PDO', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 20, 'jawaban' => 'mysql_connect()', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 20, 'jawaban' => 'mysqli procedural', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 20, 'jawaban' => 'pg_connect()', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 21, 'jawaban' => 'PDO mendukung banyak jenis database, MySQLi hanya MySQL', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 21, 'jawaban' => 'PDO hanya bekerja di PHP 4, MySQLi di PHP 5', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 21, 'jawaban' => 'MySQLi lebih lambat dari PDO', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 21, 'jawaban' => 'PDO tidak butuh password', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 22, 'jawaban' => 'Mengambil data dari tabel database', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 22, 'jawaban' => 'Menghapus tabel dari database', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 22, 'jawaban' => 'Menambahkan kolom baru', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 22, 'jawaban' => 'Mengganti nama tabel', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 23, 'jawaban' => 'Menambahkan data pengguna bernama Rina', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 23, 'jawaban' => 'Menghapus data dari tabel users', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 23, 'jawaban' => 'Menampilkan seluruh isi tabel users', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 23, 'jawaban' => 'Memperbarui data pengguna', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 24, 'jawaban' => 'DELETE FROM users WHERE id = 1;', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 24, 'jawaban' => 'REMOVE FROM users;', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 24, 'jawaban' => 'DESTROY users WHERE id = 1;', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 24, 'jawaban' => 'UNSET users;', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 25, 'jawaban' => 'Mengambil data dari form HTML', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 25, 'jawaban' => 'Menampilkan halaman web', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 25, 'jawaban' => 'Menjalankan server MySQL', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 25, 'jawaban' => 'Menyimpan file di server', 'status' => 'salah', 'opsi' => 'D'],



            ['quis_id' => 26, 'jawaban' => 'Create, Read, Update, Delete', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 26, 'jawaban' => 'Class, Read, Update, Delete', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 26, 'jawaban' => 'Create, Retrieve, Update, Delete', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 26, 'jawaban' => 'Create, Read, Undo, Delete', 'status' => 'salah', 'opsi' => 'D'],



            ['quis_id' => 27, 'jawaban' => 'Nama-nama pengguna dari tabel "users"', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 27, 'jawaban' => 'Error, karena koneksi gagal', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 27, 'jawaban' => 'Menampilkan data semua kolom dalam tabel', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 27, 'jawaban' => 'Menampilkan data yang tidak terurut', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 28, 'jawaban' => 'Menambahkan data pengguna baru ke tabel "users"', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 28, 'jawaban' => 'Mencari pengguna dengan nama dan email', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 28, 'jawaban' => 'Menghapus pengguna dari tabel "users"', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 28, 'jawaban' => 'Mengubah data pengguna dalam tabel', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 29, 'jawaban' => 'Mengubah data pengguna berdasarkan ID', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 29, 'jawaban' => 'Menghapus data pengguna berdasarkan ID', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 29, 'jawaban' => 'Menambahkan pengguna baru ke tabel', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 29, 'jawaban' => 'Mencari pengguna berdasarkan ID', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 30, 'jawaban' => 'Menghapus pengguna berdasarkan ID', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 30, 'jawaban' => 'Menambahkan pengguna baru ke tabel', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 30, 'jawaban' => 'Mengubah data pengguna berdasarkan ID', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 30, 'jawaban' => 'Menampilkan data pengguna berdasarkan ID', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 31, 'jawaban' => 'Pencegahan SQL Injection dengan menyiapkan query terlebih dahulu', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 31, 'jawaban' => 'Menyiapkan data terlebih dahulu dan menggunakannya dalam query', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 31, 'jawaban' => 'Mengeksekusi query langsung tanpa parameter', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 31, 'jawaban' => 'Menjalankan query yang sudah ada', 'status' => 'salah', 'opsi' => 'D'],
        ]);
    }
}
