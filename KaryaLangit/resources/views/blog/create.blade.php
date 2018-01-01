@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col l12">
      <h4>Buat Blog Baru</h4>
      <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="user_id" value="{{Auth::id()}}">
        <div class="input-field">
          <input id="icon_prefix" type="text" class="validate" name="title" required>
          <label for="icon_prefix">Judul</label>
        </div>
        <div class="input-field">
          <textarea name="content"></textarea>
        </div>
        <div class="file-field input-field">
          <div class="btn black">
            <span>Gambar</span>
            <input type="file" name="photo[]" multiple required>
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload one or more files">
          </div>
        </div>
        <div class="input-field">
          <button type="submit" class="btn green">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
@push('js')
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
@endpush
