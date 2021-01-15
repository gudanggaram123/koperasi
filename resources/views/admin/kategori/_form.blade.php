@csrf
<div class="card-body">
    <div class="row">
        <div class="col-sm-7">
            <div class="form-group">
                <label for="" class="col-form-label">Kategori</label>
                <input type="text" name="kategori" class="form-control" autocomplete="off"
                       value="{{ isset($model->kategori) ? $model->kategori : null  }}" required>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <label for="" class="col-form-label">Gambar</label>
                <select class="form-control select2" style="width: 100%;" name="id_gambar" required="required">
                    <option value="">Pilih Gambar</option>
                    @foreach(getData('gambar') as $v)
                        <option
                            value="{{$v->id}}" {{ (isset($model->id_gambar) ? $model->id_gambar : null)==$v->id ?
                            'selected="selected"' : null }}>
                            {{ $v->gambar }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
