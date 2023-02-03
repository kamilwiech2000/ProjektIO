<?php

namespace App\Http\Controllers;

use App\Http\Requests\FishesCreate;
use App\Http\Requests\FishesUpdate;
use App\Models\Fish;
use Illuminate\Http\Request;

class FishesController extends Controller
{
    public function index()
    {
        $fish = Fish::all();
        return view('fishes.index', ['fishes' => $fish]);

    }

    public function create()
    {
        return view('fishes.create');
    }

    public function store(FishesCreate $request)
    {
        Fish::create([
            'name' => $request->name,
            'weight' => $request->weight,
            'length' => $request->length,
            'description' => $request->description,
        ]);

        return redirect()->route('fishes.index');
    }

    public function destroy(Fish $fish)
    {

            $fish->delete();
            return redirect()->route('fishes.index');

    }

    public function edit(Fish $fish)
    {
        return view('fishes.edit', ['fish' => $fish]);
    }

    public function update(FishesUpdate $request, Fish $fish)
    {
        $fish->name = $request->input('name');
        $fish->weight = $request->input('weight');
        $fish->length = $request ->input('length');
        $fish->description = $request  ->input('description');
        $fish->save();

        return redirect()->route('fishes.index');
    }

}
