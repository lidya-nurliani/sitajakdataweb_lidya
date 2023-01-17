<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bayarselanjutnya;
use App\Models\Dafken;

class BayarselanjutnyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bayarselanjutnya = Bayarselanjutnya::all();
        return view('bayarselanjutnya.index-bayarselanjutnya',compact('bayarselanjutnya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dafken = Dafken::all();
        return view('bayarselanjutnya.create-bayarselanjutnya', compact('dafken'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fileName = time().'.'.$request->foto_stnk->extension();  
        $request->foto_stnk->move(public_path('foto_stnk'), $fileName);

        $bayarselanjutnya = new Bayarselanjutnya;
        $bayarselanjutnya->unit_kerja = $request->unit_kerja;
        $bayarselanjutnya->dafken_id = $request->dafken_id;
        $bayarselanjutnya->tgl_bayar_selanjutnya = $request->tgl_bayar_selanjutnya;
        $bayarselanjutnya->pemegang = $request->pemegang;
        $bayarselanjutnya->keterangan = $request->keterangan;
        $bayarselanjutnya->foto_stnk = $fileName;
        $bayarselanjutnya->save();

        return redirect ('index-bayarselanjutnya')->with('toast_success', 'data berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dafken = Dafken::all();
        $bayarselanjutnya = Bayarselanjutnya::findorfail($id);
        return view('bayarselanjutnya.edit-bayarselanjutnya',compact('bayarselanjutnya','dafken'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $fileName = time().'.'.$request->foto_stnk->extension();  
        $request->foto_stnk->move(public_path('foto_stnk'), $fileName);

        $bayarselanjutnya = Bayarselanjutnya::findorfail($id);
        $bayarselanjutnya->unit_kerja = $request->unit_kerja;
        $bayarselanjutnya->dafken_id = $request->dafken_id;
        $bayarselanjutnya->tgl_bayar_selanjutnya = $request->tgl_bayar_selanjutnya;
        $bayarselanjutnya->pemegang = $request->pemegang;
        $bayarselanjutnya->keterangan = $request->keterangan;
        $bayarselanjutnya->foto_stnk = $fileName;
        $bayarselanjutnya->update();
        

        return redirect ('index-bayarselanjutnya')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bayarselanjutnya = Bayarselanjutnya::findorfail($id);
        $bayarselanjutnya->delete();

        return back()->with('info', 'Data Berhasil Dihapus!');
    }
   
}
