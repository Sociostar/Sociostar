@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col l8 push-l2">
          <div class="row">
            <div class="col s12 m12">
              <div class="card">
                <div class="card-content">
                  <span class="card-title">Masuk</span>
                  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="input-field l12">
                      <input type="email" name="email" id="email">
                      <label for="email">Email</label>
                      @if ($errors->has('email'))
                          <span class="red-text">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="input-field l12">
                      <input type="password" name="password" id="password">
                      <label for="password">Password</label>
                      @if ($errors->has('password'))
                          <span class="red-text">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="input-field l12">
                      <a href="{{ route('password.request') }}">Lupa password?</a>
                    </div>
                </div>
                <div class="card-action">
                  <button type="submit" class="btn blue">Masuk</button>
                  <a href="{{route('register')}}">Daftar</a>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
