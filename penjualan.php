<?php

namespace App\Http\Controllers;

use App\ModelKPenjualan;

use Validator;

class penjualan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelPenjualan::all();

        //return view ('kontak', compact('data'));
        return view ('penjualan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('penjualan_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'id_barang' => 'required',
            'nama_barang' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
        ]);

        $data = new ModelPenjualan();
        $data->id_barang = $request->id_barang;
        $data->nama_barang = $request->nama_barang;
        $data->jumlah = $request->jumlah;
        $data->total_harga = $request->total_harga;
        $data->save();
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
        $data = ModelPenjualan::where('id', $id)->get();
        return view('penjualan_edit', compact('data'));
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
        $this->validate($request, [
            'id_barang' => 'required',
            'nama_barang' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
        ]);

        $data = new ModelPenjualan();
        $data->id_barang = $request->id_barang;
        $data->nama_barang = $request->nama_barang;
        $data->jumlah = $request->jumlah;
        $data->total_harga = $request->total_harga;
        $data->save();

        return redirect()->route('penjualan.index')->with('alert_message','Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelPenjualan::where('id', $id)->get();
        $data->delete();
        return redirect()->route('penjualan.index')->with('alert_message','Berhasil menghapus data!');
    }
}
