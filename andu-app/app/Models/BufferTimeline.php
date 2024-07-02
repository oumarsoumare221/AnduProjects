<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BufferTimeline extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
    ];

    public function histories()
    {
        return $this->hasMany(History::class, 'buffer_timeline_id');
    }
}
