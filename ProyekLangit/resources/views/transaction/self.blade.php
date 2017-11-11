@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row full-height">
    <div class="col l12">
      <h4>Transaksi saya</h4>
      <p>Segera lakukan pembayaran dan konfirmasi.</p>
      <table class="table bordered">
        <tr>
          <th>No.</th>
          <th>Barang</th>
          <th>Harga</th>
          <th>Pemilik</th>
          <th>Konfirmasi</th>
        </tr>
        @foreach ($data as $index => $row)
          <tr>
            <td>{{++$index}}</td>
            <td>
              <a href="{{route('item.show',['item' => $row->itemId])}}">{{$row->Item->title}}</a>
            </td>
            <td>Rp. {{number_format($row->Item->price)}}</td>
            <td>{{$row->User->name}}</td>
            <td>
              <a class="waves-effect waves-light modal-trigger" href="#modal{{$index}}"><button class="btn green"><i class="material-icons">payment</i></button></a>
              <!-- Modal Structure -->
              <div id="modal{{$index}}" class="modal">
                <div class="modal-content">
                  <h4>Konfirmasi pembayaran</h4>
                  <form action="{{route('transaction.confirmation',['transaction' => $row->id])}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="file-field input-field">
                      <div class="btn green">
                        <span>File</span>
                        <input type="file" name="photo" required>
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Masukan bukti pembayaran">
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn green">Simpan</button>
                </div>
                </form>
              </div>
              <form action="{{route('transaction.destroy',['transaction' => $row->id])}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn red"><i class="material-icons">close</i></button>
              </form>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
@push('js')
  <script type="text/javascript">
  $(document).ready(function(){
    $('.modal').modal();
  });
  </script>
@endpush
