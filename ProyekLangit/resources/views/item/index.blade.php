@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    @foreach ($data as $row)
      <div class="col l4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{{url('storage/'.$row->Photo->first()->photo)}}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">{{$row->title}}<i class="material-icons right">more_vert</i></span>
            <p><a href="{{route('item.show',['item' => $row->id])}}">Lihat selengkapnya</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>{{$row->desc}}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
