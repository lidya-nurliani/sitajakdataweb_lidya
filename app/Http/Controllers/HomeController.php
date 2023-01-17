<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dafken;
use App\Models\Bayarselanjutnya;
use App\Models\Blmlunas;
use App\Models\Suratkuasa;
use App\Models\Perbaruanplat;
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
        $blmlunas = Blmlunas::count();
        $bayarselanjutnya = Bayarselanjutnya::count();
        $perbaruanplat = Perbaruanplat::count();
        $suratkuasa = Suratkuasa::count();

        $statsRoda2 = DB::table('blmlunas')
                        ->select(DB::raw('MONTHNAME(blmlunas.tgl_bayar) as bulan'),'blmlunas.tgl_bayar', DB::raw('COUNT(blmlunas.id) as total'), DB::raw('YEAR(blmlunas.tgl_bayar)'))
                        ->leftJoin('dafken','blmlunas.dafken_id','=','dafken.id')
                        ->where('dafken.jenis_kendaraan','=','Roda 2')
                        ->groupBy(DB::raw('YEAR(blmlunas.tgl_bayar)'))
                        ->groupBy(DB::raw('Month(blmlunas.tgl_bayar)'))
                        ->get();
        $statsRoda4 = DB::table('blmlunas')
                        ->select(DB::raw('MONTHNAME(blmlunas.tgl_bayar) as bulan'),'blmlunas.tgl_bayar', DB::raw('COUNT(blmlunas.id) as total'), DB::raw('YEAR(blmlunas.tgl_bayar)'))
                        ->leftJoin('dafken','blmlunas.dafken_id','=','dafken.id')
                        ->where('dafken.jenis_kendaraan','=','Roda 4')
                        ->groupBy(DB::raw('YEAR(blmlunas.tgl_bayar)'))
                        ->groupBy(DB::raw('Month(blmlunas.tgl_bayar)'))
                        ->get();
        $jmlR2 = Dafken::where('jenis_kendaraan','Roda 2')->count();
        $jmlR4 = Dafken::where('jenis_kendaraan','Roda 4')->count();
        // DB::table('blmlunas')
        // ->select(DB::raw("'MONTHNAME'('blmlunas.tgl_bayar') as bulan"), 'blmlunas.tgl_bayar', DB::raw('COUNT(blmlunas.id) as total'))
        // ->leftJoin('dafken','blmlunas.dafken_id','=','dafken.id')
        // ->where('dafken.jenis_kendaraan','=','Roda 2')
        // ->groupBy(DB::raw('YEAR(blmlunas.tgl_bayar)'))
        // ->groupBy(DB::raw('Month(blmlunas.tgl_bayar)'))                        
        // ->get();
        // dd($statsRoda2);
        return view('home', compact('dafken','blmlunas','bayarselanjutnya','perbaruanplat','suratkuasa','statsRoda2','statsRoda4','jmlR2','jmlR4'));
    }
}