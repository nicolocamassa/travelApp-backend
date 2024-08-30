<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return response()->json($destinations);
    }

    public function show($id)
    {
        $destination = Destination::findOrFail($id);
        return response()->json($destination);
    }

    public function store(Request $request)
    {
        $destination = Destination::create($request->all());
        return response()->json($destination, 201);
    }

    public function update(Request $request, $id)
    {
        $destination = Destination::findOrFail($id);
        $destination->update($request->all());
        return response()->json($destination);
    }

    public function destroy($id)
    {
        Destination::destroy($id);
        return response()->json(null, 204);
    }
}
