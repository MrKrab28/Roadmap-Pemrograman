<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quis extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'quis';


    public function materi()
    {
        return $this->belongsTo(Materi::class, 'materi_id');
    }

    public function jawaban()
    {
        return $this->hasMany(Jawaban::class, 'quis_id');
    }

}
