<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Film_platform;
use App\Models\Platforme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $film = Film::all();
        return view("listFilm", ["films" => $film]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Gate::allows('is_admin')) {
            abort(403);
        }
        $pl = Platforme::all();
        return view("createFilm",["pl"=>$pl]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        if (!Gate::allows('is_admin')) {
            abort(403);
        }
        $pl = Platforme::all();
        $validated = $request->validate([
            "title" => "required|string",
            "synopsis" => "string|nullable",
            "releaseYear" => "required|integer|min:1800",
            "platformes" => "integer|nullable"
        ]);
        Log::info($request->all());
        $film = Film::create([
            "title" => $request->input("title"),
            "synopsis" => $request->input("synopsis"),
            "releaseYear" => $request->input("releaseYear"),
        ]);
        $last = Film::latest()->first();
        echo($request->input("platformes"));
        if ($request->input("platformes") != null) {
            $rela = Film_platform::create([
                "platforme_id" => $request->input("platformes"),
                "film_id" => $last->id
            ]); # code...
        }

        return redirect("/films");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = Film::with("platforms")->find((int)$id);
        Log::info($film);
        return view("filmShow", ["film" => $film]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        //
    }
}
