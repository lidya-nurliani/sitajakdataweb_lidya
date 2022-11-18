<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perbaruanplat;
use App\Models\Dafken;

class PerbaruanplatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perbaruanplat = Perbaruanplat::paginate(10);
        return view('perbaruanplat.index-perbaruanplat',compact('perbaruanplat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dafken = Dafken::all();
        return view('perbaruanplat.create-perbaruanplat', compact('dafken'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perbaruanplat = new Perbaruanplat;
        $perbaruanplat->dafken_id = $request->dafken_id;
        $perbaruanplat->pergantian_plat = $request->pergantian_plat;
        $perbaruanplat->masa_berganti = $request->masa_berganti;
        $perbaruanplat->status = $request->status;
        
        $perbaruanplat->save();

        return redirect ('index-perbaruanplat')->with('toast_success', 'data berhasil Tersimpan!');

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
        $perbaruanplat = Perbaruanplat::findorfail($id);
        return view('perbaruanplat.edit-perbaruanplat',compact('perbaruanplat','dafken'));
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
        $perbaruanplat = Perbaruanplat::findorfail($id);
        $perbaruanplat->update($request->all());

        return redirect ('index-perbaruanplat')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perbaruanplat = Perbaruanplat::findorfail($id);
        $perbaruanplat->delete();

        return back()->with('info', 'Data Berhasil Dihapus!');
    }

}
