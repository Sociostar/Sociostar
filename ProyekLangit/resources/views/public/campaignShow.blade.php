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
      <div class="col l5 offset-l1">
        <h3>Kisah di Balik {{$data->title}}</h3>
        <p>
          {{$data->desc}}
        </p>
        <a href="#" class="btn blue white-text">Kontak NGO</a>
      </div>
      <div class="col l5 offset-l1">
        <h3>Informasi Campaign</h3>
        <p>
          <b>Campaign Berakhir</b> <br>
          {{$data->dueDate}} <br>
          <b>Lokasi Campaign</b> <br>
          {{$data->location}} <br>
          <b>Target Penggalangan Dana</b> <br>
          Rp. {{number_format($data->price)}} <br>
          <b>NGO</b> <br>
          {{$data->User->name}}
        </p>
      </div>
    </div>
  </div>
@endsection
