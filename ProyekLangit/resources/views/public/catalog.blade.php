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
  <div class="container-fluid grey lighten-3">
    <div class="row">
      <div class="col l8 offset-l1 s12">
        <ul id="inline-list">
          <li>Urutkan</li>
          <li class="blue-text">Terpopuler</li>
          <li>Campaigner</li>
          <li class="blue-text">Semua</li>
          <li>Lokasi Kampanye</li>
          <li class="blue-text">Semua</li>
        </ul>
      </div>
      <div class="col l2 s12">
        <ul id="inline-list">
          <li>Mode View</li>
          <li class="blue-text">Grid View</li>
        </ul>
      </div>
    </div>
    <div class="row">
      @foreach ($data as $row)
        <div class="col l3 s12">
            <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-content grey-text center">
                  <img src="{{asset('storage/'.$row->Photo->first()->photo)}}" class="responsive-img">
                  <h5>{{$row->name}}</h5>
                  <p class="blue-text">Rp. {{number_format($row->price)}}</p>
                  <p>penawaran terakhir</p>
                  <i class="material-icons blue-text">favorite_border</i>
                  54.2k
                  <i class="material-icons blue-text">bookmark_border</i>
                  112
                  <i class="material-icons blue-text">share</i>
                  2,345
                </div>
                <div class="card-action">
                  <a href="#" class="btn blue white-text center full-width">Tawar Lelang</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
