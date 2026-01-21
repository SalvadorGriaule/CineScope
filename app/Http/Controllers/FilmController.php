<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $film = Film::all();
        return view("filmList", ["films" => $film]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Gate::allows('is_admin')) {
            abort(403);
        }
        return view("createFilm");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Gate::allows('is_admin')) {
            abort(403);
        }
        $validated = $request->validate([
            "title" => "required|string",
            "synopsis" => "string",
            "releaseYear" => "required|integer|min:1800"
        ]);

        $film = Film::create([
            "title" => $request->input("title"),
            "synopsis" => $request->input("synopsis"),
            "releaseYear" => $request->input("releaseYear")
        ]);

        return redirect("/listFilm");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = Film::find((int)$id);
        return view("showFilm", ["film" => $film]);
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
