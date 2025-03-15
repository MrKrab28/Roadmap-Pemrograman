<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $guarded = ['id'];



    public function roadmap()
    {
        return $this->hasOne(Roadmap::class, 'category_id');
    }

    public function course()
    {
        return $this->hasMany(Course::class, 'category_id');
    }


}
