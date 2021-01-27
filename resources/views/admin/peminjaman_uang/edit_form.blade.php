@csrf

<div class="card-body">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Id Transaksi</label>
                <input type="text" value="{{ isset($PinjamUang->kd_nasabah) ? $PinjamUang->kd_nasabah: generate_codetr()  }}" class="form-control" name="id_transaksi" readonly class="form-control" autocomplete="off" required />
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label>Nama Nasabah</label>

                <input type="text" class="form-control" readonly  class="form-control"  value="{{ isset($nasabah->nama) ? $nasabah->nama : null  }}" required />
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label>Jumlah Pinjaman</label>
                <input type="text" class="form-control" name="jumlah_pinjaman" id="jumlah" class="form-control" autocomplete="off" value="{{ isset($PinjamUang->jumlah_pinjaman) ? $PinjamUang->jumlah_pinjaman : null  }}" required />
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label>Bayar Perbulan</label>
                <input type="text" class="form-control" id="angsuran" readonly name="bayar_perbulan" class="form-control" autocomplete="off" value="{{ isset($PinjamUang->bayar_perbulan) ? $PinjamUang->bayar_perbulan : null  }}" required />
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label>Tenor / Bulan</label>
                <select class="form-control" name="tenor" id="tenor">
                    <option value="1">1 </option>
                    <option value="2">2 </option>
                    <option value="3">3 </option>
                    <option value="4">4 </option>
                    <option value="5">5 </option>
                    <option value="6">6 </option>
                    <option value="7">7 </option>
                    <option value="8">8 </option>
                    <option value="9">9 </option>
                    <option value="10">10 </option>
                    <option value="11">11 </option>
                    <option value="12">12 </option>
                </select>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Bunga</label>
                <input type="text" class="form-control" id="bunga" name="bunga" class="form-control" autocomplete="off" value="{{ isset($PinjamUang->bunga) ? $PinjamUang->bunga : null  }}" required />
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                    <option value="1">Belum Lunas</option>
                    <option value="0">Lunas</option>
                </select>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label>jaminan</label>
                <input type="text" value="{{ $PinjamUang->jaminan}}" class="form-control" name="jaminan" class="form-control" autocomplete="off" required />
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Tanggal Peminjaman</label>
                <input type="date" required name="tgl_pinjam" max="3000-12-31" min="1000-01-01" value="{{ isset($PinjamUang->tgl_pinjam) ? $PinjamUang->tgl_pinjam : null  }}" class="form-control" />
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Jatuh Tempo</label>
                <input type="date" required name="tgl_kembali" max="3000-12-31" min="1000-01-01" value="{{ isset($PinjamUang->tgl_kembali) ? $PinjamUang->tgl_kembali : null  }}" class="form-control" />
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('jshitung')

<script>
    $(document).ready(function () {
        $("#jumlah").on("keyup", function () {
            var jum = $("#jumlah").val();
            var tenor = $("#tenor").val();
            var bunga = $("#bunga").val();
            console.log(jum);
            console.log(tenor);
            console.log(bunga);
            var total = (bunga / 100) * jum;
            var perbulan = parseInt(total) + parseInt(jum);
            console.log(total);
            console.log(perbulan);
        });

        $("#bunga").on("keyup", function () {
            var jum = $("#jumlah").val();
            var tenor = $("#tenor").val();
            var bunga = $("#bunga").val();
            console.log(jum);
            console.log(tenor);
            console.log(bunga);
            var total = (bunga / 100) * jum;
            var perbulan = parseInt(total) + parseInt(jum);

            console.log(total);
            console.log(perbulan);
        });

        // $('#bunga').on('keyup', function () {
        //     var jum = $('#jumlah').val();
        //     var tenor = $('#tenor').val();

        $("#tenor").on("change", function () {
            var jum = $("#jumlah").val();
            var tenor = $("#tenor").val();
            var bunga = $("#bunga").val();
            console.log(jum);
            console.log(tenor);
            console.log(bunga);
            var total = (bunga / 100) * jum;
            var perbulan = parseInt(total) + parseInt(jum);
            var hasil = perbulan / tenor;
            console.log(hasil);
            $("#angsuran").val(hasil);
        });
    });
</script>

@endpush
