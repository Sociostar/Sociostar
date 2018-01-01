@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col l12 s12">
        <h4>Daftar Berita</h4>
      </div>
    </div>
    <div class="row">
      @foreach ($data as $row)
        <div class="col l4 s12">
            <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-image">
                  <img src="{{asset('storage/'.$row->Photo->first()->photo)}}" style="height: 200px">
                  <span class="card-title">{{$row->title}}</span>
                </div>
                <div class="card-action">
                  <a href="{{route('blog.show',['blog' => $row->id])}}">Baca Lebih Lengkap</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
