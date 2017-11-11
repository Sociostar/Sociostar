@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row full-height">
    <div class="col l12">
      <h4>Kampanye Saya</h4>
      <table class="table bordered">
        <tr>
          <th>No.</th>
          <th>Judul</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
        @foreach ($data as $index => $row)
          <tr>
            <td>{{++$index}}</td>
            <td>{{$row->title}}</td>
            <td>
              @if ($row->status == 0)
                Tutup
              @elseif($row->status == 1)
                Buka
              @else
                Sedang dipesan
              @endif
            </td>
            <td>
              <a href="{{route('campaign.show',['campaign' => $row->id])}}"><button class="btn green"><i class="material-icons">open_in_new</i></button></a>
              <button class="btn amber"><i class="material-icons">edit</i></button>
              <button class="btn red"><i class="material-icons">delete</i></button>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
    <div class="row">
      <div class="col l12">
        <a href="{{route('campaign.create')}}"><button class="btn blue">Tambah kampanye</button> </a>
      </div>
    </div>
  </div>
</div>
@endsection
