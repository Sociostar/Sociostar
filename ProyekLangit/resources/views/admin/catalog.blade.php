@extends('layouts.app')
@section('content')
  <div class="container-fluid bg-auth">
    <div class="row">
      <div class="col l8 offset-l2 s12">
        <div class="card large">
          <div class="card-content">
            <span class="card-title">Katalog Idola</span>
            <table class="table">
              <thead>
                <tr>
                  <td>No.</td>
                  <td>Nama</td>
                  <td>Idola</td>
                  <td>Aksi</td>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $index => $row)
                  <tr>
                    <td>{{++$index}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->User->name}}</td>
                    <td>
                      <a href="{{route('admin.catalogFp.show',['item' => $row->id])}}" class="btn amber"><i class="material-icons">edit</i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
