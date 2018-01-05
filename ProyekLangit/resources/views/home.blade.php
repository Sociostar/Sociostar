@extends('layouts.app')

@section('content')
<div class="container-fluid bg-auth">
    <div class="row">
        <div class="col l8 push-l2" style="margin-top: 5%;margin-bottom: 5%">
          <div class="card medium">
            <div class="card-content">
              <span class="card-title">Selamat Datang {{Auth::user()->name}}</span>
              <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
