<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks = Feedback::with('user')->paginate('3');
        return view('feedback.index', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('feedback.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        try{
            Feedback::create([
                'title' => $request->title,
                'description' => $request->description,
                'category' => $request->category,
                'user_id' => auth()->id(),
            ]);
            return redirect()->route('feedback.index');
        }catch(error){
            return error;
        }
    }


    public function show(Feedback $feedback){

        $comments = $feedback->comment()->get();
        return view('feedback.show', compact('feedback', 'comments'));

    }

}
