<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use App\Models\Fishery;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $fish = Fish::all();
        $fishery = Fishery::all();
        return view('home', ['fish' => $fish,'fishery' => $fishery]);
    }
}
