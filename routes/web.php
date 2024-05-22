<?php

use Illuminate\Support\Facades\Route;
use App\Models\Sport;
use App\Models\MatchEvent;
use App\Http\Controllers\SportController;
use App\Http\Controllers\MatchController;


//Home
Route::get('/', function () {
    return view('home');
});


//Show all sports
Route::get('/sports', function () {
    return view('sports.index', [
        "sports" => Sport:: all()]);
});


//Show all matches
Route::get('/sports/matches', function () {
    return view('sports.matches.matches', [
        "matches" => MatchEvent:: all()]);
});

//Add a new match
Route::post('/sports/matches', function () {

    request()->validate([
        "match_name"=>["required", "min:3"],
        "match_start_date"=>["required"],
        "score"=>["required"]
    ]);
    

MatchEvent:: create([
    "sport" => request("sport"),
"match_name" => request("match_name"),
"match_start_date" => request("match_start_date"),
"score" => request("score") ]);

return redirect("/sports/matches");
    
});

//Form of a new match to add
Route::get('/sports/matches/add', [SportController::class, "show"]);

//Edit a match
Route::get('/sports/matches/{id}/edit', [MatchController::class, 'edit'])->name('matches.edit');

//Showing a match
Route::get('/sports/matches/{match}', function (MatchEvent $match) {
    return view('sports.matches.match', ['match' => $match]);
});

//Update a match
Route::patch('/sports/matches/{match}', function (MatchEvent $match) {

    request()->validate([
        "match_name"=>["required", "min:3"],
        "match_start_date"=>["required"],
        "score"=>["required"]
    ]);

    $match->update([
        "sport" => request("sport"),
        "match_name"=>request("match_name"),
        "match_start_date"=>request("match_start_date"),
        "score"=>request("score")
    ]);
    
    return redirect('/sports/matches/' .  $match->id);
});

//Delete a match
Route::delete('/sports/matches/{match}', function (MatchEvent $match) {
    $match->delete();
    
    return redirect('/sports/matches');
});

//Get a sport by id
Route::get('/sports/{sport}', function (Sport $sport) {

    return view('sports.show', ["sport" => $sport]);
});
