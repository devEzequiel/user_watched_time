<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchedTime extends Model
{
    use HasFactory;

    protected $table = 'watched_time';

    protected $fillable = [
        'user_id',
        'channel_id',
        'minutes',
        'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function channel()
    {
        return $this->belongsTo(User::class);
    }
}
