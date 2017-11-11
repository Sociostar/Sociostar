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
            @if ($data->userId == Auth::id())
              <form action="{{route('itemPhoto.destroy')}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="{{$row->id}}">
                <button type="submit" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">delete</i></button>
              </form>
            @endif
          </div>
        </div>
      </div>
    @endforeach
  </div>
  @if ($data->userId == Auth::id())
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
  @else
    <div class="row">
      @if ($data->status == 0)
        <a class="waves-effect waves-light btn modal-trigger blue full-width" href="#buy">Beli</a>
      @endif
      <!-- Modal Structure -->
      <div id="buy" class="modal">
        <div class="modal-content">
          <h4>Aturan pembelian</h4>
          <p>A bunch of text</p>
        </div>
        <div class="modal-footer">
          <form action="{{route('transaction.store')}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="userId" value="{{Auth::id()}}">
            <input type="hidden" name="itemId" value="{{$data->id}}">
            <button type="submit" class="btn blue">Beli</button>
          </form>
        </div>
      </div>
    </div>
  @endif
</div>
@endsection
@push('js')
  <script type="text/javascript">
    $('.modal').modal();
  </script>
@endpush
