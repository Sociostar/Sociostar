@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col l12 s12">
      <h4>{{$data->title}}</h4>
      {!! $data->content !!}
    </div>
  </div>
  <div class="row">
    @foreach ($data->Photo as $row)
      <div class="col l4 s12">
        <img src="{{asset('storage/'.$row->photo)}}" class="full-width">
      </div>
    @endforeach
  </div>
  {{-- <div class="row">
    <div class="col l12">
      <a href="{{route('blog.index')}}">Kembali ke daftar blog</a>
    </div>
  </div> --}}
</div>
@endsection
