<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cinemas;

class CinemasController extends Controller
{

    public function index()
    {
      $cinemas = Cinemas::get();
      return response()->json($cinemas);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
