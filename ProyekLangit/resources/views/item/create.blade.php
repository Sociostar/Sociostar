@extends('layouts.app')
@section('content')
<div class="container-fluid bg-auth">
  <div class="row">
    <div class="col l8 push-l2 s12">
      <div class="card">
        <div class="card-content">
          <span class="card-title">Tambah barang</span>
          <form action="{{route('item.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="input-field">
              <input type="text" name="name" id="name" required>
              <label for="title">Nama</label>
              @if ($errors->has('name'))
                  <span class="red-text">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>
            <div class="input-field l12">
              <textarea name="noteFP" class="materialize-textarea" id="noteFP" required></textarea>
              <label for="desc">Pesan untuk barang ini</label>
              @if ($errors->has('noteFP'))
                  <span class="red-text">
                      <strong>{{ $errors->first('noteFP') }}</strong>
                  </span>
              @endif
            </div>
            <div class="input-field">
              <input type="number" name="amount" id="amount" required>
              <label for="amount">Jumlah Barang</label>
              @if ($errors->has('amount'))
                  <span class="red-text">
                      <strong>{{ $errors->first('amount') }}</strong>
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
                  <span><i class="tiny material-icons">insert_photo</i> </span>
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
          <button type="submit" class="btn blue full-width">Tambah</button>
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
