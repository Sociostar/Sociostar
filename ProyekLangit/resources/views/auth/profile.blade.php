@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col l4">
          <form class="form-horizontal" method="POST" action="{{ route('profile.update')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
          <img src="{{url('storage/'.Auth::user()->photo)}}" class="responsive-img">
          <div class="input-field">
            <div class="file-field input-field">
              <div class="btn blue">
                <span>File</span>
                <input type="file" name="photo">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
              @if ($errors->has('photo'))
                  <span class="red-text">
                      <strong>{{ $errors->first('photo') }}</strong>
                  </span>
              @endif
            </div>
          </div>
        </div>
        <div class="col l8">
            <div class="input-field">
              <input type="text" name="name" id="name" value="{{Auth::user()->name}}" required>
              <label for="name">Nama</label>
              @if ($errors->has('name'))
                  <span class="red-text">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>
            <div class="input-field">
              <input type="email" name="email" id="email" value="{{Auth::user()->email}}" required>
              <label for="email">Email</label>
              @if ($errors->has('email'))
                  <span class="red-text">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <div class="input-field">
              <input type="password" name="password" id="password" required>
              <label for="password">Password Baru</label>
              @if ($errors->has('password'))
                  <span class="red-text">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
            <div class="input-field">
              <input type="tel" name="phone" id="phone" value="{{Auth::user()->phone}}" required>
              <label for="phone">Telepon</label>
              @if ($errors->has('phone'))
                  <span class="red-text">
                      <strong>{{ $errors->first('phone') }}</strong>
                  </span>
              @endif
            </div>
            <div class="input-field">
              <textarea name="address" id="address" class="materialize-textarea" required>{{Auth::user()->address}}</textarea>
              <label for="address">Alamat</label>
              @if ($errors->has('address'))
                  <span class="red-text">
                      <strong>{{ $errors->first('address') }}</strong>
                  </span>
              @endif
            </div>
            <div class="input-field">
              <button type="submit" class="btn blue full-width">Simpan</button>
            </div>
          </form>
        </div>
    </div>
</div>
@endsection
