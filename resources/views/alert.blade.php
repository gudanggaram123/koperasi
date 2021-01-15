
  @if(session()->has('succes'))
  <div class="alert alert-success">
      {{session()->get('succes')}}

  </div>
  @endif