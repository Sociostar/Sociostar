@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col l8 push-l2">
      <div class="card">
        <div class="card-content">
          <span class="card-title">Tambah barang</span>
          <form action="{{route('item.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="input-field">
              <input type="text" name="title" id="title" required>
              <label for="title">Nama</label>
              @if ($errors->has('title'))
                  <span class="red-text">
                      <strong>{{ $errors->first('title') }}</strong>
                  </span>
              @endif
            </div>
            <div class="input-field l12">
              <textarea name="desc" class="materialize-textarea" id="desc" required></textarea>
              <label for="desc">Deskripsi</label>
              @if ($errors->has('desc'))
                  <span class="red-text">
                      <strong>{{ $errors->first('desc') }}</strong>
                  </span>
              @endif
            </div>
            <div class="input-field">
              <input type="number" name="price" id="price" required>
              <label for="price">Harga</label>
              @if ($errors->has('price'))
                  <span class="red-text">
                      <strong>{{ $errors->first('price') }}</strong>
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
          <button type="submit" class="btn blue">Tambah</button>
        </div>
        </form>
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
