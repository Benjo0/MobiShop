<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Selling;
use Illuminate\Http\Request;

class SellingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // Najprodavaniji mobiteli
        $most_common_phones = DB::table('phones')
        ->select('phones.*', DB::raw('count(*) as brojac'))
        ->groupBy('phones.id')
        ->join('sellings','phones.id','=','sellings.phone')
        ->orderByRaw('COUNT(*) DESC')
        ->get();

        //Ispis mobitela sortiranih po cijeni od najjeftinijeg ka najskupljem
        $most_common_phone_prices = DB::table('phones')
        ->select('phones.*', DB::raw('count(*) as brojac'))
        ->groupBy('phones.id')
        ->join('sellings','phones.id','=','sellings.phone')
        ->orderByRaw('price ASC')
        ->get();

        //Operativni sistemi najprodavanijih mobitela
        $most_common_phones_osystems = DB::table('phones')
        ->select('osystems.*', DB::raw('count(*) as brojac'))
        ->groupBy('osystems.id')
        ->join('sellings', 'phones.id','=','sellings.phone')
        ->join('osystems','phones.osystem','=','osystems.id')
        ->orderByRaw('COUNT(*) DESC')
        ->get();


        //Broj prodanih mobitela u 2022 godini
        $from = "2022-01-01 00:00:00";
        $to = "2022-12-31 23:59:59";
        $number_of_sellings = DB::table ('sellings')
        ->whereBetween('date',[$from,$to])
        ->count();

        //Ispis brenda i modela mobitela koji su prodani u periodu od 1.02.2022 do 8.02.2022 cija je cijena od 2500 do 3000
        $from = "2022-02-01 00:00:00";
        $to = "2022-02-08 23:59:59";
        $price = "2000";
        $priceTo = "3000";

        $phones_sold_prices = DB::table('phones')
        ->select('phones.brand as phone_brand', 'phones.model as phone_model', 'phones.price as phone_price',DB::raw('count(*) as brojac'))
        ->groupBy('phones.id')
        ->join('sellings', 'phones.id','=','sellings.phone')
        ->whereBetween('price',[$price,$priceTo])
        ->whereBetween('sellings.date',[$from, $to])
        ->get();

        $customer_cities = DB::table('customers')
        ->groupBy('customers.id')
        ->join('sellings','customers.id','=','sellings.customer')
        ->join('phones','sellings.phone','=','phones.id')
        ->select('customers.*','phones.model as phone_model','phones.brand as phone_brand')
        ->whereBetween('sellings.date',[$from, $to])
        ->where('city','=','Bihac')
        ->get();

        // Ispis prodanih mobitela čija je memorija 128 GB 
        $memory = "128";
        $phones_sold_memory = DB::table('phones')
        ->select('phones.brand as phone_brand', 'phones.model as phone_model',DB::raw('count(*) as brojac'))
        ->groupBy('phones.id')
        ->join('sellings', 'phones.id','=','sellings.phone')
        ->where('memory',$memory)
        ->get();

        //Ispis mobitela koji su prodani koji su brenda Samsung a polovni su
        $phones_brands = DB::table('phones')
        ->select('phones.model as phone_model',DB::raw('count(*) as brojac'))
        ->groupBy('phones.id')
        ->join('sellings', 'phones.id','=','sellings.phone')
        ->where('brand','Samsung')
        ->where('condition','Polovno')
        ->get();

        //Ispis mobitela brenda Apple koji su prodani u periodu od 4.02.2022 do 8.02.2022 a čiji je kupac iz Cazina
        $from = "2022-02-04 00:00:00";
        $to = "2022-02-09 23:59:59";

        $phones_brand_date = DB::table('customers')
        ->join('sellings','customers.id','=','sellings.customer')
        ->join('phones','sellings.phone','=','phones.id')
        ->select('customers.*','phones.model as phone_model')
        ->where('phones.brand','Apple')
        ->whereBetween('sellings.date',[$from,$to])
        ->where('city','Cazin')
        ->get();


        $phones_screens = DB::table('customers')
        ->join('sellings','customers.id','=','sellings.customer')
        ->join('phones','sellings.phone','=','phones.id')
        ->join('osystems','phones.osystem','=','osystems.id')
        ->select('customers.*','phones.model as phone_model','phones.brand as phone_brand','osystems.version as osystem_version')
        ->where('phones.screen','6.2')
        ->where('osystems.name','Android')
        ->where('phones.price','<=',1500)
        ->where('city','Bihac')
        ->get();

       
        return view('sellings.index', ['most_common_phones' => $most_common_phones,
                                        'most_common_phone_prices' => $most_common_phone_prices,
                                        'most_common_phones_osystems' => $most_common_phones_osystems,
                                        'number_of_sellings' => $number_of_sellings,
                                        'phones_sold_prices' => $phones_sold_prices,
                                        'customer_cities' => $customer_cities,
                                        'phones_sold_memory' => $phones_sold_memory,
                                        'phones_brands' => $phones_brands,
                                        'phones_brand_date' => $phones_brand_date,
                                        'phones_screens'=>$phones_screens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Selling  $selling
     * @return \Illuminate\Http\Response
     */
    public function show(Selling $selling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Selling  $selling
     * @return \Illuminate\Http\Response
     */
    public function edit(Selling $selling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Selling  $selling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Selling $selling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Selling  $selling
     * @return \Illuminate\Http\Response
     */
    public function destroy(Selling $selling)
    {
        //
    }
}
