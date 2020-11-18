<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bug;
use App\Comment;

class CommentController extends Controller
{
public function store(Request $request)
    {
        $comment = new Comment;

        $comment->commentaire = $request->commentaire;

        $comment->user()->associate($request->user());

        $bug = Bug::find($request->bug_id);

        $bug->comments()->save($comment);
         
        return back();
    }

    // public function replyStore(Request $request)
    // {
    //     $reply = new Comment();

    //     $reply->comment = $request->get('comment');

    //     $reply->user()->associate($request->user());

    //     $reply->parent_id = $request->get('comment_id');

    //     $post = Post::find($request->get('post_id'));

    //     $post->comments()->save($reply);

    //     return back();

    // }//
}
