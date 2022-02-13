<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Osystems;
use Illuminate\Http\Request;

class OsystemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $osystems = DB::table('osystems')
      ->orderBy('id','ASC')
      ->get();

      return view('osystems.index', ['osystems' => $osystems]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('osystems.add');
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
            'name'=> 'required|string|max:255',

        ]);

        DB::table('osystems')->insert([
            'name' => $request->name,
            'version' => $request->version,
        ]);

        return redirect()->route('osystems');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Osystems  $osystems
     * @return \Illuminate\Http\Response
     */
    public function show(Osystems $osystems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Osystems  $osystems
     * @return \Illuminate\Http\Response
     */
    public function edit(Osystems $osystems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Osystems  $osystems
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Osystems $osystems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Osystems  $osystems
     * @return \Illuminate\Http\Response
     */
    public function destroy(Osystems $osystems)
    {
        //
    }
}
