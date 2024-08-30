<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\Destination;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index()
    {
        $travels = Travel::all();
        return response()->json($travels);
    }

    public function show($id)
    {
        $travel = Travel::with('destinations')->findOrFail($id);
        return response()->json($travel);
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:100',
        'description' => 'string',
        'start_date' => 'required|date',
        'end_date' => 'required|date',
        'image_url' => 'string|max:255',
        'destinations' => 'required|array',
        'destinations.*.destination_name' => 'required|string|max:100',
        'destinations.*.description' => 'string',
        'destinations.*.vist_date' => 'required|date',
        'destinations.*.image_url' => 'string|max:255',
        'destinations.*.food' => 'string',
        'destinations.*.notes' => 'string',
        'destinations.*.latitude' => 'required|numeric',
        'destinations.*.longitude' => 'required|numeric',
    ]);

    $travel = Travel::create($request->only(['title', 'description', 'start_date', 'end_date', 'image_url']));

    foreach ($request->input('destinations') as $destinationData) {
        $destinationData['travel_id'] = $travel->id;
    }

    return response()->json($travel, 201);
}


    public function update(Request $request, $id)
    {
        $travel = Travel::findOrFail($id);
        $travel->update($request->all());
        return response()->json($travel);
    }

    public function destroy($id)
    {
        Travel::destroy($id);
        return response()->json(null, 204);
    }
}
