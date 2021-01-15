@csrf

<div class="card-body" style="max-width: 540px;">

    <div class="form-group">
      <label>Nama barang</label>
      <input type="text" class="form-control" name="nama_brg" value="{{ isset($data->nama_brg) ? $data->nama_brg : null  }}">
    </div>

    <div class="form-group">
        <label>Stok barang</label>
        <input type="number" class="form-control" name="stok_brg" value="{{ isset($data->stok_brg) ? $data->stok_brg : null  }}">
      </div>  

       <div class="form-group">
      <label>Status</label>
      <select class="form-control" name="status">
        <option value="1">Dijual</option>
        <option value="0">Disewakan</option>
      </select>
    </div>
      
