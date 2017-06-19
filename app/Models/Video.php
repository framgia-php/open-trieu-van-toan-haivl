<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Video extends Model
{
    protected $table = 'videos';

    protected $fillable = [
        'title', 'alias', 'link', 'view', 'source', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
