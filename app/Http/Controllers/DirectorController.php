<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    //
    public function index()
    {
        return Director::all();
    }

    public function show($id)
    {
        return Director::findOrFail($id);
    }

    public function store(Request $request)
    {
        $director = Director::create($request->all());
        return response()->json($director, 201);
    }

    public function update(Request $request, $id)
    {
        $director = Director::findOrFail($id);
        $director->update($request->all());
        return response()->json($director, 200);
    }

    public function destroy($id)
    {
        Director::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
