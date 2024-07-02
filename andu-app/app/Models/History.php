<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'history'; // Définir le nom de la table

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
