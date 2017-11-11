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
        <div class="card">
          <div class="card-image">
            <img src="{{url('storage/'.$row->photo)}}" class="responsive-img materialboxed">
            <form action="{{route('campaignPhoto.destroy')}}" method="post">
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
      <a href="{{route('campaign.edit',['campaign' => $data->id])}}">
        <button class="btn amber full-width">Ubah kampanye</button>
      </a>
    </div>
    <div class="col l6">
      <form action="{{route('campaign.destroy',['campaign' => $data->id])}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn red full-width">Hapus kampanye</button>
      </form>
    </div>
  </div>
</div>
@endsection
@push('js')
  <script type="text/javascript">
    $('.materialboxed').materialbox();
  </script>
@endpush
