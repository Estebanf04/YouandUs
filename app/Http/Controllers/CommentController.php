<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Comment\CreateCommentRequest;
use App\Models\Comment;
use App\Models\Image;
use Auth;
use App\Http\Services\CommentService;

class CommentController extends Controller
{
    public function __construct(protected CommentService $commentService){
        $this->middleware('auth');
    }

    public function saveComment(CreateCommentRequest $request, Image $image){
        $this->commentService->newComment($request, $image);
        return redirect()->route('single', ['image' => $image->id])->with(['message' => 'Tu comentario ha sido añadido']);
    }

    public function destroyComment(Comment $comment){
        $this->commentService->deleteComment($comment);
        return redirect()->route('single', ['image' => $comment->image->id]);
    }
}
