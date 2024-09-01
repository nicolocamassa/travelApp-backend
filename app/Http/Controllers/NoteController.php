<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function latest()
{
    $note = Note::latest()->first(); 
    if ($note) {
        return response()->json($note);
    }
    return response()->json(null, 404); 
}


    public function index()
    {
        return Note::all(); // Restituisce tutte le note
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $note = Note::create($request->all());

        return response()->json($note, 201); // Restituisce la nota appena creata
    }

    public function show($id)
    {
        return Note::findOrFail($id); // Restituisce la nota specificata
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'content' => 'required|string',
    ]);

    $note = Note::findOrFail($id);
    $note->content = $request->input('content');
    $note->save();

    return response()->json($note);
}


    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return response()->json(null, 204); // Restituisce un codice di stato 204 (No Content)
    }
}
