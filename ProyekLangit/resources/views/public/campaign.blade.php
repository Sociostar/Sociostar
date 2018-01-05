@extends('layouts.app')
@push('css')
  <style media="screen">
  .bg-header{
    background-image: url('{{asset('img/landingpage/header.png')}}');
    background-size: cover;
  }
  </style>
@endpush
@section('content')
  <div class="container-fluid">
    <div class="row white-text full-height bg-header" id="home">
      <div class="col l5">
        <h3><b>Buatlah Perubahan <br> dan Jadilah Inspirator!</b></h3>
        <p>Temukan pengalaman berharga dengan memiliki barang dan bantu orang-orang di sekitarmu! Setiap pembelian barang milik idolamu turut membantu berbagai kegiatan sosial di sekitar kita.</p>
        <a href="#"><button class="btn light-blue lighten-1 white-text">saya ingin membantu!</button> </a>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col s12 m12 l12 center">
        <h3 class="blue-text">Daftar Kampanye</h3>
      </div>
    </div>
    <div class="row">
      @foreach ($data as $row)
        <div class="col l3 s6">
          <div class="card">
            <div class="card-content center">
              <img src="{{asset('storage/'.$row->Photo->first()->photo)}}" class="responsive-img">
              <h5>{{$row->title}}</h5>
              <p>{{$row->location}}</p>
            </div>
            <div class="card-action">
              <a href="{{route('campaign.public.show',['campaign' => $row->id])}}" class="btn blue white-text full-width">Baca selengkapnya</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
