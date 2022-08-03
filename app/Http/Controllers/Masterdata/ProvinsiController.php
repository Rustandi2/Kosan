<?php

namespace App\Http\Controllers\Masterdata;

use Illuminate\Http\Request;
use App\Models\provinsi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Helpers\Helper;
use DB;

class ProvinsiController extends Controller
{
    public function index() {
        $data = provinsi::all();
        return view('referensi.provinsi.index', compact('data'));
    }

    public function create() {
        $data = provinsi::all();
        return view('referensi.provinsi.create', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_provinsi' => 'required',
            'kota' => 'required',
            'kode_pos' => 'required',
        ]);

        $data = new provinsi();
        $data->nama_provinsi = $request->nama_provinsi;
        $data->kab_kota    = $request->kab_kota;
        $data->kecamatan    = $request->kecamatan;
        $data->desa    = $request->desa;
        $data->kode_pos  = $request->kode_pos;
        $data->save();
        
        return redirect(route('provinsi'))->with('success', 'Data berhasil disimpan');
    }


    public function show($id){
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
        $data = provinsi::find($id);
        return view('referensi.provinsi.edit', compact('data'));    
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
            'nama_provinsi' => 'required',
            'kota' => 'required',
            'kode_pos' => 'required',
        ]);

        $data = provinsi::find($id)->update($request->all());

        return redirect(route('provinsi'))->with('success','Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = provinsi::find($id);
        $data->delete();

        return redirect(route('provinsi'))->with('success','Data berhasil di hapus');
    }

}
