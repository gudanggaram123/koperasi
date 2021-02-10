<?php

namespace App\Http\Controllers;
use App\Model\nasabah;
use App\Model\PinjamUang;
use App\Model\Setting;
use Illuminate\Http\Request;

class PinjamUangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datau = PinjamUang::all();
        // dd($datau);
        return view('admin.peminjaman_uang.index', compact('datau'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $nasabah = nasabah::select('nasabah.*','transaksi_pinjam_uang.*','transaksi_pinjam_uang.status as sts')
        // ->join('transaksi_pinjam_uang','transaksi_pinjam_uang.id_nasabah','=','nasabah.id')
        // ->where('nasabah.status','0')
        // // ->orWhere('transaksi_pinjam_uang.status',null)
        // ->get();
        $nasabah = nasabah::where('status',"=","0")->get();
        //    $nasabah = nasabah:: leftjoin ('transaksi_pinjam_uang', 'transaksi_pinjam_uang.id_nasabah', '=', 'nasabah.id')
        
        //     ->select('nasabah.*','transaksi_pinjam_uang.status as sts')
        //     ->where('transaksi_pinjam_uang.status','0')
        //     ->orWhere('transaksi_pinjam_uang.status',null)
        //     ->get();
            // dd($nasabah);
      return view('admin.peminjaman_uang.create',compact('nasabah'));
        
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
        PinjamUang::create($request->all());
        $data['status'] = 1;
        $data['id'] = $model['id_nasabah'];
        $nasabah = nasabah::find($model['id_nasabah']);
        // dd($data);
        if($nasabah->update($data)){
            // dd($nasabah);
        }
        
        return redirect('/peminjaman_uang')->with('toast_success', 'Berhasil Menambahkan Pinjaman');
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
        $PinjamUang = PinjamUang::find($id);
        $nasabah = nasabah::find($PinjamUang['id_nasabah']);
        // dd($PinjamUang);
        return view('admin.peminjaman_uang.edit',compact('PinjamUang','nasabah'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $model = $request->all();
        $data = PinjamUang::find($model['id']);

        $data->update($model);
        return redirect('/peminjaman_uang')->with('toast_success', 'Data Berhasil di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PinjamUang::find($id);
        $setting = Setting::find(1);
        $saldo['saldo'] = $data['jumlah_pinjaman'] + $setting['saldo'];
        
        $nasabah = nasabah::find($data['id_nasabah']);
        $status_nasabah['status'] = "0";
        $nasabah->update($status_nasabah);

        $setting->update($saldo);
        $data->delete();

        return redirect('/peminjaman_uang')->with('toast_success', 'Data Berhasil di hapus');
    }
}
