<?php

namespace App\Http\Controllers;
use App\Model\nasabah;
use App\Model\PinjamUang;


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
        $datau = PinjamUang::paginate(3);
        
      return view('admin.peminjaman_uang.index', compact('datau'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $nasabah = nasabah:: leftjoin ('transaksi_pinjam_uang', 'transaksi_pinjam_uang.id_nasabah', '=', 'nasabah.id')
        
            ->select('nasabah.*','transaksi_pinjam_uang.status as sts')
            ->where('transaksi_pinjam_uang.status','0')
            ->orWhere('transaksi_pinjam_uang.status',null)
            ->get();
            
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
        PinjamUang::create($request->all());
        return redirect('/peminjaman_uang')->with('toast_success', 'Berhasil Menambahkan Pinjamank');
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
