@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row full-height">
    <div class="col l12">
      <h4>Transaksi saya</h4>
      <p>Terima kasih telah melakukan transaksi.</p>
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
              <a href="{{url('storage/'.$row->photo)}}" target="_blank">
                <button class="btn green"><i class="material-icons">slideshow</i></button>
              </a>
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
