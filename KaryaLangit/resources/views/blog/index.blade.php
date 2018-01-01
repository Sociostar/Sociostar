@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col l12 s12">
        <h4 class="left">Daftar Blog</h4>
      </div>
    </div>
    <div class="row">
      <div class="col l12 s12">
        <a href="{{route('blog.create')}}"><button class="btn blue right"><i class="material-icons left">add</i> Tambah</button></a>
        <table>
          <thead>
            <tr>
              <th>No.</th>
              <th>Judul</th>
              <th class="right"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $index => $row)
              <tr>
                <td>{{++$index}}</td>
                <td>{{$row->title}}</td>
                <td class="right">
                  <a href="{{route('blog.show',['blog' => $row->id])}}" class="btn-flat green-text waves-effect waves-teal"><i class="material-icons">search</i></a>
                  <br>
                  <a href="{{route('blog.edit',['blog' => $row->id])}}" class="btn-flat amber-text waves-effect waves-teal"><i class="material-icons">edit</i></a>
                  <br>
                  <form action="{{route('blog.destroy',['blog' => $row->id])}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn-flat red-text waves-effect waves-teal"><i class="material-icons">delete</i></button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
