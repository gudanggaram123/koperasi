@csrf

<div class="card-body">
{{ csrf_field() }}

   
      
    <div class="row">
<div class="col-sm-6">
            <div class="form-group">
                <label>KODE Nasabah</label>
      <input type="text" value="{{ isset($data->kd_nasabah) ? $data->kd_nasabah: generate_code()  }}"  class="form-control" name="kd_nasabah" readonly class="form-control" autocomplete="off" required>
            </div>
        </div>

      <div class="col-sm-6">
            <div class="form-group">
                <label>Nama Nasabah</label>
      <input type="text" value="{{ isset($data->nama) ? $data->nama: null  }}"  class="form-control" name="nama" class="form-control" autocomplete="off" required>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label>Username</label>
      <input type="text" class="form-control" name="username" class="form-control" autocomplete="off"
                  value="{{ isset($data->username) ? $data->username : null  }}" required>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="" class="col-form-label">Email</label>
                <input type="email" name="email" class="form-control" autocomplete="off"
                       value="{{ isset($data->email) ? $data->email : null  }}" required>
            </div>
        </div>
        
        <div class="col-sm-6">
            <div class="form-group">
                <label for="" class="col-form-label">Password</label>
                <input type="password" name="password" class="form-control" autocomplete="off" value="{{ isset($data->password) ? $data->password : null  }}" >
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label>Alamat</label>
      <input type="text" class="form-control" name="alamat" class="form-control" autocomplete="off"
                  value="{{ isset($data->alamat) ? $data->alamat : null  }}" required>
            </div>
        </div>

        <div class="col-sm-6">
                   <div class="form-group">
                      <label>Nomor Hp</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-phone"></i>
                          </div>
                        </div>
                        <input type="text" value="{{ isset($data->no_hp) ? $data->no_hp : null  }}" name="no_hp" class="form-control phone-number" required>
                      </div>
                    </div>
        </div>

         <div class="col-sm-6">
            <div class="form-group">
                <label>No Ktp</label>
      <input type="text" class="form-control" name="no_ktp" class="form-control" autocomplete="off"
                  value="{{ isset($data->no_ktp) ? $data->no_ktp : null  }}" required>
            </div>
        </div>

  

          <div class="col-sm-6">
                   <div class="form-group">
                      <label>Tempat Lahir</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            {{-- <i class="glyphicon-home"></i> --}}
                            <i class="fas fa-map-marker-alt"></i>
                          </div>
                        </div>
                        <input type="text" name="tempat_lahir" class="form-control phone-number" value="{{ isset($data->tempat_lahir) ? $data->tempat_lahir : null  }}" required>
                      </div>
                    </div>
        </div>

        <div class="col-sm-3">
                   <div class="form-group">
                       <label >Tanggal Lahir</label>
      <input type="date" required name="tgl_lahir" max="3000-12-31" 
        min="1000-01-01" value="{{ isset($data->tgl_lahir) ? $data->tgl_lahir : null  }}" class="form-control">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          </div>
                        </div>
                      </div>
                    </div>


      <div class="col-sm-3">
         <?php
                    $cek = isset($data->jkl) ? $data->jkl : null; 
          ?>
      <label class="d-block">Jenis Kelamin</label>
          <div class="form-check">
        <input class="form-check-input" type="radio" value="pria" name="jkl" id="pria" {{ $cek == 'pria' ? 'checked=""' :
                        null }} >
        <label class="form-check-label" for="exampleRadios1">
          Pria
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" value="wanita" name="jkl" id="wanita" {{ $cek == 'wanita' ? 'checked=""' :
                        null }}">
        <label class="form-check-label" for="jklcw">
          Wanita
        </label>
      </div>
        </div>
    </div>
</div>

