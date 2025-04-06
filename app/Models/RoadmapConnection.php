<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadmapConnection extends Model
{
    use HasFactory;

    protected $table = 'roadmap_connections';

    protected $fillable = [
        'source',
        'target',
        'roadmap_id',
    ];
}
