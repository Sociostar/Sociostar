@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <h4>Lihat kampanye</h4>
    <table>
      <tr>
        <td>Judul</td>
        <td>{{$data->title}}</td>
      </tr>
      <tr>
        <td>Deskripsi</td>
        <td>{{$data->desc}}</td>
      </tr>
      <tr>
        <td>Status</td>
        <td>
          @if ($data->status == 0)
            Tutup
          @elseif($data->status == 1)
            Buka
          @else
            Sedang dipesan
          @endif
        </td>
      </tr>
    </table>
  </div>
  <div class="row">
    @foreach ($data->Photo as $row)
      <div class="col l4 s12">
        <img src="{{url('storage/'.$row->photo)}}" class="responsive-img">
      </div>
    @endforeach
  </div>
</div>
@endsection
