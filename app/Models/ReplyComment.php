<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Model\Comment;

class ReplyComment extends Model
{
    protected $table = 'reply_comments';

    protected $fillable = [
        'message', 'user_id', 'comment_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
