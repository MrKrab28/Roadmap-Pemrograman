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






            ['quis_id' => 54, 'jawaban' => 'font-family', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 54, 'jawaban' => 'font-size', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 54, 'jawaban' => 'text-align', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 54, 'jawaban' => 'color', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 55, 'jawaban' => 'letter-spacing', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 55, 'jawaban' => 'word-spacing', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 55, 'jawaban' => 'line-height', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 55, 'jawaban' => 'font-weight', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 56, 'jawaban' => 'Padding adalah jarak antara isi dan tepi dalam elemen, margin adalah jarak antar elemen.', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 56, 'jawaban' => 'Margin adalah jarak isi ke dalam elemen.', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 56, 'jawaban' => 'Padding adalah jarak antar elemen.', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 56, 'jawaban' => 'Keduanya sama saja.', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 57, 'jawaban' => 'border', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 57, 'jawaban' => 'outline', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 57, 'jawaban' => 'margin', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 57, 'jawaban' => 'padding', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 58, 'jawaban' => 'background-repeat', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 58, 'jawaban' => 'background-attachment', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 58, 'jawaban' => 'background-size', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 58, 'jawaban' => 'background-position', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 59, 'jawaban' => 'width', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 59, 'jawaban' => 'size', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 59, 'jawaban' => 'scale', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 59, 'jawaban' => 'margin', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 60, 'jawaban' => 'display', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 60, 'jawaban' => 'position', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 60, 'jawaban' => 'visibility', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 60, 'jawaban' => 'flex', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 61, 'jawaban' => 'vw', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 61, 'jawaban' => 'px', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 61, 'jawaban' => 'vh', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 61, 'jawaban' => '%', 'status' => 'salah', 'opsi' => 'D'],





            ['quis_id' => 62, 'jawaban' => 'Desain responsif memungkinkan tampilan web menyesuaikan diri dengan berbagai ukuran perangkat, meningkatkan pengalaman pengguna dengan membuat website tetap mudah diakses di perangkat apa pun. Tantangan utamanya adalah menjaga konsistensi desain saat beradaptasi dengan banyak perangkat.', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 62, 'jawaban' => 'Desain responsif mengutamakan desain statis yang tidak beradaptasi dengan ukuran layar perangkat.', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 62, 'jawaban' => 'Desain responsif hanya penting untuk perangkat mobile, tidak berlaku untuk desktop.', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 62, 'jawaban' => 'Desain responsif memungkinkan pengaturan elemen secara manual untuk setiap perangkat, meskipun tidak ada perubahan dalam layout.', 'status' => 'salah', 'opsi' => 'D'],



            ['quis_id' => 63, 'jawaban' => 'Persentase dan viewport units memungkinkan desain web menyesuaikan ukuran elemen dengan proporsi layar perangkat, menghindari pengaturan elemen dengan ukuran tetap yang tidak fleksibel seperti pixel.', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 63, 'jawaban' => 'Persentase dan viewport units tidak memiliki peran dalam desain responsif karena mereka tetap menggunakan ukuran tetap dalam tampilan.', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 63, 'jawaban' => 'Unit vw dan vh digunakan untuk mengatur ukuran elemen dalam satuan tetap, yang tidak dipengaruhi oleh perubahan ukuran layar.', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 63, 'jawaban' => 'Persentase memberikan ukuran fleksibel yang hanya digunakan dalam layout vertikal, sedangkan viewport units lebih sering digunakan untuk margin dan padding.', 'status' => 'salah', 'opsi' => 'D'],



            ['quis_id' => 64, 'jawaban' => 'Media queries memungkinkan kita mengaplikasikan CSS khusus untuk kondisi perangkat tertentu, seperti lebar layar, orientasi, atau resolusi. Contoh: @media (max-width: 768px) untuk perangkat dengan lebar layar kurang dari 768px.', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 64, 'jawaban' => 'Media queries hanya bisa digunakan untuk menyesuaikan gambar pada perangkat dengan layar kecil.', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 64, 'jawaban' => 'Media queries digunakan untuk mengatur margin dan padding pada elemen tanpa memperhatikan perangkat yang digunakan.', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 64, 'jawaban' => 'Media queries memungkinkan penyesuaian tata letak, ukuran font, dan elemen visual lainnya tergantung pada kondisi perangkat, seperti lebar layar atau resolusi.', 'status' => 'benar', 'opsi' => 'D'],



            ['quis_id' => 65, 'jawaban' => 'Flexbox lebih baik digunakan untuk layout satu dimensi (baik horizontal atau vertikal), sedangkan CSS Grid digunakan untuk layout dua dimensi yang lebih kompleks dengan kontrol penuh terhadap baris dan kolom.', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 65, 'jawaban' => 'CSS Grid lebih cocok untuk layout satu dimensi dan tidak bisa digunakan untuk layout dua dimensi.', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 65, 'jawaban' => 'Flexbox dan CSS Grid memiliki fungsi yang sama dalam mengatur layout responsif dan dapat digunakan secara bergantian.', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 65, 'jawaban' => 'Flexbox hanya cocok untuk layout vertikal, sedangkan CSS Grid lebih sering digunakan untuk layout horizontal.', 'status' => 'salah', 'opsi' => 'D'],



            ['quis_id' => 66, 'jawaban' => 'Mengelola struktur halaman', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 66, 'jawaban' => 'Membuat halaman menjadi interaktif dan dinamis', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 66, 'jawaban' => 'Menyimpan data di server', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 66, 'jawaban' => 'Mengatur tampilan halaman saja', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 67, 'jawaban' => 'var', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 67, 'jawaban' => 'let dan const', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 67, 'jawaban' => 'define', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 67, 'jawaban' => 'varlet', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 68, 'jawaban' => 'Internal disimpan di file terpisah, eksternal di dalam HTML', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 68, 'jawaban' => 'Internal dan eksternal sama-sama disimpan dalam HTML', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 68, 'jawaban' => 'Internal ditulis langsung di file HTML, eksternal di file .js terpisah', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 68, 'jawaban' => 'Internal digunakan untuk server-side coding', 'status' => 'salah', 'opsi' => 'D'],





            ['quis_id' => 69, 'jawaban' => 'Mengulangi kode yang sama tanpa struktur', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 69, 'jawaban' => 'Membuat kode lebih modular, terstruktur, dan mudah digunakan ulang', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 69, 'jawaban' => 'Membuat tampilan lebih menarik', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 69, 'jawaban' => 'Mengganti bahasa pemrograman', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 70, 'jawaban' => 'mahasiswa["umur"]', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 70, 'jawaban' => 'mahasiswa.umur()', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 70, 'jawaban' => 'mahasiswa->umur', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 70, 'jawaban' => 'mahasiswa[umur]', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 71, 'jawaban' => 'click', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 71, 'jawaban' => 'mouseover', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 71, 'jawaban' => 'input', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 71, 'jawaban' => 'submit', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 72, 'jawaban' => 'Tidak terjadi apa-apa.', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 72, 'jawaban' => 'Console akan menampilkan "Tombol diklik!"', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 72, 'jawaban' => 'Akan muncul alert di browser.', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 72, 'jawaban' => 'Halaman akan melakukan refresh otomatis.', 'status' => 'salah', 'opsi' => 'D'],





            ['quis_id' => 73, 'jawaban' => 'Bahasa pemrograman untuk data science.', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 73, 'jawaban' => 'Framework PHP untuk membangun aplikasi web modern.', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 73, 'jawaban' => 'Sistem manajemen database.', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 73, 'jawaban' => 'Framework JavaScript untuk frontend.', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 74, 'jawaban' => 'php artisan new', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 74, 'jawaban' => 'composer install laravel', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 74, 'jawaban' => 'laravel install nama_proyek', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 74, 'jawaban' => 'composer create-project laravel/laravel nama_proyek', 'status' => 'benar', 'opsi' => 'D'],

            ['quis_id' => 75, 'jawaban' => 'Mengatur routing aplikasi.', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 75, 'jawaban' => 'Menentukan isi halaman web.', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 75, 'jawaban' => 'Menampilkan log error Laravel.', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 75, 'jawaban' => 'Menyimpan pengaturan lingkungan seperti koneksi database dan key aplikasi.', 'status' => 'benar', 'opsi' => 'D'],

            ['quis_id' => 76, 'jawaban' => 'resources/views', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 76, 'jawaban' => 'routes/web.php', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 76, 'jawaban' => 'app/Http/Controllers', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 76, 'jawaban' => 'database/migrations', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 77, 'jawaban' => 'Menampilkan tampilan UI ke pengguna.', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 77, 'jawaban' => 'Menerima request HTTP dari user.', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 77, 'jawaban' => 'Mengelola logika data dan berinteraksi dengan database.', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 77, 'jawaban' => 'Menangani konfigurasi file Laravel.', 'status' => 'salah', 'opsi' => 'D'],



            ['quis_id' => 78, 'jawaban' => 'Menghapus controller BlogController', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 78, 'jawaban' => 'Membuat controller dengan semua method CRUD (index, create, store, etc)', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 78, 'jawaban' => 'Membuat controller kosong tanpa method', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 78, 'jawaban' => 'Membuat file view secara otomatis', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 79, 'jawaban' => 'Menghapus data berdasarkan ID', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 79, 'jawaban' => 'Menampilkan data produk', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 79, 'jawaban' => 'Menyimpan data baru ke dalam database', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 79, 'jawaban' => 'Mengedit file konfigurasi', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 80, 'jawaban' => '5', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 80, 'jawaban' => '7', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 80, 'jawaban' => '3', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 80, 'jawaban' => '9', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 81, 'jawaban' => 'Menampilkan data semua produk', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 81, 'jawaban' => 'Membuat produk baru', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 81, 'jawaban' => 'Memperbarui data berdasarkan ID', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 81, 'jawaban' => 'Menghapus data produk', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 82, 'jawaban' => 'group', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 82, 'jawaban' => 'controller', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 82, 'jawaban' => 'resource', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 82, 'jawaban' => 'web', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 83, 'jawaban' => 'Menampilkan semua data dari tabel Product', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 83, 'jawaban' => 'Membuat controller baru bernama Product', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 83, 'jawaban' => 'Membuat model baru bernama Product di folder app/Models', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 83, 'jawaban' => 'Menjalankan seeder Product', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 84, 'jawaban' => 'Menentukan kolom sebagai primary key', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 84, 'jawaban' => 'Menentukan relasi antar model', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 84, 'jawaban' => 'Menentukan kolom mana saja yang bisa diisi secara massal (mass assignment)', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 84, 'jawaban' => 'Menghapus data lama dari tabel', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 85, 'jawaban' => 'Membuat seeder baru', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 85, 'jawaban' => 'Menjalankan semua seeder yang terdaftar', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 85, 'jawaban' => 'Membuat file migrasi untuk tabel products', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 85, 'jawaban' => 'Menjalankan factory untuk model Product', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 86, 'jawaban' => 'Menghapus data dengan ID 5', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 86, 'jawaban' => 'Mengupdate data dengan ID 5', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 86, 'jawaban' => 'Mengambil data dengan ID 5 dari tabel products', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 86, 'jawaban' => 'Menambahkan data baru ke tabel products', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 87, 'jawaban' => 'Menjalankan migrasi untuk database', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 87, 'jawaban' => 'Menjalankan semua file seeder dan mengisi data awal', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 87, 'jawaban' => 'Menghapus semua data tabel', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 87, 'jawaban' => 'Membuat seeder baru', 'status' => 'salah', 'opsi' => 'D'],





            ['quis_id' => 88, 'jawaban' => 'Untuk mewarisi layout dari file Blade lain', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 88, 'jawaban' => 'Untuk menambahkan file CSS', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 88, 'jawaban' => 'Untuk menghubungkan controller ke view', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 88, 'jawaban' => 'Untuk membuat partial Blade', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 89, 'jawaban' => 'content', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 89, 'jawaban' => 'title', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 89, 'jawaban' => 'main', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 89, 'jawaban' => 'yield', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 90, 'jawaban' => '<title>Beranda</title>', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 90, 'jawaban' => '<title>Default Title</title>', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 90, 'jawaban' => '<title>@section("title")</title>', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 90, 'jawaban' => '<title>@extends("title")</title>', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 91, 'jawaban' => 'Bagian <main> akan diganti oleh isi dari section "content"', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 91, 'jawaban' => 'Bagian <header> akan diganti oleh layout utama', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 91, 'jawaban' => 'Seluruh halaman akan di-override', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 91, 'jawaban' => 'Tidak ada bagian yang diganti', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 92, 'jawaban' => 'Menandai lokasi di layout untuk menyisipkan script tambahan', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 92, 'jawaban' => 'Menambahkan file JavaScript ke layout', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 92, 'jawaban' => 'Menginisialisasi event JavaScript', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 92, 'jawaban' => 'Menggabungkan layout dengan controller', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 93, 'jawaban' => 'Menyediakan sintaks ringan dan efisien untuk membuat tampilan dinamis di Laravel', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 93, 'jawaban' => 'Mengganti peran database dalam aplikasi Laravel', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 93, 'jawaban' => 'Mengatur request dan response HTTP', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 93, 'jawaban' => 'Membuat seeder untuk database', 'status' => 'salah', 'opsi' => 'D'],






            ['quis_id' => 94, 'jawaban' => '{{ strtolower($name) }}', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 94, 'jawaban' => '{{ strtoupper($name) }}', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 94, 'jawaban' => '{{ ucwords($name) }}', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 94, 'jawaban' => '{{ $name }}', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 95, 'jawaban' => '1, 2, 3', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 95, 'jawaban' => '3, 2, 1', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 95, 'jawaban' => '1 2 3', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 95, 'jawaban' => '2 1 3', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 96, 'jawaban' => 'Menampilkan pesan kesalahan', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 96, 'jawaban' => 'Menyembunyikan elemen jika kondisi tidak terpenuhi', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 96, 'jawaban' => 'Mengatur tampilan navbar', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 96, 'jawaban' => 'Menjalankan kondisi jika $user->isAdmin bernilai true', 'status' => 'benar', 'opsi' => 'D'],

            ['quis_id' => 97, 'jawaban' => 'Mendeklarasikan layout utama', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 97, 'jawaban' => 'Menyisipkan file Blade kecil seperti header atau navbar', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 97, 'jawaban' => 'Membuat form otomatis', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 97, 'jawaban' => 'Menambahkan rute baru', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 98, 'jawaban' => 'Menampilkan input form dengan value "Laravel"', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 98, 'jawaban' => 'Menampilkan teks Laravel tanpa form', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 98, 'jawaban' => 'Menampilkan form input dengan value kosong', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 98, 'jawaban' => 'Menampilkan form input dengan value "name"', 'status' => 'salah', 'opsi' => 'D'],


        ]);
    }
}
