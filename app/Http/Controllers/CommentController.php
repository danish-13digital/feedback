<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'comment' => 'required|string|max:255',
        ]);

        try{
            Comment::create([
                'comment' => $request->comment,
                'feedback_id' => $request->feedback_id,
                'user_id' => auth()->id(),
            ]);
            return redirect()->route('feedback.show', $request->feedback_id);
        }catch(error){
            return error;
        }
    }
}