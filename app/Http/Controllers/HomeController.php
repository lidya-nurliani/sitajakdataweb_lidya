<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dafken;
use App\Models\blmbayar;
use App\Models\bayarpajak;
use App\Models\suratkuasa;
use App\Models\perbaruanplat;



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
        $dafken = Dafken::count();
        $bayarpajak = Bayarpajak::count();
        $blmbayar = Blmbayar::count();
        $perbaruanplat = Perbaruanplat::count();
        $suratkuasa = Suratkuasa::count();

        return view('home', compact('dafken','bayarpajak','blmbayar','perbaruanplat','suratkuasa'));
    }
}
