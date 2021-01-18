<?php

namespace App\Http\Controllers;
use App\Model\nasabah;
use App\Model\PembayaranAngsuran;
use App\Model\PinjamUang;
use DateTime;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datau = PembayaranAngsuran::paginate(3);
        
        return view('admin.pembayaran.index', compact('datau'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $datanasabah = nasabah::find($id); 
        $pinjamuang = PinjamUang::find($id); 
        // dd($pinjamuang['id_transaksi']);
        $angsuran = PembayaranAngsuran::all()->groupBy($pinjamuang['id_transaksi'])->count();

        // dd($angsuran);
        // dd($pinjamuang);
        // dd($datanasabah);
        return view('admin.pembayaran.create',compact('datanasabah','pinjamuang','angsuran'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $model  = $request->all();
        $id_trx = $model['id_transaksi'];
        $pinjamuang = PinjamUang::where('id_transaksi',$id_trx)->first(); 
        $tanggal_kembali = strtotime($model['tgl_pinjam']);
        $batas_pengembalian = strtotime($pinjamuang->tgl_kembali); 
         
        $percen = $pinjamuang->jumlah_pinjaman * 0.01; 

        if($batas_pengembalian > $tanggal_kembali){
            $model['denda'] = 0;
        }else{
            $pengembalian = ($batas_pengembalian);
            $kembali = ($tanggal_kembali);
            $denda =  ($pengembalian - $kembali) / 3600 / 24;
            $denda = $percen * $denda * -1;
            $model['denda'] = $denda;
        }
        
        $model['jumlahbayar'] = $pinjamuang->bayar_perbulan; 
        $total_pinjaman = $pinjamuang->jumlah_pinjaman - ($model['jumlahbayar'] * $model['tenor']); 
        if($total_pinjaman <= 0 ){
            $data['status'] = 2;
            $pinjamuang->update($data);
        }
        PembayaranAngsuran::create($model);
        return redirect('/pembayaran')->with('toast_success', 'Berhasil Menambahkan Angsuran');
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
