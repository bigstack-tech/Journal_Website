<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Years;
use Illuminate\Http\Request;
use App\Models\Contact_Admin;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // $setYear = new Years;

        // $today = Carbon::now();
        // $current_Year = $today->year;

        // $db_year = DB::table('years')->pluck('year');

        // $yearData = array('2021','2022','2022', '2024');


        //     if(!in_array($current_Year, $yearData)) {
        //             $setYear->year = $today->year;
        //             $setYear->save();
        //     }

        return view('home.index');
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
            'message'=>'required'
        ]);
        $data = new Contact_Admin;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone =$request->phone;
        $data->message=$request->message;
        $data->save();

        return redirect()->back();
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
        //
    }
}
