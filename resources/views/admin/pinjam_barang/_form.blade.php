@csrf

<div class="card-body">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label>Nama Nasabah</label>
                <select class="form-control" name="id_nasabah">
                    @foreach (\App\Model\Nasabah::all() as $v)

                    <option value="{{$v->id}}">{{$v->nama}}</option>

                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label>Barang Pinjaman</label>
                <select class="form-control" name="id_produk">
                    @foreach (\App\Model\produk::all() as $v)

                    <option value="{{$v->id}}">{{$v->nama_brg}}</option>

                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-4">
            <label>harga sewa</label>
            <input type="number" class="form-control" name="hrg_sewa" />
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Tanggal Pinjam</label>
                <input type="date" required name="tgl_pinjam" value="{{ isset($data->tgl_pinjam) ? $data->tgl_pinjam : null  }}" max="3000-12-31" min="1000-01-01" class="form-control" />
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Tanggal dikembalikan</label>
                <input type="date" required name="tgl_kembali" value="{{ isset($data->tgl_kembali) ? $data->tgl_kembali : null  }}" max="3000-12-31" min="1000-01-01" class="form-control" />
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                </div>
            </div>
        </div>
    </div>
</div>
