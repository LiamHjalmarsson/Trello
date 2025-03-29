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
            'boards' => Board::all()
        ]);
    }
}
