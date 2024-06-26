<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\User;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function comments(){
        return $this->hasMany(Comment::class)->orderBy('id','DESC');  
    }

    public function user(){
        return $this->BelongsTo(User::class, 'user_id');
    }
}
