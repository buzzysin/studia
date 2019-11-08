@extends('layouts.app')

@section('navbar')
@include("use.navbar", ['invert' => true])
@endsection

@section('content')
<div class="hero--page hero--page-2 bg--primary flex">
  <div class="section flex flex--column flex--justify-center">
    <div class="flex p-2 my-auto rounded bg--primary flex--column flex--justify-center flex--align-center" data-aos='fade-in'>
      <h1 class='mb-1'>Register</h1>
      <hr>

      <form class="form" action="{{ route('register') }}" method='post'>

        @csrf

        <div class="form--input flex">
          <label for="name" class="form--label flex--auto">Full Name</label>
          <input type="text" id="name" name="name" class="form--control">
        </div>

        <div class="form--input flex">
          <label for="email" class="form--label flex--auto">Email</label>
          <input type="text" id="email" name="email" class="form--control">
        </div>

        <div class="form--input flex">
          <label for="password" class="form--label flex--auto">Password</label>
          <input type="password" id='password' name='password' class='form--control'>
        </div>

        <div class="form--input flex">
          <label for="password_confirmation" class="form--label flex--auto">Confirm password</label>
          <input type="password" id='password_confirmation' name='password_confirmation'
            class='form--control'>
        </div>

        <div class="form--input flex flex--justify-right">
          <button type="submit" class='btn bg--white color--primary flex--auto'>Sign me up!</button>
        </div>

      </form>

    </div>
  </div>
</div>
@endsection

@section('footer')
@include("use.footer")
@endsection

{{-- <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Register') }}</div>

<div class="card-body">
  <form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

      <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
          value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
    </div>

    <div class="form-group row">
      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

      <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
          value="{{ old('email') }}" required autocomplete="email">

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
          name="password" required autocomplete="new-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
    </div>

    <div class="form-group row">
      <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

      <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
          autocomplete="new-password">
      </div>
    </div>

    <div class="form-group row mb-0">
      <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
          {{ __('Register') }}
        </button>
      </div>
    </div>
  </form>
</div>
</div>
</div>
</div>
</div> --}}