<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Http\Requests\Comment\CreateCommentRequest;
use App\Models\Comment;
use App\Models\Image;
use Auth;

class CommentService{

    public function newComment(CreateCommentRequest $request, Image $image){
        Comment::create([
            'user_id' => Auth::user()->id,
            'image_id' => $image->id,
            'content' => $request->content
        ]);
    }

    public function deleteComment(Comment $comment){
        if($comment->image->user_id == Auth::user()->id || $comment->user_id == Auth::user()->id){
            $comment->delete();}
    }
}