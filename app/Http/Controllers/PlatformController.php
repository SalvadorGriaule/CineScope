<?php

namespace App\Http\Controllers;

use App\Models\Platforme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $film = Platforme::all();
        return view("platformList", ["platform" => $film]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (! Gate::allows('is_admin')) {
            abort(403);
        }
        return view("createPlatform");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (! Gate::allows('is_admin')) {
            abort(403);
        }
        $validated = $request->validate([
            "name" => "required|string",
            "url" => "string",
            "logo" => "string"
        ]);

        $film = Platforme::create([
            "title" => $request->input("name"),
            "synopsis" => $request->input("url"),
            "releaseYear" => $request->input("logo")
        ]);

        return redirect("/listPL");
    }

    /**
     * Display the specified resource.
     */
    public function show(Platforme $platforme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Platforme $platforme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Platforme $platforme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Platforme $platforme)
    {
        //
    }
}
