<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Inertia\Inertia;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index()
    {
        return Inertia::render('Board/Index', [
            'boards' => Board::with('lists.tasks')->get()
        ]);
    }

    public function show($id)
    {
        $board = Board::with('lists.tasks')->findOrFail($id);
    
        return Inertia::render('Board/Show', [
            'board' => $board
        ]);
    }
}
