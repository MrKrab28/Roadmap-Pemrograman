<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode';

    protected $fillable = [
        'kode',
        'label',
        'roadmap_id'
    ];
    public $incrementing = false;

    
}
