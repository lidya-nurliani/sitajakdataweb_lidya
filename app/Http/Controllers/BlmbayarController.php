<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blmbayar;
use App\Models\Dafken;

class BlmbayarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blmbayar = Blmbayar::all();
        return view('blmbayar.index-blmbayar',compact('blmbayar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dafken = Dafken::all();
        return view('blmbayar.create-blmbayar', compact('dafken'));
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

        $blmbayar = new Blmbayar;
        $blmbayar->unit_kerja = $request->unit_kerja;
        $blmbayar->dafken_id = $request->dafken_id;
        $blmbayar->tgl_bayar_selanjutnya = $request->tgl_bayar_selanjutnya;
        $blmbayar->pemegang = $request->pemegang;
        $blmbayar->keterangan = $request->keterangan;
        $blmbayar->foto_stnk = $fileName;
        $blmbayar->save();

        return redirect ('index-blmbayar')->with('toast_success', 'data berhasil Tersimpan!');
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
        $blmbayar = Blmbayar::findorfail($id);
        return view('blmbayar.edit-blmbayar',compact('blmbayar','dafken'));
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

        $blmbayar = Blmbayar::findorfail($id);
        $blmbayar->unit_kerja = $request->unit_kerja;
        $blmbayar->dafken_id = $request->dafken_id;
        $blmbayar->tgl_bayar_selanjutnya = $request->tgl_bayar_selanjutnya;
        $blmbayar->pemegang = $request->pemegang;
        $blmbayar->keterangan = $request->keterangan;
        $blmbayar->foto_stnk = $fileName;
        $blmbayar->update();
        

        return redirect ('index-blmbayar')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blmbayar = Blmbayar::findorfail($id);
        $blmbayar->delete();

        return back()->with('info', 'Data Berhasil Dihapus!');
    }
   
}
