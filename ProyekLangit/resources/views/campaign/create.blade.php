@extends('layouts.app')
@section('content')
  <div class="container-fluid bg-auth">
      <div class="row">
          <div class="col l8 push-l2">
            <div class="row">
              <div class="col s12 m12">
                <div class="card">
                  <div class="card-content">
                    <span class="card-title">Buat Kampanye!</span>
                    <form method="POST" action="{{ route('campaign.store') }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="input-field l12">
                        <input type="text" name="title" id="title">
                        <label for="title">Judul</label>
                        @if ($errors->has('title'))
                            <span class="red-text">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="input-field l12">
                        <textarea name="desc" class="materialize-textarea" id="desc"></textarea>
                        <label for="desc">Deskripsi</label>
                        @if ($errors->has('desc'))
                            <span class="red-text">
                                <strong>{{ $errors->first('desc') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="input-field l12">
                        <input type="text" name="location" id="location">
                        <label for="location">Lokasi</label>
                        @if ($errors->has('location'))
                            <span class="red-text">
                                <strong>{{ $errors->first('location') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="input-field">
                        <input type="date" name="date" class="datepicker" id="datepicker">
                        <label for="datepicker">Tanggal Batas Penjualan</label>
                      </div>
                      <div class="input-field">
                        <input type="text" name="time" class="timepicker" id="timepicker">
                        <label for="timepicker">Waktu Batas Penjualan</label>
                      </div>
                      <div class="input-field l12">
                        <input type="number" name="target" id="target">
                        <label for="target">Target Dana</label>
                        @if ($errors->has('target'))
                            <span class="red-text">
                                <strong>{{ $errors->first('target') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="input-field">
                        <div class="file-field input-field">
                          <div class="btn blue">
                            <span><i class="tiny material-icons">insert_photo</i></span>
                            <input type="file" name="photo[]" multiple required>
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
                  </div>
                  <div class="card-action">
                    <button type="submit" class="btn blue full-width">Tambahkan</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
@endsection
@push('js')
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
    $('#desc').trigger('autoresize');
  });
  </script>
@endpush
