<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suratkuasa;
use App\Models\Dafken;

class SuratkuasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suratkuasa = Suratkuasa::paginate(10);
        return view('suratkuasa.index-suratkuasa',compact('suratkuasa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dafken = Dafken::all();
        return view('suratkuasa.create-suratkuasa', compact('dafken'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $suratkuasa = new Suratkuasa;
        $suratkuasa->dafken_id = $request->dafken_id;
       
        $suratkuasa->save();

        return redirect ('index-suratkuasa')->with('toast_success', 'data berhasil Tersimpan!');
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
        $suratkuasa = Suratkuasa::findorfail($id);
        return view('suratkuasa.edit-suratkuasa',compact('suratkuasa','dafken'));
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
        $suratkuasa = Suratkuasa::findorfail($id);
        $suratkuasa->update($request->all());

        return redirect ('index-suratkuasa')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suratkuasa = Suratkuasa::findorfail($id);
        $suratkuasa->delete();

        return back()->with('info', 'Data Berhasil Dihapus!');
    }


}
