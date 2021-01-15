@csrf
<div class="card-body">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="" class="col-form-label">Role</label>
                <input type="text" name="code" class="form-control" autocomplete="off"
                       value="{{ isset($model->code) ? $model->code : null  }}" required>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                <label for="" class="col-form-label">Name</label>
                <input type="text" name="name" class="form-control" autocomplete="off"
                       value="{{ isset($model->name) ? $model->name : null  }}" required>
            </div>
        </div>
    </div>
</div>
