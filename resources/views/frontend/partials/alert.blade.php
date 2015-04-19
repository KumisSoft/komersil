@if ($errors->all())
  <div data-alert class="alert-box alert-danger">
    <div class="row">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
      <a href="#" class="close">&times;</a>
    </div>
  </div>
@endif

@if (Session::has('error'))
  <div data-alert class="alert-box alert-danger">
    <div class="row">
      {{ Session::get('error') }}
      <a href="#" class="close">&times;</a>
    </div>
  </div>
@endif

@if (Session::has('warning'))
  <div data-alert class="alert-box alert-warning">
    <div class="row">
      {{ Session::get('warning') }}
      <a href="#" class="close">&times;</a>
    </div>
  </div>
@endif

@if (Session::has('info'))
  <div data-alert class="alert-box alert-info">
    <div class="row">
      {{ Session::get('info') }}
      <a href="#" class="close">&times;</a>
    </div>
  </div>
@endif

@if (Session::has('success'))
  <div data-alert class="alert-box alert-success">
    <div class="row">
      {{ Session::get('success') }}
      <a href="#" class="close">&times;</a>
    </div>
  </div>
@endif
