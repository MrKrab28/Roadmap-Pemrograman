<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCompletion extends Model
{
    use HasFactory;
    protected $table = 'course_completions';  // pastikan nama tabel sesuai

    protected $fillable = [
        'user_id',
        'course_id',
        'materi_id',
        'selesai',
        'jawabanUser',
    ];

    // Relasi ke Materi
    public function materi()
    {
        return $this->belongsTo(Materi::class);
    }

    // Relasi ke Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
