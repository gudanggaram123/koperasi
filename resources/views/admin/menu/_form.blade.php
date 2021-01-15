@csrf
<div class="card-body">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="" class="col-form-label">Parent</label>
                <select class="form-control select2" style="width: 100%;" name="parent" required="required">
                    <option value="0">Pilih</option>
                    @foreach(\App\Menu::where('parent',0)->get() as $v)
                        <option value="{{$v->id}}" {{ (isset($model->parent) ? $model->parent : null)==$v->id ? 'selected="selected"' : null }} >{{$v->name}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="" class="col-form-label">Name</label>
                <input type="input" name="name" class="form-control"
                       value="{{ isset($model->name) ? $model->name : null  }}" required>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="" class="col-form-label">Icon</label>
                <select class="form-control select2" style="width: 100%;" name="icon" required="required">
                    <option value="">Pilih</option>
                    @foreach(Helper::icon() as $v)
                        <option {{ (isset($model->icon) ? $model->icon : null)==$v ? 'selected="selected"' : null }}> <i class="fa fa-users"></i> {{ $v }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                <label for="" class="col-form-label">Url</label>
                <input type="input" name="url" class="form-control"
                       value="{{ isset($model->url) ? $model->url : null  }}" required>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label for="" class="col-form-label">Index</label>
                <input type="input" name="index" class="form-control"
                       value="{{ isset($model->index) ? $model->index : null  }}" required>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label for="" class="col-form-label">Display</label>
                <select class="form-control select2" style="width: 100%;" name="display" required="required">
                    <option value="">Pilih</option>
                    <option value="1" {{ (isset($model->display) ? $model->display : null)==1 ? 'selected="selected"'
                     : null
                     }}>
                        Yes
                    </option>
                    <option value="0" {{ (isset($model->display) ? $model->display : null)==0 ? 'selected="selected"'
                     : null }}>
                        No
                    </option>
                </select>
            </div>
        </div>
    </div>
</div>
