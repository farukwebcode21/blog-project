<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class CommentController extends Controller {
    public function store(Request $request) {
        $comment = new BlogPost();
        $comment->content = $request->input('content');
        // Set other comment attributes if necessary

        $comment->save();
        return response()->json($comment);
    }
}
