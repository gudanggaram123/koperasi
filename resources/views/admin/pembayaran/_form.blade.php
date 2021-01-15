@csrf

<div class="card-body">
{{ csrf_field() }}

   
      
    <div class="row">
<div class="col-sm-6">
            <div class="form-group">
                <label>Id Transaksi</label>
      <input type="text" value="{{ isset($data->kd_nasabah) ? $data->kd_nasabah: generate_codetr()  }}"  class="form-control" name="kd_nasabah" readonly class="form-control" autocomplete="off" required>
            </div>
        </div>

       <div class="col-sm-6">
            <div class="form-group">
                <label>Nama Nasabah</label>
      <input type="text" class="form-control" name="username" class="form-control" autocomplete="off"
                  value="{{ isset($data->username) ? $data->username : null  }}" required>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label>Jumlah Pinjaman</label>
      <input type="text" class="form-control" name="username" class="form-control" autocomplete="off"
                  value="{{ isset($data->username) ? $data->username : null  }}" required>
            </div>
        </div>
        
         <div class="col-sm-6">
          <div class="form-group">
             <label>Tenor</label>
                 <select class="form-control" name="status">
                     <option value="1">1 Bulan</option>
                     <option value="2">2 Bulan</option>
                     <option value="3">3 Bulan</option>
                     <option value="4">4 Bulan</option>
                     <option value="5">5 Bulan</option>
                     <option value="6">6 Bulan</option>
                     <option value="7">7 Bulan</option>
                     <option value="8">8 Bulan</option>
                     <option value="9">9 Bulan</option>
                     <option value="10">10 Bulan</option>
                     <option value="11">11 Bulan</option>
                     <option value="12">12 Bulan</option>
                 </select>
       </div>
          </div>
        
        <div class="col-sm-3">
            <div class="form-group">
                <label>Bunga</label>
      <input type="text" class="form-control" name="username" class="form-control" autocomplete="off"
                  value="{{ isset($data->username) ? $data->username : null  }}" required>
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
        
          <div class="col-sm-3">
                   <div class="form-group">
                       <label >Tanggal Peminjaman</label>
      <input type="date" required name="tgl_lahir" max="3000-12-31" 
        min="1000-01-01" value="{{ isset($data->tgl_lahir) ? $data->tgl_lahir : null  }}" class="form-control">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          </div>
                        </div>
                      </div>
                    </div>
                    
                     <div class="col-sm-3">
                   <div class="form-group">
                       <label >Tanggal Pengembalian</label>
      <input type="date" required name="tgl_lahir" max="3000-12-31" 
        min="1000-01-01" value="{{ isset($data->tgl_lahir) ? $data->tgl_lahir : null  }}" class="form-control">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          </div>
                        </div>
                      </div>
                    </div>
      
        </div>
    </div>
</div>