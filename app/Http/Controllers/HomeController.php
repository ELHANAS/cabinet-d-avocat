<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $nmbrClientActive = count(client::where(["active" => 1])->get()) ;
        return view('home',["NClients"=>$nmbrClientActive]);
    }
}
