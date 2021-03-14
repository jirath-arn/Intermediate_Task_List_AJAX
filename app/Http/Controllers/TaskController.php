<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Response;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $user = Auth::user();
    	return view('home', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|max:255',
        ]);

        // Create obj task
        $task = new Task();
    	$task->description = $request->description;
    	$task->user_id = Auth::id();
    	$task->save();

        return Response::json($task);
    }
}
