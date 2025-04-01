<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Tonysm\RichTextLaravel\Models\Traits\HasRichText;

class Materi extends Model
{
    use HasFactory, HasRichText;


    protected $table = 'materi';

    protected $fillable = [
        'judul',
        'content',
        'course_id',
        'urutan',
    ];
     protected $richTextAttributes = [
        // 'content',
     ];

     public function quiz(){
        return $this->hasOne(Quis::class, 'materi_id');
     }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
