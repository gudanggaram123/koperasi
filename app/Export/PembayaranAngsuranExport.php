<?php
 
namespace App\Export;
use DB;
use App\Model\PembayaranAngsuran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PembayaranAngsuranExport implements FromQuery,
WithHeadings,
ShouldAutoSize
{
    public function __construct(string $mulai, string $selesai)
    {
        $this->mulai = $mulai;
        $this->selesai = $selesai;
    }

    public function query()
    { 
        $star = $this->mulai;
        $ends = $this->selesai;
        $data = PembayaranAngsuran::query()
            ->join('transaksi_pinjam_uang', 'transaksi_pinjam_uang.id_transaksi', 'pembayaran_angsuran.id_transaksi')
            ->join('nasabah', 'nasabah.id', 'transaksi_pinjam_uang.id_nasabah')
            ->where('pembayaran_angsuran.tgl_pinjam', '>=', $star)
            ->where('pembayaran_angsuran.tgl_pinjam', '<=', $ends)
            ->select('pembayaran_angsuran.id_transaksi',
                    'pembayaran_angsuran.tenor',
                    'pembayaran_angsuran.jumlahbayar',
                    'pembayaran_angsuran.tgl_pinjam', 
                    'pembayaran_angsuran.denda',
                    'nasabah.nama', 
                    DB::raw('(CASE 
                                WHEN transaksi_pinjam_uang.status = "0" THEN "Lunas" 
                                WHEN transaksi_pinjam_uang.status = "1" THEN "Belum Lunas" 
                                END
                            )')
                    );
        return $data;
    }

    public function headings(): array
    {
        return [
            'ID Transaksi',
            'Pembayaran Ke',
            'Jumlah Bayar',
            'Tanggal Bayar',
            'Denda',
            'Nama Nasabah',
            'Status Transaksi Pemijaman',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }
}