@csrf

<div class="card-body" style="max-width: 540px;">

    <div class="form-group">
      <label>Saldo</label>
      <input type="text" class="form-control" name="saldo" value="{{ isset($data->saldo) ? $data->saldo : null  }}">
    </div>
    
       <div class="form-group">
        <label>Desa</label>
        <input type="text" class="form-control" name="nama_desa" value="{{ isset($data->nama_desa) ? $data->nama_desa : null  }}">
      </div>  

    <div class="form-group">
        <label>Alamat</label>
        <input type="text" class="form-control" name="alamat" value="{{ isset($data->alamat) ? $data->alamat : null  }}">
      </div>  

      
