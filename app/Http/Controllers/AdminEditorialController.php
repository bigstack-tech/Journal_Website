<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editorial;

class AdminEditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Editorial::all();
        return view('admin.editorials', compact('data'));
    }
    public function AdminCreateEditorialController() {
        return view('admin.create_editorial');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'institute'=>'required',
            'country'=>'required'
        ]);
        $data = new Editorial;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone =$request->phone;
        $data->institute=$request->institute;
        $data->country=$request->country;
        $data->save();
        return redirect('editorials');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $data = Editorial::find($id);
        $data->delete();
        return redirect()->back();
    }
}
