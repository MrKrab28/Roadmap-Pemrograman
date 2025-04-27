<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert(
            [
                [
                    'nama' => 'BackEnd',
                    'deskripsi' => 'Back-end adalah bagian dari pengembangan aplikasi yang bekerja di balik layar, tidak terlihat oleh pengguna tetapi sangat penting untuk menjalankan fungsi aplikasi. Ini berfungsi sebagai "otak" dari aplikasi yang menangani logika, mengolah data, mengautentikasi pengguna, berkomunikasi dengan database, dan memproses permintaan dari front-end (antarmuka yang dilihat pengguna). Back-end biasanya terdiri dari server, aplikasi, dan database yang saling terhubung. Pengembang back-end menggunakan berbagai bahasa pemrograman seperti Python, Java, PHP, atau Node.js untuk menulis kode yang menjalankan proses di server, mengelola data secara efisien, memastikan keamanan aplikasi, dan mengoptimalkan kinerja sistem. Meskipun tidak terlihat langsung oleh pengguna, kualitas back-end sangat mempengaruhi pengalaman pengguna secara keseluruhan, karena menentukan kecepatan, keandalan, dan keamanan aplikasi.',
                ],
                [
                    'nama' => 'FrontEnd',
                    'deskripsi' => 'Front-end adalah bagian dari pengembangan aplikasi yang berinteraksi langsung dengan pengguna, menciptakan antarmuka visual yang dapat dilihat dan digunakan. Ini merupakan "wajah" dari aplikasi yang menampilkan elemen seperti tombol, formulir, gambar, animasi, dan menangani interaksi pengguna seperti klik, sentuh, atau input teks. Pengembang front-end menggunakan teknologi seperti HTML untuk struktur halaman, CSS untuk gaya dan tata letak, serta JavaScript untuk membuat halaman menjadi interaktif dan dinamis. Mereka bertanggung jawab memastikan aplikasi tampil menarik, mudah digunakan, responsif pada berbagai ukuran layar (desktop, tablet, dan ponsel), cepat dimuat, dan memberikan pengalaman pengguna yang menyenangkan. Front-end berkomunikasi dengan back-end untuk mengirim permintaan data dan menampilkan hasilnya kepada pengguna, menjembatani antara pengguna dan sistem yang kompleks di balik layar.',
                ],
                [
                    'nama' => 'Fullstack',
                    'deksripsi' => 'Full-stack adalah pendekatan pengembangan aplikasi di mana seorang pengembang menguasai dan bekerja pada kedua sisi pengembangan: front-end dan back-end. Pengembang full-stack memiliki kemampuan komprehensif untuk menangani seluruh lapisan aplikasi, mulai dari antarmuka pengguna yang interaktif dan menarik secara visual, hingga logika bisnis, manajemen database, dan infrastruktur server di belakang layar. Mereka menguasai berbagai teknologi seperti HTML, CSS, dan JavaScript untuk front-end, serta bahasa pemrograman seperti Python, Java, PHP, atau Node.js untuk back-end, ditambah sistem manajemen basis data. Keunggulan pengembang full-stack adalah kemampuannya melihat gambaran besar aplikasi, memahami bagaimana semua komponen berinteraksi, dan dapat menyelesaikan masalah dari ujung ke ujung tanpa harus bergantung pada spesialis lain. Meskipun tidak selalu mendalami setiap teknologi secara ekstrem seperti spesialis, pengembang full-stack menawarkan fleksibilitas dan efisiensi yang signifikan dalam proses pengembangan aplikasi, terutama untuk startup atau tim kecil.',

                ],
            ]
        );
    }
}
