<?php

namespace App\Http\Controllers;

use App\Http\Requests\FisheryCreate;
use App\Http\Requests\FisheryUpdate;
use App\Models\Fish;
use App\Models\Fishery;
use Illuminate\Http\Request;

class FisheryController extends Controller
{
    public function index()
    {
        $fisheries = Fishery::all();
        return view('fisheries.index', ['fisheries' => $fisheries]);

    }

    public function create()
    {
        $fish = Fish::all();
        return view('fisheries.create', ['fishes' => $fish]);

    }

    public function store(FisheryCreate $request)
    {
        Fishery::create([
            'voivodeship' => $request->voivodeship,
            'fishery' => $request->fishery,
            'fish_id' => $request->fish_id,
            'creationdate' => $request->creationdate,
        ]);

        return redirect()->route('fisheries.index');
    }


    public function destroy(Fishery $fishery)
    {

            $fishery->delete();
            return redirect()->route('fisheries.index');

    }

    public function edit(Fishery $fishery)
    {
        $fish = Fish::all();
        return view('fisheries.edit', ['fishery' => $fishery,'fishes' => $fish]);
    }

    public function update(FisheryUpdate $request, Fishery $fishery)
    {
        $fishery->voivodeship = $request->input('voivodeship');
        $fishery->fishery = $request->input('fishery');
        $fishery->fish_id = $request ->input('fish_id');
        $fishery->creationdate = $request  ->input('creationdate');
        $fishery->save();

        return redirect()->route('fisheries.index');
    }
}
