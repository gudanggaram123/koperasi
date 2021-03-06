<?php

namespace App\Http\Controllers;
use App\Model\nasabah;
use App\Model\PembayaranAngsuran;
use App\Model\PinjamUang;
use App\Model\Setting;
use DateTime;
use App\Export\PembayaranAngsuranExport;
use App\Export\PeminjamanBarangExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use DB;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datau = DB::table('pembayaran_angsuran')
                // ->orderByRaw('created_at desc') 
                ->get();

        $datau = $datau->toArray();
        do
        {
            $swapped = false;
            for( $i = 0, $c = count( $datau ) - 1; $i < $c; $i++ )
            {
                if( $datau[$i] < $datau[$i + 1] )
                {
                    list( $datau[$i + 1], $datau[$i] ) =
                        array( $datau[$i], $datau[$i + 1] );
                    $swapped = true;
                }
            }
        }
        while( $swapped );
        // dd($datau[0]);

        return view('admin.pembayaran.index', compact('datau'));
        
    }

    public function export_excel(Request $request)
	{
        $model  = $request->all();

		return Excel::download(new PembayaranAngsuranExport($model['tgl_mulai'], $model['tgl_sampai']), 'PembayaranAngsuran.xlsx');
    }
    
    public function export_excel_barang(Request $request)
	{
        $model  = $request->all();

		return Excel::download(new PeminjamanBarangExport($model['tgl_mulai'], $model['tgl_sampai']), 'PemijamanBarang.xlsx');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $pinjamuang = PinjamUang::find($id); 
        $datanasabah = nasabah::find($pinjamuang['id_nasabah']); 
        // dd($pinjamuang['id_transaksi']);
        
        $angsuran = PembayaranAngsuran::where('id_transaksi',$pinjamuang['id_transaksi'])->count();
        // groupBy($pinjamuang['id_transaksi'])->get();
        // dd($angsuran);
        if($angsuran >=0 ){
            $angsuran = $angsuran + 1;
        }
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
        // dd($pinjamuang);
        // dd($model);
        $percen = $pinjamuang->jumlah_pinjaman * 0.01; 
        
        $batas_pengembalian = strtotime($pinjamuang->tgl_pinjam) + $model['tenor'] * 3600 * 24 * 30;

        // $jatuhtempo = strtotime($pinjamuang->tgl_pinjam) + $model['tenor'] * 3600 * 24 * 30; 

        // dd( date('Y-m-d',$jatuhtempo));
       


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
        
        // dd($total_pinjaman);

        if($total_pinjaman <= 0 ){
            $data['status'] = "0";
            // $data['id'] = $pinjamuang['id'];
            $pinjamuang->update($data);
            $nasabah = nasabah::find($model['id_nasabah']); 
            $data['status'] = "0";
            $nasabah->update($data);
        }
        PembayaranAngsuran::create($model);
        $setting = Setting::first();
        $saldosetting['saldo'] = $setting['saldo'] + $model['denda'] + $pinjamuang->bayar_perbulan;

        $setting->update($saldosetting);

        // dd($setting);
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
        $data = PembayaranAngsuran::find($id); 
        $pinjamuang = PinjamUang::where('id_transaksi',$data['id_transaksi'])->first(); 
        $datanasabah = nasabah::where('id',$pinjamuang['id_nasabah'])->first();  

        // dd($pinjamuang['id_transaksi']);
        // $angsuran = PembayaranAngsuran::all()->groupBy($pinjamuang['id_transaksi'])->count();
        $angsuran= $data['tenor'];
        // dd($angsuran);
        // dd($pinjamuang);
        // dd($datanasabah);
        return view('admin.pembayaran.edit',compact('data','datanasabah','pinjamuang','angsuran'));

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
        $model  = $request->all();
        $data = PembayaranAngsuran::find($model['id']); 
        $data->update($model);
        return redirect('/pembayaran')->with('toast_success', 'Angsuran Berhasil Di Update ');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        if(PembayaranAngsuran::destroy($id)){ 
            return redirect('/pembayaran')->with('toast_success', 'Angsuran Berhasil Di Hapus');
        } 
    }
}
