<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $phones = DB::table('phones')
      ->get();

      $osystems = DB::table('osystems')
      ->get();

      return view('phones.index', ['phones' => $phones, 'osystems' => $osystems]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $osystems = DB::table('osystems')
        ->get();
        return view('phones.add', ['osystems' => $osystems]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
        ]);

       
        DB::table('phones')->insert([
            'brand' => $request->brand,
            'model' => $request->model,
            'price' => $request->price,
            'screen' => $request->screen,
            'memory' => $request->memory,
            'osystem' => $request->osystem,
            'condition' => $request->condition,
            'description' => $request->description,
        ]);

        
        return redirect()->route('phones');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function show(Phone $phone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;

        $phones = DB::table('phones')
        ->where('id', $id)
        ->get();

        $osystems = DB::table('osystems')
        ->get();

        return view('phones.edit', ['phones' => $phones, 'osystems'=> $osystems]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;

    
        $update_query = DB::table('phones')
        ->where('id', $id)
        ->update([
            'brand' => $request->brand,
            'model' => $request -> model,
            'price' => $request -> price,
            'screen' => $request -> screen,
            'memory' => $request -> memory,
            'osystem' => $request ->osystem,
            'condition' => $request->condition,
            'description'=> $request->description,
        ]);

        return redirect() -> route('phones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phone $phone)
    {
        //
    }

    public function delete(Request $request){
        $id=$request->id;

        Phone::destroy($id);
        
        return redirect()->route('phones');
    }
}
