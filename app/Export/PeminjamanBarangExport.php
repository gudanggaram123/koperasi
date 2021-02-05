<?php
 
namespace App\Export;
use DB;
use App\Model\pinjambrg;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PeminjamanBarangExport implements FromQuery,
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
        $data = pinjambrg::query()
            ->join('produk', 'produk.id', 'transaksi_barang.id_produk')
            ->join('nasabah', 'nasabah.id', 'transaksi_barang.id_nasabah')
            ->where('transaksi_barang.tgl_pinjam', '>=', $star)
            ->where('transaksi_barang.tgl_pinjam', '<=', $ends)
            ->select(
                    'produk.nama_brg',
                    'transaksi_barang.hrg_sewa',
                    'transaksi_barang.total_sewa',
                    'transaksi_barang.denda',  
                    'nasabah.nama',
                    DB::raw('(CASE 
                                WHEN transaksi_barang.status = "0" THEN "Dikembalikan" 
                                WHEN transaksi_barang.status = "1" THEN "Belum Dikembalikan" 
                                END
                            )'),
                    'transaksi_barang.tgl_pinjam'
                    );
        return $data;
    }

    public function headings(): array
    {
        return [
            'Nama Barang',
            'Harga Sewa', 
            'Total Sewa', 
            'Denda',
            'Nama Nasabah',
            'Status Transaksi Pemijaman',
            'Tanggal Peminjaman',
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