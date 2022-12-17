<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bayarpajak;
use App\Models\Dafken;

class BayarpajakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bayarpajak = Bayarpajak::all();
        return view('bayarpajak.index-bayarpajak',compact('bayarpajak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dafken = Dafken::all();
        return view('bayarpajak.create-bayarpajak', compact('dafken'));
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

        $bayarpajak = new Bayarpajak;
        $bayarpajak->unit_kerja = $request->unit_kerja;
        $bayarpajak->dafken_id = $request->dafken_id;
        $bayarpajak->pembayaran_pajak = $request->pembayaran_pajak;
        $bayarpajak->pemegang = $request->pemegang;
        $bayarpajak->tgl_bayar = $request->tgl_bayar;
        $bayarpajak->keterangan = $request->keterangan;
        $bayarpajak->foto_stnk = $fileName;
        $bayarpajak->save();

        return redirect ('index-bayarpajak')->with('toast_success', 'data berhasil Tersimpan!');
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
        $bayarpajak = Bayarpajak::findorfail($id);
        return view('bayarpajak.edit-bayarpajak',compact('bayarpajak','dafken'));
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

        $bayarpajak = Bayarpajak::findorfail($id);
        $bayarpajak->unit_kerja = $request->unit_kerja;
        $bayarpajak->dafken_id = $request->dafken_id;
        $bayarpajak->pembayaran_pajak = $request->pembayaran_pajak;
        $bayarpajak->pemegang = $request->pemegang;
        $bayarpajak->tgl_bayar = $request->tgl_bayar;
        $bayarpajak->keterangan = $request->keterangan;
        $bayarpajak->foto_stnk = $fileName;
        $bayarpajak->update();

        return redirect ('index-bayarpajak')->with('toast_success', 'Data Berhasil Diubah!');
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
        $bayarpajak = Bayarpajak::findorfail($id);
        $bayarpajak->delete();

        return back()->with('info', 'Data Berhasil Dihapus!');
    }

    
}
