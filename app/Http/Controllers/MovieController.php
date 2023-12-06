<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\MoviePlay;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index(Request $request)
    {
        $movies = Movie::with('director', 'category')->get();
        return response()->json($movies);
    }

    public function viewIndex(Request $request)
    {
        $movies = Movie::with('director', 'category')->get();
        return view('movies', ["movies"=>$movies]);
    }

    public function indexPost(Request $request)
    {
        $movies = Movie::with('director', 'category')->get();
        return response()->json($movies);
    }

    public function show($id)
    {
        $movie = Movie::with('director', 'category')->find($id);

        if (!$movie) {
            return response()->json(['message' => 'Pelicula no encontrada'], 404);
        }

        return response()->json($movie);
    }

    public function viewShow(string $id)
    {
        $movie = Movie::with('director', 'category')->find($id);

        if (!$movie) {
            return response()->json(['message' => 'Pelicula no encontrada'], 404);
        }
        return view('detail', ["data"=>$movie]);
        // return response()->json($movie);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'duration' => 'required|integer',
            'synopsis' => 'required',
            'cover_path' => 'required',
            'director_id' => 'required|exists:directors,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        $movie = Movie::create($request->all());
        return response()->json($movie, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'duration' => 'required|integer',
            'synopsis' => 'required',
            'cover_path' => 'required',
            'director_id' => 'required|exists:directors,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['message' => 'Pelicula no encontrada'], 404);
        }

        $movie->update($request->all());
        return response()->json($movie, 200);
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['message' => 'Pelicula no encontrada'], 404);
        }

        $movie->delete();
        return response()->json(null, 204);
    }

    public function getPlays()
    {
        $movies = MoviePlay::with('movie', 'room')->get();
        return response()->json($movies);
    }

    public function viewPlays(Request $request)
    {
        $movies = MoviePlay::with('movie', 'room')->get();
        return view('plays', ["data"=>$movies]);
    }

    public function viewSeats(Request $request)
    {
        return view('seats');
    }

    public function uploadCover(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imageName = $request->input('image_name') . '.' . $image->getClientOriginalExtension();
            // $imagePath = 'public/images/';
            $imagePath = 'public\\images\\';

            $image->storeAs($imagePath, $imageName);

            return response()->json(['message' => 'Imagen subida exitosamente', 'path' => $imagePath . $imageName]);
        }

        return response()->json(['message' => 'No se proporcionó ninguna imagen'], 400);
    }
}
