<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\nasabah;
use App\Model\pinjambrg;
use DB;

class Pinjam_brgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('transaksi_barang')
            ->select(
                'produk.nama_brg',
                'produk.status as status_produk',
                'transaksi_barang.*',
                'transaksi_barang.id as pbrg_id',
                'transaksi_barang.status as status_brg',
                'nasabah.id as nasabah_id',
                'nasabah.nama'
                )
            ->join('produk', 'produk.id', '=', 'transaksi_barang.id_produk')
            ->join('nasabah', 'nasabah.id', '=', 'transaksi_barang.id_nasabah')
            ->get();

        // dd($data);
        return view('admin.pinjam_barang.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pinjam_barang.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = $request->all(); 

        $model['total_sewa'] = ((strtotime($model['tgl_kembali']) - strtotime($model['tgl_pinjam'])) / 3600 / 24) * $model['hrg_sewa'];

        pinjambrg::create($model);
        $nasabah = nasabah::find($model['id_nasabah']);
        $status_brg['status_brg'] = 1;
        $nasabah->update($status_brg);
        return redirect('/pinjam_barang')->with('toast_success', 'Rental Berhasil Menambahkan');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $model['status'] = "0";

        $data = pinjambrg::find($id);
        $date = date("Y-m-d");
        // dd($data);
        if($data['tgl_kembali'] <= $date){ 
            $lewat = (strtotime($date) - strtotime($data['tgl_kembali'])) / 3600 / 24;
            // dd(strtotime($data['tgl_kembali']));
            $denda = $data["hrg_sewa"] * $lewat;
            $denda = $denda + 0.1 * $denda;
            $model['denda'] = $denda;
            // dd($denda);
        }
        // dd($data);
        
        $data->update($model);

        $nasabah = nasabah::find($data['id_nasabah']);
        // dd($nasabah);
        $status_nasabah['status_brg'] = "0";
        $nasabah->update($status_nasabah);
        // dd($model);


        return redirect('/pinjam_barang')->with('toast_success', 'Barang Berhasil Dikembalikan');

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
