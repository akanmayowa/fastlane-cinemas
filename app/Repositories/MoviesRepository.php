<?php
namespace App\Repositories;


use App\Models\Movies;

class MoviesRepository implements IMoviesRepository
{
    protected $model = null;

    // Get all instances of model
    public function all()
    {
        $movies = Movies::with('cinemas')->get();
        return $movies;
    }

    // create a new record in the database
    public function create(array $data)
    {
        $movies = new Movies();
        $movies->cinema_id = $data['cinema_id'];
        $movies->name = $data['name'];
        $movies->rating = $data['rating'];
        $movies->genre = $data['genre'];
        $movies->showtime = $data['showtime'];
        return $movies->save();
    }

    // update record in the database
    public function update(array $data, $id)
    {
        $movies = Movies::findOrFail($id);
        $movies->cinema_id = $data['cinema_id'];
        $movies->name = $data['name'];
        $movies->rating = $data['rating'];
        $movies->genre = $data['genre'];
        $movies->showtime = $data['showtime'];
        return $movies->update();
    }

    // remove record from the database
    public function delete($id)
    {
        return Movies::destroy($id);
    }

    // show the record with the given id
    public function show($id)
    {
        return Movies::findOrFail($id);
    }



}
?>
