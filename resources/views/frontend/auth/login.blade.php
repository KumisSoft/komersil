@extends('frontend.auth.layout')

@section('heading')

  <div class="row">
    <h2>Login/Register</h2>
  </div>

@stop

@section('content')

  <div class="row text-center">

    <form action="{{ route('oauth.github') }}" method="POST" style="display: inline-block; margin: 0; padding: 0;">
      <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
      <button type="submit" class="" style="margin: 0;">
        <i class="fa fa-github fa-2x" style="vertical-align: middle;"></i> GitHub
      </button>
    </form>

    <form action="{{ route('oauth.facebook') }}" method="POST" style="display: inline-block; margin: 0; padding: 0;">
      <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
      <button type="submit" class="" style="margin: 0;">
        <i class="fa fa-facebook fa-2x" style="vertical-align: middle;"></i> Facebook
      </button>
    </form>

    <form action="{{ route('oauth.google') }}" method="POST" style="display: inline-block; margin: 0; padding: 0;">
      <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
      <button type="submit" class="" style="margin: 0;">
        <i class="fa fa-google fa-2x" style="vertical-align: middle;"></i> Google
      </button>
    </form>

    <form action="{{ route('oauth.twitter') }}" method="POST" style="display: inline-block; margin: 0; padding: 0;">
      <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
      <button type="submit" class="" style="margin: 0;">
        <i class="fa fa-twitter fa-2x" style="vertical-align: middle;"></i> Twitter
      </button>
    </form>
  </div>

  <hr/>

  <div class="row">
    <form method="post" action="{{ route('login') }}" style="">
      <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

      <div class="row">
        <input type="text" name="username" value="{{ old('username') }}" placeholder="Email/Username"/>
      </div>

      <div class="row">
        <input type="password" name="password" value="{{ old('password') }}" placeholder="Password"/>
      </div>

      <div class="row">
        <button type="submit">Login</button>
      </div>

    </form>
  </div>





@stop
