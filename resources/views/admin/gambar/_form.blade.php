@csrf
<div class="card-body">
    <div class="row">
        <div class="col-sm-7">
            <div class="form-group">
                <label for="" class="col-form-label">Gambar</label>
                <input type="text" name="gambar" class="form-control" autocomplete="off"
                       value="{{ isset($model->gambar) ? $model->gambar : null  }}" required>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <p>File</p>
                <div class="custom-file">
                    <input type="hidden" value="{{ isset($model->file) ? $model->file : null  }}" name="file_old">
                    <input type="file" class="custom-file-input" id="customFile"
                           name="file" value="{{ isset($model->file) ? $model->file : null  }}" {{ isset
                           ($model->file) ? $model->file : 'required'  }}>
                    <label class="custom-file-label" for="customFile">{{ isset($model->file) ? $model->file : null  }}</label>
                </div>
            </div>
        </div>
    </div>
</div>
