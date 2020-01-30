<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\City;
use App\Delivery_times;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }

    public function addCity(Request $request){
        $city = new City();
        $city->name = $request->name;
        $city->slag = $request->slag;
        $city->save();
    }
    public function addDelivery(Request $request){
        $city = new Delivery_times();
        $city->span = $request->span;
        $city->save();
    }
}
