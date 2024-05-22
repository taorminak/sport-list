<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MatchEvent;
use App\Models\Sport;

class MatchController extends Controller
{
    public function edit($id)
    {
        $match = MatchEvent::findOrFail($id);
     
        $sports = Sport::all();

        return view('sports.matches.edit', ['match' => $match, 'sports' => $sports]);
    }
}
