@extends('layouts.app')

@section('navbar')
@include("use.navbar", ['invert' => true])
@endsection

@section('content')
<div class="hero--page hero--page-1 bg--primary flex">
  <div class="section flex flex--column flex--justify-center">
    <div class="flex p-2 my-auto rounded bg--primary flex--column flex--justify-center flex--align-center" data-aos='fade-in'>
      <h1 class='mb-1'>Login</h1>
      <hr>

      <form class="form" action="{{ route('login') }}" method='post'>

        @csrf

        <div class="form--input flex flex--align-center">
          <label for="email" class="form--label flex--auto">Email</label>
          <input type="text" id="email" name="email" class="form--control">
        </div>

        <div class="form--input flex flex--align-center">
          <label for="password" class="form--label flex--auto">Password</label>
          <input type="password" id='password' name='password' class='form--control'>
        </div>

        <div class="form--input flex flex--align-center">
          <input type="checkbox" id="remember" name="remember" class="form--control flex--auto form--inline">
          <label for="remember" class="form--label flex--auto mb-0 ml-1 pr-0">Remember me</label>
        </div>

        <div class="form--input flex flex--align-center flex--justify-right">
          <button type="submit" class='btn bg--white color--primary flex--auto'>Let's go!</button>
        </div>

      </form>

    </div>
  </div>
</div>
@endsection

@section('footer')
@include('use.footer')
@endsection

{{-- <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
  <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group row">
      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

      <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
          value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
    </div>

    <div class="form-group row">
      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

      <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
          name="password" required autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-6 offset-md-4">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" id="remember"
            {{ old('remember') ? 'checked' : '' }}>

          <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
          </label>
        </div>
      </div>
    </div>

    <div class="form-group row mb-0">
      <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary">
          {{ __('Login') }}
        </button>

        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
          {{ __('Forgot Your Password?') }}
        </a>
        @endif
      </div>
    </div>
  </form>
</div>
</div>
</div>
</div>
</div> --}}