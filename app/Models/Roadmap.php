<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roadmap extends Model
{
    protected $table = 'roadmap';

    protected $fillable = [
        'category_id',
    ];
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function nodes()
    {
        return $this->hasMany(Node::class);
    }

    public function connections()
    {
        return $this->hasMany(RoadmapConnection::class);
    }
}
