<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blmlunas;
use App\Models\Dafken;

class BlmlunasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blmlunas = Blmlunas::all();
        return view('blmlunas.index-blmlunas',compact('blmlunas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dafken = Dafken::all();
        return view('blmlunas.create-blmlunas', compact('dafken'));
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

        $blmlunas = new Blmlunas;
        $blmlunas->unit_kerja = $request->unit_kerja;
        $blmlunas->dafken_id = $request->dafken_id;
        $blmlunas->pembayaran_pajak = $request->pembayaran_pajak;
        $blmlunas->pemegang = $request->pemegang;
        $blmlunas->tgl_bayar = $request->tgl_bayar;
        $blmlunas->keterangan = $request->keterangan;
        $blmlunas->foto_stnk = $fileName;
        $blmlunas->save();

        return redirect ('index-blmlunas')->with('toast_success', 'data berhasil Tersimpan!');
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
        $blmlunas = Blmlunas::findorfail($id);
        return view('blmlunas.edit-blmlunas',compact('blmlunas','dafken'));
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

        $blmlunas = Blmlunas::findorfail($id);
        $blmlunas->unit_kerja = $request->unit_kerja;
        $blmlunas->dafken_id = $request->dafken_id;
        $blmlunas->pembayaran_pajak = $request->pembayaran_pajak;
        $blmlunas->pemegang = $request->pemegang;
        $blmlunas->tgl_bayar = $request->tgl_bayar;
        $blmlunas->keterangan = $request->keterangan;
        $blmlunas->foto_stnk = $fileName;
        $blmlunas->update();

        return redirect ('index-blmlunas')->with('toast_success', 'Data Berhasil Diubah!');
        // dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blmlunas = Blmlunas::findorfail($id);
        $blmlunas->delete();

        return back()->with('info', 'Data Berhasil Dihapus!');
    }

    
}
