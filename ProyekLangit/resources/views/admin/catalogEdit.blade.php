@extends('layouts.app')
@section('content')
<div class="container-fluid bg-auth">
  <div class="row">
    <div class="col l8 s12">
      <div class="card">
        <div class="card-content">
          <span class="card-title">Perbaharui {{$data->name}} Milik {{$data->User->name}}</span>
          <form action="{{route('admin.catalog.update',['item' => $data->id])}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="input-field">
              <input type="text" name="name" id="name" value="{{$data->name}}" required>
              <label for="title">Nama</label>
              @if ($errors->has('name'))
                  <span class="red-text">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>
            <div class="input-field l12">
              <textarea name="noteFP" class="materialize-textarea" id="noteFP" disabled>{{$data->noteFP}}</textarea>
              <label for="desc">Pesan dari Idola</label>
              @if ($errors->has('noteFP'))
                  <span class="red-text">
                      <strong>{{ $errors->first('noteFP') }}</strong>
                  </span>
              @endif
            </div>
            <div class="input-field l12">
              <textarea name="desc" class="materialize-textarea" id="desc" required>{{$data->desc}}</textarea>
              <label for="desc">Pesan untuk barang ini</label>
              @if ($errors->has('desc'))
                  <span class="red-text">
                      <strong>{{ $errors->first('desc') }}</strong>
                  </span>
              @endif
            </div>
            <div class="input-field">
              <input type="number" name="amount" id="amount" value="{{$data->amount}}" required>
              <label for="amount">Jumlah Barang</label>
              @if ($errors->has('amount'))
                  <span class="red-text">
                      <strong>{{ $errors->first('amount') }}</strong>
                  </span>
              @endif
            </div>
            <div class="input-field">
              <input type="number" name="price" id="price" value="{{$data->price}}" required>
              <label for="price">Harga</label>
              @if ($errors->has('price'))
                  <span class="red-text">
                      <strong>{{ $errors->first('price') }}</strong>
                  </span>
              @endif
            </div>
            <div class="input-field">
              <input type="date" name="date" class="datepicker" id="datepicker" value="{{date('Y-m-d',strtotime($data->dueDate))}}">
              <label for="datepicker">Tanggal Batas Penjualan</label>
            </div>
            <div class="input-field">
              <input type="text" name="time" class="timepicker" id="timepicker" value="{{date('H:i',strtotime($data->dueDate))}}">
              <label for="timepicker">Waktu Batas Penjualan</label>
            </div>
            <div class="input-field">
              <div class="file-field input-field">
                <div class="btn blue">
                  <span><i class="tiny material-icons">insert_photo</i> </span>
                  <input type="file" name="photo[]" multiple>
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
                @if ($errors->has('photo'))
                    <span class="red-text">
                        <strong>{{ $errors->first('photo') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="input-field">
              <select name="status">
                <option value="0">Sembunyikan dari Publik</option>
                <option value="1">Tampilkan ke Publik</option>
              </select>
              <label>Status Barang</label>
            </div>
        </div>
        <div class="card-action">
          <button type="submit" class="btn amber full-width">Simpan</button>
        </div>
        </form>
      </div>
    </div>
    <div class="col l4">
      <div class="card large">
        <div class="card-content ">
          <span class="card-title">Foto</span>
          @foreach ($data->Photo as $row)
            <div class="col l6 s12">
              <img src="{{asset('storage/'.$row->photo)}}" class="responsive-img">
              <form action="{{route('itemPhoto.destroy')}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="{{$row->id}}">
                <button type="submit" class="btn red"><i class="material-icons">delete</i></button>
              </form>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('js')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rome/2.1.22/rome.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
  <script src="{{asset('js/material-datetime-picker.js')}}" charset="utf-8"></script>

  <script type="text/javascript">
  $(document).ready(function() {
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15, // Creates a dropdown of 15 years to control year,
      today: 'Today',
      clear: 'Clear',
      close: 'Ok',
      closeOnSelect: false // Close upon selecting a date,
    });
    $('.timepicker').pickatime({
      default: 'now', // Set default time: 'now', '1:30AM', '16:30'
      fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
      twelvehour: false, // Use AM/PM or 24-hour format
      donetext: 'OK', // text for done-button
      cleartext: 'Clear', // text for clear-button
      canceltext: 'Cancel', // Text for cancel-button
      autoclose: false, // automatic close timepicker
      ampmclickable: true, // make AM PM clickable
      aftershow: function(){} //Function for after opening timepicker
    });
    $('select').material_select();
  });
  </script>
@endpush
