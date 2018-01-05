@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row full-height">
    <div class="col l12">
      <h4>Katalog Saya</h4>
      <table class="table bordered">
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Harga</th>
          <th>Aksi</th>
        </tr>
        @foreach ($data as $index => $row)
          <tr>
            <td>{{++$index}}</td>
            <td>{{$row->name}}</td>
            <td>Rp. {{number_format($row->price)}}</td>
            <td>
              <div class="row">
                <div class="col l4 s12">
                  <a href="{{route('item.show',['item' => $row->id])}}"><button class="btn green"><i class="material-icons">open_in_new</i></button></a>
                </div>
                <div class="col l4 s12">
                  <a href="{{route('item.edit',['item' => $row->id])}}">
                    <button class="btn amber"><i class="material-icons">edit</i></button>
                  </a>
                </div>
                <div class="col l4 s12">
                  <form action="{{route('item.destroy',['item' => $row->id])}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn red"><i class="material-icons">delete</i></button>
                  </form>
                </div>
              </div>
            </td>
          </tr>
        @endforeach
      </table>
      <a href="{{route('item.create')}}">
        <button class="btn blue">Tambah barang</button>
      </a>
    </div>
  </div>
</div>
@endsection
