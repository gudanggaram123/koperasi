<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#Uang">Daftar Pinjaman Uang</button>
<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#Angsuran">Daftar Angsuran</button>
<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#Barang">Daftar Pinjaman Barang</button>

<div id="Uang" class="collapse" style="margin-top: 20px;">
    <table id="example2" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="10px">No</th>
                <th>ID Transaksi</th>
                <th>Nama Nasabah</th>
                <th>Jumlah Pinjaman</th>
                <th>Bayar perbulan</th>
                <th>Bunga</th>
                <th>Tenor</th>
                <th>Tgl Pinjam</th>
                <th>Jatuh Tempo</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pinjam_uang as $no => $v)
            <tr>
                <td widtd="10px">{{ ++$no}}</td>
                <td>{{ $v->id_transaksi}}</td>
                <td>{{ $v->nasabah['nama']}}</td>
                <td>{{ $v->jumlah_pinjaman}}</td>
                <td>{{ $v->bayar_perbulan}}</td>
                <td>{{ $v->bunga}}</td>
                <td>{{ $v->tenor}}</td>
                <td>{{ $v->tgl_pinjam}}</td>
                <td>{{ $v->tgl_kembali}}</td>
                <td>{{ $v->status ==1 ? "Belum Lunas" : "Lunas"}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div id="Angsuran" class="collapse" style="margin-top: 20px;">
    <table id="example2" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="10px">No</th>
                <th>id Transaksi</th>
                <th>Jumlah Pinjaman</th>
                <th>Pembayaran Ke</th>
                <th>Denda</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($PembayaranAngsuran as $no => $v)
            <tr>
                <td widtd="10px">{{ ++$no}}</td>
                <td>{{ $v->id_transaksi}}</td>
                <td>{{ $v->jumlahbayar}}</td>
                <td>{{ $v->tenor}}</td>
                <td>{{ $v->denda}}</td>
                <td>{{ $v->status ==1 ? "Belum Lunas" : "Lunas"}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div id="Barang" class="collapse" style="margin-top: 20px;">
    <table id="example2" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="10px">No</th>
                <th>Nama Nasabah</th>
                <th>Barang Pinjaman</th>
                <th>Tgl Pinjaman</th>
                <th>Tgl Kembali</th>
                <th>Harga Sewa Perhari</th>
                <th>Total Harga Sewa</th>
                <th>Denda</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp @foreach ($pinjambrg as $value)

            <tr>
                <td width="10px">{{$no++}}</td>
                <td> {{ App\Model\nasabah::find($value->id_nasabah)->nama }} </td> 
                <td> {{ App\Model\produk::find($value->id_produk)->nama_brg }} </td>  
                <td>{{$value->tgl_pinjam}}</td>
                <td>{{$value->tgl_kembali}}</td>
                <td>{{$value->hrg_sewa}}</td>
                <td>{{$value->total_sewa}}</td>
                <td>{{$value->denda}}</td>
                <td>{{$value->status_brg == 1 ? "Belum Dikembalikan" : "Dikembalikan"}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
