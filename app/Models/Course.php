<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'course';

    protected $fillable = [
        'category_id',
        'judul',
        'gambar',
    ];

    /**
     * Get all the materi for the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materi()
    {
        return $this->hasMany(Materi::class, 'course_id');
    }

    public function quis(){
        return $this->hasMany(Quis::class, 'course_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function courseCompletions()
    {
        return $this->hasMany(CourseCompletion::class);
    }
}
