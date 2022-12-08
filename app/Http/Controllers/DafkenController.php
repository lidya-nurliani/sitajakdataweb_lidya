<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dafken;

class DafkenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $dafken = Dafken::all();
        return view('dafken.index-dafken',compact('dafken'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dafken.create-dafken');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $fileName = time().'.'.$request->foto_fisik->extension();
        $request->foto_fisik->move(public_path('foto_fisik'), $fileName);

        $dafken = new Dafken;
        $dafken->nama_pemegang = $request->nama_pemegang;
        $dafken->merk_kendaraan = $request->merk_kendaraan;
        $dafken->jenis_kendaraan = $request->jenis_kendaraan;
        $dafken->no_polisi = $request->no_polisi;
        $dafken->no_mesin = $request->no_mesin;
        $dafken->no_rangka = $request->no_rangka;
        $dafken->tahun = $request->tahun;
        $dafken->harga_perolehan = $request->harga_perolehan;
        $dafken->sumber_dana = $request->sumber_dana;
        $dafken->keterangan = $request->keterangan;
        $dafken->foto_fisik = $fileName;
        $dafken->save();

        return redirect('index-dafken');
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
        $dafken = Dafken::findorfail($id);
        return view('dafken.edit-dafken',compact('dafken'));
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

       if(Request()->hasFile('foto_fisik')) {
            $file = Request()->file('foto_fisik');
            $fileName = Request()->foto_fisik.'.'.$request->extension();
            $file->move(public_path('foto_fisik'), $fileName);
       }

        $dafken = Dafken::findorfail($id);
        $dafken->update($request->all());

        return redirect ('index-dafken')->with('toast_success', 'Data Berhasil Diubah!');
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
        $dafken = Dafken::findorfail($id);
        $dafken->delete();

        return back()->with('info', 'Data Berhasil Dihapus!');
    }
 
   
}
