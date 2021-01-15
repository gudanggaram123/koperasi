@csrf
<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <div class="form-group">
                <label for="" class="col-form-label">Role</label>
                <input type="hidden" name="role" value="{{ $role->code }}" required>
                <input type="text" name="" class="form-control" value="{{ $role->name }}" readonly>
            </div>
        </div>
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                    <th width="10px">#</th>
                    <th>Menu</th>
                    <th>Read</th>
                    <th>Create</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Report</th>
                </tr>
                </thead>
                <tbody>
                @foreach($menu as $v)
                    <tr style="background-color: #dee2e6">
                        <td>{{$v->id}}</td>
                        <td>{{$v->name}}</td>
                        <td colspan="5">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheckr{{$v->id}}"
                                       name="read{{$v->id}}"
                                       {{ Helper::cek_cheked($role->code,$v->id,'flag_read') == '1' ? 'checked="checked"' :
                                       null }}
                                       value="1">
                                <label class="custom-control-label" for="customCheckr{{$v->id}}"></label>
                            </div>
                        </td>
                    </tr>
                    @foreach($data as $v1)
                        @if ($v->id == $v1->parent)
                            <tr>
                                <td>{{$v1->id}}
                                    <input type="hidden" value="{{$v1->id}}">
                                </td>
                                <td>{{$v1->name}}</td>
                                <td width="8%">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckr{{$v1->id}}"
                                               name="read{{$v1->id}}"
                                               {{ Helper::cek_cheked($role->code,$v1->id,'flag_read') == '1' ? 'checked="checked"' :
                                               null }}
                                               value="1">
                                        <label class="custom-control-label" for="customCheckr{{$v1->id}}"></label>
                                    </div>
                                </td>
                                <td width="8%">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckc{{$v1->id}}"
                                               name="create{{$v1->id}}"
                                               {{ Helper::cek_cheked($role->code,$v1->id,'flag_create') == '1' ? 'checked="checked"' :
                                               null }}
                                               value="1">
                                        <label class="custom-control-label" for="customCheckc{{$v1->id}}"></label>
                                    </div>
                                </td>
                                <td width="8%">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customChecke{{$v1->id}}"
                                               name="edit{{$v1->id}}"
                                               {{ Helper::cek_cheked($role->code,$v1->id,'flag_edit') == '1' ? 'checked="checked"' :
                                             null }}
                                               value="1">
                                        <label class="custom-control-label" for="customChecke{{$v1->id}}"></label>
                                    </div>
                                </td>
                                <td width="8%">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckd{{$v1->id}}"
                                               name="delete{{$v1->id}}"
                                               {{ Helper::cek_cheked($role->code,$v1->id,'flag_delete') == '1' ? 'checked="checked"' :
                                            null }}
                                               value="1">
                                        <label class="custom-control-label" for="customCheckd{{$v1->id}}"></label>
                                    </div>
                                </td>
                                <td width="8%">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customChecki{{$v1->id}}"
                                               name="report{{$v1->id}}"
                                               {{ Helper::cek_cheked($role->code,$v1->id,'flag_report') == '1' ?
                                               'checked="checked"' :
                                            null }}
                                               value="1">
                                        <label class="custom-control-label" for="customChecki{{$v1->id}}"></label>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach

                @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
