<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dafken;
use App\Models\blmbayar;
use App\Models\bayarpajak;
use App\Models\suratkuasa;
use App\Models\perbaruanplat;
use DB;

class HomeController extends Controller
{
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
        // $statsRoda2 = DB::table('bayarpajak')
                        // ->select(DB::raw('MONTHNAME(bayarpajak.tgl_bayar) as bulan'),'bayarpajak.tgl_bayar')
                        // ->leftJoin('dafken','bayarpajak.dafken_id','=','dafken.id')
                        // ->where('dafken.jenis_kendaraan','=','Roda 2')
                        // ->groupBy(DB::raw('YEAR(bayarpajak.tgl_bayar)'))
                        // ->groupBy(DB::raw('Month(bayarpajak.tgl_bayar)'))
                        // ->get();

                        // DB::table('bayarpajak')
                        // ->select(DB::raw("'MONTHNAME'('bayarpajak.tgl_bayar') as bulan"), 'bayarpajak.tgl_bayar', DB::raw('COUNT(bayarpajak.id) as total'))
                        // ->leftJoin('dafken','bayarpajak.dafken_id','=','dafken.id')
                        // ->where('dafken.jenis_kendaraan','=','Roda 2')
                        // ->groupBy(DB::raw('YEAR(bayarpajak.tgl_bayar)'))
                        // ->groupBy(DB::raw('Month(bayarpajak.tgl_bayar)'))                        
                        // ->get();
        // dd($statsRoda2);
    }
}