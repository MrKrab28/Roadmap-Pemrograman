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





            ['quis_id' => 32, 'jawaban' => 'htmlspecialchars()', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 32, 'jawaban' => 'strip_tags()', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 32, 'jawaban' => 'addslashes()', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 32, 'jawaban' => 'filter_var()', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 33, 'jawaban' => '&lt;script&gt;alert(&#039;XSS&#039;)&lt;/script&gt;', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 33, 'jawaban' => 'alert("XSS")', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 33, 'jawaban' => 'XSS', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 33, 'jawaban' => 'Error', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 34, 'jawaban' => 'Menghindari SQL Injection', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 34, 'jawaban' => 'Mempercepat koneksi database', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 34, 'jawaban' => 'Menghilangkan kebutuhan untuk password', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 34, 'jawaban' => 'Mengganti penggunaan PHP', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 35, 'jawaban' => 'Menjalankan query aman dengan parameter email', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 35, 'jawaban' => 'Menjalankan query tanpa parameter', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 35, 'jawaban' => 'Menampilkan error karena SQL salah', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 35, 'jawaban' => 'Menghapus data di tabel', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 36, 'jawaban' => 'Memverifikasi password input dengan hash yang tersimpan', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 36, 'jawaban' => 'Mengubah password menjadi hash baru', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 36, 'jawaban' => 'Menghapus password dari database', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 36, 'jawaban' => 'Menampilkan password dalam bentuk hash', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 37, 'jawaban' => 'Match', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 37, 'jawaban' => 'No Match', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 37, 'jawaban' => 'Error', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 37, 'jawaban' => 'False', 'status' => 'salah', 'opsi' => 'D'],













            ['quis_id' => 38, 'jawaban' => '<h6>', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 38, 'jawaban' => '<h3>', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 38, 'jawaban' => '<h1>', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 38, 'jawaban' => '<head>', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 39, 'jawaban' => '<ul>', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 39, 'jawaban' => '<li>', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 39, 'jawaban' => '<ol>', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 39, 'jawaban' => '<dl>', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 40, 'jawaban' => '<video>', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 40, 'jawaban' => '<media>', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 40, 'jawaban' => '<mp4>', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 40, 'jawaban' => '<embed>', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 41, 'jawaban' => '<input>', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 41, 'jawaban' => '<option>', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 41, 'jawaban' => '<select>', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 41, 'jawaban' => '<textarea>', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 42, 'jawaban' => 'Menambahkan gambar', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 42, 'jawaban' => 'Menampilkan video', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 42, 'jawaban' => 'Membuat tautan/hyperlink', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 42, 'jawaban' => 'Mengatur layout halaman', 'status' => 'salah', 'opsi' => 'D'],




            ['quis_id' => 43, 'jawaban' => '<main>', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 43, 'jawaban' => '<div>', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 43, 'jawaban' => '<body>', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 43, 'jawaban' => '<container>', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 44, 'jawaban' => 'Untuk menyisipkan gambar', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 44, 'jawaban' => 'Untuk membuat form', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 44, 'jawaban' => 'Untuk mengelompokkan konten tematik', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 44, 'jawaban' => 'Untuk membuat sidebar', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 45, 'jawaban' => '<footer>', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 45, 'jawaban' => '<bottom>', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 45, 'jawaban' => '<nav>', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 45, 'jawaban' => '<aside>', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 46, 'jawaban' => 'Mempercantik tampilan halaman', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 46, 'jawaban' => 'Memudahkan struktur dan makna halaman', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 46, 'jawaban' => 'Meningkatkan ukuran file', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 46, 'jawaban' => 'Menggantikan JavaScript', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 47, 'jawaban' => '<div>', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 47, 'jawaban' => '<article>', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 47, 'jawaban' => '<span>', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 47, 'jawaban' => '<main>', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 48, 'jawaban' => '<h6>', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 48, 'jawaban' => '<h1>', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 48, 'jawaban' => '<p>', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 48, 'jawaban' => '<title>', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 49, 'jawaban' => 'Cascading Style Sheets', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 49, 'jawaban' => 'Creative Style Syntax', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 49, 'jawaban' => 'Code Styling Sheet', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 49, 'jawaban' => 'Central Style System', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 50, 'jawaban' => 'Mengelola struktur data', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 50, 'jawaban' => 'Menentukan tampilan visual halaman web', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 50, 'jawaban' => 'Membuat API', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 50, 'jawaban' => 'Menghubungkan server', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 51, 'jawaban' => 'Fungsi dan variabel', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 51, 'jawaban' => 'Struktur halaman dan alur logika', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 51, 'jawaban' => 'Tampilan dan tata letak visual', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 51, 'jawaban' => 'Relasi database', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 52, 'jawaban' => 'Agar halaman web lebih berat', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 52, 'jawaban' => 'Memisahkan struktur dan tampilan agar mudah dikelola', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 52, 'jawaban' => 'Untuk menyulitkan pembacaan kode', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 52, 'jawaban' => 'Agar browser dapat membacanya lebih cepat', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 53, 'jawaban' => 'Menulis ulang kode untuk setiap halaman', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 53, 'jawaban' => 'Menggunakan satu file untuk mengatur banyak halaman', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 53, 'jawaban' => 'Mengurangi waktu loading', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 53, 'jawaban' => 'Mengubah struktur halaman', 'status' => 'salah', 'opsi' => 'D'],

        ]);
    }
}
