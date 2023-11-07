<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\user_input;

class user_inputController extends Controller
{
    public function user_form(){
        return view("user");
    }

    public function user_data_stor(Request $request){
        $type = $request->input("type");
        $floors = $request->input("floors");
        $area = $request->input("area");
        $materials = $request->input("materials");
        $labor = $request->input("labor");
        $additional = $request->input("additional");

        $user = new user_input;
        $user->type = $type;
        $user->floors = $floors;
        $user->area = $area;
        $user->materials = $materials;
        $user->labor = $labor;
        $user->additional = $additional;

        $user->save();
    }
}
