<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\InventoryController;

class MutasiinventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['lokasi']=DB::table('property')->get();
        
        // $data['url2']=$id_grup_aset;

        // $data['grup'] = DB::table('grup_aset')->get();

        // $data['nama_grup']=DB::table('grup_aset')->where('id_grup_aset',$id_grup_aset)->first();

        $data['mutasi']= DB::table('mutasi')->join('property','mutasi.lokasi','=','property.kode_property')->get();

        return view('mutasi',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=[
            'id_mutasi'=>$request->id_mutasi,
            'nama'=>$request->nama,
            'lokasi'=>$request->lokasi,
            'deskripsi'=>$request->deskripsi,
            'disetujui'=>0
        ];

        DB::table('mutasi')->insert($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_grup_aset,$id_mutasi)
    {
        $data['lokasi']=DB::table('property')->get();
        
        $data['url2']=$id_grup_aset;

        $data['grup'] = DB::table('grup_aset')->get();

        $data['nama_grup']=DB::table('grup_aset')->where('id_grup_aset',$id_grup_aset)->first();

        $data['asset']= DB::table('transaksi_mutasi_inventory')->join('inventory','transaksi_mutasi_inventory.kode_inventory','=','inventory.kode_inventory')->join('property','inventory.kode_property','=','property.kode_property')->where('id_mutasi',$id_mutasi)->get();

        $data['inventory']=InventoryController::Allinventory();

        return view('mutasiinventory',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
