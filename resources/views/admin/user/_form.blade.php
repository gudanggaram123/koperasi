@csrf

<div class="card-body" style="max-width: 540px;">

    <div class="form-group">
      <label>User Name</label>
      <input type="text" class="form-control" name="name" value="{{ isset($v->name) ? $v->name : null  }}">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" value="{{ isset($v->email) ? $v->email : null  }}">
      </div>  
      
   <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" value="{{ isset($v->password) ? $v->password : null  }}">
      </div>  
      
