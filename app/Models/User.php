<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Product;
use App\Models\Video;
use App\Models\Comment;
use App\Models\ReplyComment;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'profile', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function product()
    {
        return $this->HasMany(Product::class);
    }

    public function video()
    {
        return $this->HasMany(Video::class);
    }

    public function comment()
    {
        return $this->HasMany(Comment::class);
    }

    public function replycomment()
    {
        return $this->HasMany(ReplyComment::class);
    }

    public static function getUserById($id)
    {
        $user = User::where('id', $id)->first();
        if ($user)
            return $user->id = $id ? $user->name : null;
        return "Null";
    }

    public static function disabled($id)
    {
        if (Auth::user()->id == $id)
            return "enable";

        return "disabled";
    }
}
