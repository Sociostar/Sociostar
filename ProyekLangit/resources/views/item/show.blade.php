@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col l12">
      <h4>{{$data->title}}</h4>
      <table>
        <tr>
          <td>Nama barang</td>
          <td>{{$data->title}}</td>
        </tr>
        <tr>
          <td>Nama pemilik</td>
          <td>{{$data->User->name}}</td>
        </tr>
        <tr>
          <td>Deskripsi</td>
          <td>{{$data->desc}}</td>
        </tr>
        <tr>
          <td>Harga</td>
          <td>Rp. {{number_format($data->price)}}</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="row">
    @foreach ($data->Photo as $row)
      <div class="col l4 s12">
        <div class="card">
          <div class="card-image">
            <img src="{{url('storage/'.$row->photo)}}" class="responsive-img materialboxed">
            <form action="{{route('itemPhoto.destroy')}}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="id" value="{{$row->id}}">
              <button type="submit" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">delete</i></button>
            </form>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  <div class="row">
    <div class="col l6">
      <a href="{{route('item.edit',['item' => $data->id])}}">
        <button class="btn amber full-width">Ubah barang</button>
      </a>
    </div>
    <div class="col l6">
      <form action="{{route('item.destroy',['item' => $data->id])}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn red full-width">Hapus barang</button>
      </form>
    </div>
  </div>
</div>
@endsection
