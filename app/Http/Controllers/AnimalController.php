<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::get();
        return view('index', ['animals' => $animals]);
    }

    public function create()
    {
        return view('animal-create');
    }

    public function store(Request $request)
    {
        $animal = new Animal([
            'spiece' => $request->spiece,
            'name' => $request->name,
            'age' => $request->age,
            'description' => $request->description
        ]);
        $animal->save();
        return redirect()->route('home');
    }

    public function delete(Request $animal)
    {
        Animal::where('id', $animal->id)->first()->delete();
        return redirect()->route('home');
    }

    public function info($animal)
    {
        $animal = Animal::find($animal);
        return view('info', ['animals' => $animal]);
    }
}
