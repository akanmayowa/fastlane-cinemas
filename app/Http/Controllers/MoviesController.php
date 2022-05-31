<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Repositories\MoviesRepository;

class MoviesController extends Controller
{

    public $movies;
    public function __construct(MoviesRepository $movies)
    {
        $this->movies = $movies;
    }


    public function index()
    {
        $movies = $this->movies->all();
         return response()->json($movies);
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        $movies = $request->only(['name','rating', 'cinema_id', 'genre', 'showtime']);
        $this->movies->create($movies);
        return response()->json('Movie created successfully!');
    }


    public function show($id)
    {
        $movies = $this->movies->show($id);
        return response()->json($movies);
    }

    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        $movies = $request->only(['name','rating', 'cinema_id', 'genre', 'showtime']);
        $this->movies->update($movies, $id);
        return response()->json('Movie updated successfully!');
    }


    public function destroy($id)
    {
        $this->movies->delete($id);
        return response()->json('delete operation successful');
    }
}
