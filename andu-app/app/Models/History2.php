<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'buffer_timeline_id',
        'month',
        'event',
    ];

    public function bufferTimeline()
    {
        return $this->belongsTo(BufferTimeline::class);
    }
}
