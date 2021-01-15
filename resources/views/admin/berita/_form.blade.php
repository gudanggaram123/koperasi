@csrf
<div class="card-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for="" class="col-form-label">Judul</label>
                <input type="text" name="judul" class="form-control" autocomplete="off"
                       value="{{ isset($model->judul) ? $model->judul : null  }}" required>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label for="" class="col-form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi">  {{ isset($model->deskripsi) ?
                $model->deskripsi : null }} </textarea>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label for="" class="col-form-label">Isi</label>
                <textarea class="textarea" name="isi" placeholder="Please Type Content"
                          style="width: 100%; font-size: 14px; line-height: 18px; border: 1px solid
                          #dddddd; padding: 100px;">  {{ isset($model->isi) ?
                $model->isi : null }} </textarea>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="" class="col-form-label">Kategori</label>
                <select class="form-control select2" style="width: 100%;" name="id_kategori" required="required">
                    <option value="">Pilih Kategori</option>
                    @foreach(getData('kategori') as $v)
                        <option
                            value="{{$v->id}}" {{ (isset($model->id_kategori) ? $model->id_kategori : null)==$v->id ?
                            'selected="selected"' : null }}>
                            {{ $v->kategori }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                <label for="" class="col-form-label">Tag</label>
                <select class="form-control select2" multiple="multiple" style="width: 100%;" name="id_tag[]"
                        required="required">
                    <option value="">Pilih Tag</option>
                    @foreach(getData('tag') as $v)
                        <option
                            value="{{$v->id}}" {{ (isset($model->id_tag) ? $model->id_tag : null)==$v->id ?
                            'selected="selected"' : null }}>
                            {{ $v->tag }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <p>Gambar</p>
                <div class="custom-file">
                    <input type="hidden" value="{{ isset($model->gambar) ? $model->gambar : null  }}" name="gambar_old">
                    <input type="file" class="custom-file-input" id="customFile"
                           name="gambar" value="{{ isset($model->gambar) ? $model->gambar : null  }}" >
                    <label class="custom-file-label" for="customFile">{{ isset($model->gambar) ? $model->gambar : null  }}</label>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <p>Publish</p>
                <div class="form-group clearfix">
                    <?php
                    $cek = isset($model->publish) ? $model->publish : null;
//                    dd($cek);
                    ?>
                    <div class="icheck-primary d-inline" style="margin-right: 15px">
                        <input type="radio" id="radioPrimary1" name="publish" value="0" {{ $cek == '0' ? 'checked' :
                        null }} required>
                        <label for="radioPrimary1">
                            Tidak
                        </label>
                    </div>
                    <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="publish" value="1"  {{ $cek == '1' ? 'checked' :
                        null }} required>
                        <label for="radioPrimary2">
                            Ya
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

