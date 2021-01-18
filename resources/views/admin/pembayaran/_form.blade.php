@csrf

<div class="card-body">
    {{ csrf_field() }}
 
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Id Transaksi</label>
                <input type="text" value="{{ isset($pinjamuang->id_transaksi) ? $pinjamuang->id_transaksi: null  }}" class="form-control" name="id_transaksi" readonly class="form-control" autocomplete="off" required />
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label>Nama Nasabah</label>
                <input type="text" value="{{ isset($datanasabah->nama) ? $datanasabah->nama: null  }}" class="form-control" name="nama" readonly class="form-control" autocomplete="off" required />

            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label>Pembayaran Ke</label>
                <input type="text" class="form-control" name="tenor" class="form-control"  readonly value="{{ isset($angsuran) ? $angsuran + 1 : 1  }}" required />
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Tanggal Pengembalian</label>
                <input type="date" required name="tgl_pinjam" max="3000-12-31" min="1000-01-01" value="{{ isset($data->tgl_pinjam) ? $data->tgl_pinjam : null  }}" class="form-control" />
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                </div>
            </div>
        </div>
    </div>
</div>
