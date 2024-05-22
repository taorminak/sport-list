<?php

namespace App\Http\Controllers;

use App\Models\MatchEvent;
use App\Models\Sport;

use Illuminate\View\View;

class SportController extends Controller
{
    public function show()
    {
        $matches = MatchEvent::all();
        $sports = Sport::all();

        return view('sports.matches.add', ['sports' => $sports]);
    }
};
