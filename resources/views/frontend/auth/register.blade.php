@extends('frontend.auth.layout')

@section('heading')

  <div class="row">
    <h2>Register</h2>
  </div>

@stop

@section('content')

  <div class="row">

    <form method="post" action="{{ route('register') }}" data-abide>

      <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

      <div class="row">
        <input type="text"
               name="name"
               value="{{ old('name', session()->get('socialize.name')) }}"
               placeholder="Nama"
               maxlength="255"
               required pattern="[a-zA-Z\s]+" />
        <small class="error">Silahkan isi dengan nama yang valid.</small>
      </div>

      <div class="row">
        <input type="email"
               name="email"
               value="{{ old('email', session()->get('socialize.email')) }}"
               placeholder="Email"
               maxlength="255"
               required />
        <small class="error">Silahkan isi email yang valid.</small>
      </div>

      <div class="row">
        <input type="password"
               name="password"
               value="{{ old('password') }}"
               placeholder="Password"
               maxlength="255"
               required />
        <small class="error">Silahkan isi password minimal 6 karakter.</small>
      </div>

      <div class="row">
        <button type="submit">Register</button>
      </div>

    </form>

  </div>

@stop
