@extends('layouts.app')
@section('content')
  <div class="container">
      <div class="row">
          <div class="col l8 push-l2">
            <div class="row">
              <div class="col s12 m12">
                <div class="card">
                  <div class="card-content">
                    <span class="card-title">Buat kampanye!</span>
                    <form method="POST" action="{{ route('campaign.store') }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="input-field l12">
                        <input type="text" name="title" id="title">
                        <label for="title">Judul</label>
                        @if ($errors->has('title'))
                            <span class="red-text">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="input-field l12">
                        <textarea name="desc" class="materialize-textarea" id="desc"></textarea>
                        <label for="desc">Deskripsi</label>
                        @if ($errors->has('desc'))
                            <span class="red-text">
                                <strong>{{ $errors->first('desc') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="input-field">
                        <div class="file-field input-field">
                          <div class="btn blue">
                            <span>Foto</span>
                            <input type="file" name="photo[]" multiple required>
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
                  <div class="card-action">
                    <button type="submit" class="btn blue">Tambahkan</button>
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
    $('#desc').trigger('autoresize');
  });
  </script>
@endpush
