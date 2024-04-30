<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Image;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->BelongsTo(User::class, 'user_id');
    }

    public function image(){
        return $this->BelongsTo(Image::class, 'image_id');
    }
}
