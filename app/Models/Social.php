<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Social extends Model
{
    protected $table = 'Socials';

    protected $fillable = [
        'user_id', 'provider_user_id', 'provider',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
