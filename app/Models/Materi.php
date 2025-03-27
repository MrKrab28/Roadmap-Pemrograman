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

    protected $guarded = ['id'];
     protected $richTextAttributes = [
        // 'content',
     ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
