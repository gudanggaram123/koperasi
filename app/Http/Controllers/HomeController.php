<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\nasabah;
use App\Model\PinjamUang;
use App\Model\PembayaranAngsuran;
use App\Model\pinjambrg;
use App\Model\produk;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function report()
    {
        return view('admin.report.index');
    }

    public function nasabah()
    {
        return view('nasabah.layouts.app');
    }

    public function datanasabah(Request $request)
    {
        $model = $request->all();
        
        $nasabah = nasabah::select('nasabah.*')->where('nama', '=', $model['nama'])->where('password', '=', $model['password'])->first();
        // dd($nasabah);
        $pinjam_uang = PinjamUang::where('id_nasabah','=', $nasabah['id'] )->get();
        $trx = PinjamUang::where('id_nasabah','=', $nasabah['id'] )->first();
        $PembayaranAngsuran = PembayaranAngsuran::where('id_transaksi','=',$trx['id_transaksi'])->get();
        $pinjambrg = pinjambrg::where('id_nasabah', '=', $nasabah['id'])->get();
        // dd($pinjambrg);
        return view('nasabah.layouts.app', compact('nasabah','pinjam_uang', 'PembayaranAngsuran', 'pinjambrg'));
    }

    public function produk()
    {
        $produk = produk::all();
        return view('nasabah.layouts.produk', compact('produk'));

    }
}
