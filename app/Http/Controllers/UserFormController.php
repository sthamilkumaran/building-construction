<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserForm;

class UserFormController extends Controller
{
    public $userForms;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userForms = UserForm::all();
        return view("user", compact('userForms'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type'=>'required',
            'floors'=>'required',
            'area'=>'required',
            'materials'=>'required',
            'labor'=>'required'
        ]);

        $userForms = new UserForm([
            'type' => $request->get('type'),
            'floors' => $request->get('floors'),
            'area' => $request->get('area'),
            'materials' => $request->get('materials'),
            'labor' => $request->get('labor'),
            'additional' => $request->get('additional')
        ]);
        $userForms->save();
        return redirect('/contacts')->with('success', 'Contact saved!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $userForm = UserForm::findOrFail($id);
        $Rfloar = $userForm->floors * 900;
        $Rarea = $userForm->area * 3000;
        $Rmaterials = $userForm->materials * 2500;
        $Rlabor = $userForm->labor * 2000;
        $Radditional = $userForm->additional * 50000;
        $total = $Rfloar + $Rarea + $Rmaterials + $Rlabor + $Radditional;
        return view('quotation',compact('userForm','Rfloar','Rmaterials','Rarea','Rlabor','Radditional','total'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
