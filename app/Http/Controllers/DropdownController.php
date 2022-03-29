<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{State,City};

class DropdownController extends Controller
{
    public function index()
    {
        $data['states'] = State::get(["name", "id"]);
        return view('welcome', $data);
    }
  
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)->get(["name", "id"]);
        return response()->json($data);
    }
}
