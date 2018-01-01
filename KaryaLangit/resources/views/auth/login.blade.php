@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col l6 offset-l3">
            <div class="row">
            <div class="col s12 m12">
              <div class="card">
                <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="card-content">
                  <span class="card-title">Selamat datang</span>
                    <div class="input-field">
                      <input id="email" type="email" class="validate" name="email" required>
                      <label for="email">Email</label>
                      @if ($errors->has('email'))
                          <small class="red-text">{{ $errors->first('email') }}</small>
                      @endif
                    </div>
                    <div class="input-field">
                      <input id="password" type="password" class="validate" name="password" value="{{ old('email') }}" required>
                      <label for="password">Password</label>
                      @if ($errors->has('password'))
                          <small class="red-text">{{ $errors->first('password') }}</small>
                      @endif
                    </div>
                    <a href="{{ route('password.request') }}">Lupa password?</a>
                </div>
                <div class="card-action">
                  <button type="subtmit" class="btn blue">Masuk</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
