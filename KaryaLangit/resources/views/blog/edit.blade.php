@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col l12 s12">
      <h4>Ubah blog {{$data->title}}</h4>
      <form action="{{route('blog.update',['blog' => $data->id])}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="user_id" value="{{Auth::id()}}">
        <div class="input-field">
          <input id="icon_prefix" type="text" class="validate" name="title" value="{{$data->title}}" required>
          <label for="icon_prefix">Judul</label>
        </div>
        <div class="input-field">
          <textarea name="content">{{$data->content}}</textarea>
        </div>
        <div class="file-field input-field">
          <div class="btn black">
            <span>Gambar</span>
            <input type="file" name="photo[]" multiple>
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload one or more files">
          </div>
        </div>
        <div class="input-field">
          <button type="submit" class="btn amber full-width">Simpan</button>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    @foreach ($data->Photo as $row)
      <div class="col l4 s12">
        <img src="{{asset('storage/'.$row->photo)}}" class="responsive-img full-width">
        <form action="{{route('blogPhoto.destroy',['blogphoto' => $row->id])}}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn red full-width"><i class="material-icons">delete</i></button>
        </form>
      </div>
    @endforeach
  </div>
  <div class="row">
    <div class="col l12">
      <a href="{{route('blog.index')}}">Kembali ke daftar blog</a>
    </div>
  </div>
</div>
@endsection
@push('js')
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
@endpush
