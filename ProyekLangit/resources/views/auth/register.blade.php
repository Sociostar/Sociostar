@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col l8 push-l2">
          <div class="row">
            <div class="col s12 m12">
              <div class="card">
                <div class="card-content">
                  <span class="card-title">Daftar</span>
                  <form class="form-horizontal" method="POST" action="{{ route('register')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="input-field">
                      <input type="text" name="name" id="name" required>
                      <label for="name">Nama</label>
                      @if ($errors->has('name'))
                          <span class="red-text">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="input-field">
                      <input type="email" name="email" id="email" required>
                      <label for="email">Email</label>
                      @if ($errors->has('email'))
                          <span class="red-text">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="input-field">
                      <input type="password" name="password" id="password" required>
                      <label for="password">Password</label>
                      @if ($errors->has('password'))
                          <span class="red-text">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="input-field">
                      <input type="password" name="password_confirmation" id="password-confirmation" required>
                      <label for="password-confirmation">Konfirmasi Password</label>
                    </div>
                    <div class="input-field">
                      <input type="tel" name="phone" id="phone" required>
                      <label for="phone">Telepon</label>
                      @if ($errors->has('phone'))
                          <span class="red-text">
                              <strong>{{ $errors->first('phone') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="input-field">
                      <textarea name="address" id="address" class="materialize-textarea" required></textarea>
                      <label for="address">Alamat</label>
                      @if ($errors->has('address'))
                          <span class="red-text">
                              <strong>{{ $errors->first('address') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="input-field">
                      <select name="type">
                        <option value="1" disabled>Apakah anda organisasi?</option>
                        <option value="2">Ya</option>
                        <option value="1">Tidak</option>
                      </select>
                    </div>
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
                    <div class="input-field">
                      <a href="{{route('login')}}">Sudah memiliki akun?</a>
                    </div>
                </div>
                <div class="card-action">
                  <button type="submit" class="btn blue">Daftar</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
@push('js')
  <script type="text/javascript">
  $(document).ready(function() {
    $('#address').trigger('autoresize');
    $('select').material_select();
  });
  </script>
@endpush
