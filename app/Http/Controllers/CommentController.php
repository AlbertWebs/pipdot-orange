<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use Session;
use App\Models\SendMails;
use Redirect;

class CommentController extends Controller
{
    
    public function store(Request $request)
    {
        $comment = new Comment;

        $comment->comment = $request->comment;
        $comment->post_id = $request->post_id;
        

        $comment->user()->associate($request->user());

        $post = Blog::find($request->post_id);

        $post->comments()->save($comment);

        SendMails::commentApproval($request->post_id);
        Session::flash('message', "Your Comment has been posted");
        return Redirect::back();
    }

    public function replyStore(Request $request)
    {
        $reply = new Comment();

        $reply->comment = $request->get('comment');
        $reply->post_id = $request->get('post_id');

        $reply->user()->associate($request->user());

        $reply->parent_id = $request->get('comment_id');

        $post = Blog::find($request->get('post_id'));

        $post->comments()->save($reply);

        return back();

    }
}
