@extends('layouts.app')
@section('content')
  <div class="container-fluid grey lighten-4">
    <div class="row center">
      <div class="col l3 s12">
        <div class="card small grey">
          <div class="card-content white-text">
            <span class="card-title">SOLIDARITY</span>
            <p>Berdiri diatas bingkai persatuan, kebersamaan, dan solidaritas dalam mewujudkan mimpi-mimpi Indonesia di masa mandatang</p>
          </div>
        </div>
      </div>
      <div class="col l3 s12">
        <div class="card small grey">
          <div class="card-content white-text">
            <span class="card-title">EMPOWERING</span>
            <p>Berkomitmen untuk memberdayakan potensi Pemuda Indonesia sebagai langkah nyata perwujudan cita-cita Bangsa</p>
          </div>
        </div>
      </div>
      <div class="col l3 s12">
        <div class="card small grey">
          <div class="card-content white-text">
            <span class="card-title">COLLABORATION</span>
            <p>Membuka diri dengan seluruh pihak untuk berkolaborasi dan bersinergi serta menjadi wahana Pemuda dalam berukhuwah</p>
          </div>
        </div>
      </div>
      <div class="col l3 s12">
        <div class="card small grey">
          <div class="card-content white-text">
            <span class="card-title">SPIRIT OF HIJRAH</span>
            <p>Menyatukan frekuensi hati agar senantiasa berada diatas perjuangan Langit dan menjadi wadah pengembangan diri</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col l12 s12 center">
        <h4>OUT PROGRAMS</h4>
        <small>"Mulia di Negeri Langit"</small> <br>
        <i class="material-icons">remove</i>
        <i class="material-icons">arrow_drop_down_circle</i>
        <i class="material-icons">remove</i>
      </div>
    </div>
    <div class="row">
      <div class="slider">
        <ul class="slides">
          <li>
            <a href="{{route('programs.aksi-mari-berbagi')}}">
              <img src="{{asset('images/programs/aksimariberbagi.jpg')}}"> <!-- random image -->
              <div class="caption center-align">
                <h3>AKSI MARI BERBAGI</h3>
                <h5 class="light grey-text text-lighten-3">Aksi Mari Berbagi merupakan agenda tahunan yang diselenggarakan oleh LAZISMU Sukolilo Tuban untuk menggalang dan menyalurkan Sedekah, Zakat Fitrah dan Zakat Mal di momen bulan Suci Ramadhan.</h5>
              </div>
            </a>
          </li>
          <li>
            <a href="{{route('programs.gerakan-al-maun')}}">
              <img src="{{asset('images/programs/almaun.jpg')}}"> <!-- random image -->
              <div class="caption left-align">
                <h3>GERAKAN AL-MAUN</h3>
                <h5 class="light grey-text text-lighten-3">Gerakan al-Maun adalah kegiatan rutin yang berangkat dari perintah Surah al-Ma’un dalam Al-Qur’an dan risalah Rasulullah -shallallahu ‘alaihi wa sallama- untuk senantiasa menjaga, berbagi, dan membahagiakan anak-anak yatim.</h5>
              </div>
            </a>
          </li>
          <li>
            <a href="{{route('programs.donasi-kemanusiaan-negeri-syam')}}">
              <img src="{{asset('images/programs/suriah.jpg')}}"> <!-- random image -->
              <div class="caption right-align">
                <h3>DONASI KEMANUSIAAN NEGERI SYAM</h3>
                <h5 class="light grey-text text-lighten-3">ProyekLangit.id bekerja sama dengan Misi Medis Suriah, salah satu divisi kemanusiaan dari Yayasan Golden Future yang hingga saat ini telah menyalurkan bantuan sejumlah 30 Miliyar untuk Muslim Suriah.</h5>
              </div>
            </a>
          </li>
          <li>
            <a href="{{route('programs.festival-tauhid-al-mujaddid')}}">
              <img src="{{asset('images/programs/B.jpg')}}"> <!-- random image -->
              <div class="caption center-align">
                <h3>FESTIVAL TAUHIID AL-MUJADDID 1438 H</h3>
                <h5 class="light grey-text text-lighten-3">Festival Tauhiid Al-Mujaddid merupakan salah satu program tahunan TPA Masjid Al-Mujaddid bersama Mahasiswa Tuban yang berasal dari berbagai perguruan tinggi untuk menyambut Bulan Suci Ramadhan.</h5>
              </div>
            </a>
          </li>
          <li>
            <a href="{{route('programs.rumah-singgah-pecinta-al-quran')}}">
              <img src="{{asset('images/programs/C.jpg')}}"> <!-- random image -->
              <div class="caption center-align">
                <h3>RUMAH SINGGAH PECINTA AL-QURAN</h3>
                <h5 class="light grey-text text-lighten-3">Rumah Singgah Pecinta al-Quran (RSPQ) merupakan sebuah lembaga sosial-pendidikan non-profit yang memiliki tujuan untuk mengabdi kepada masyarakat guna bersama-sama memperbaiki kualitas moral atau akhlak keseharian umat manusia dengan semangat persaudaraan tanpa batas.</h5>
              </div>
            </a>
          </li>
          <li>
            <a href="{{route('programs.sedekah-rumah-cinta-anak-kanker')}}">
              <img src="{{asset('images/programs/B.jpg')}}"> <!-- random image -->
              <div class="caption center-align">
                <h3>SEDEKAH RUMAH CINTA ANAK KANKER</h3>
                <h5 class="light grey-text text-lighten-3">Relawan Rumah Cinta ibarat ruh kami dalam berjuang, karena senyuman mereka adik-adik pejuang Kanker membuat kami secara rutin bersama tim untuk datang ke Rumah Cinta Anak Kanker Bandung yang terletak di daerah Sukajadi ini.</h5>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="video-container">
    <iframe width="853" height="480" src="//www.youtube.com/embed/dWa2GvSgIak" frameborder="0" allowfullscreen></iframe>
  </div>
  <div class="container">
    <div class="row">
      <div class="col l12 s12 center">
        <h4>OUR PROGRAMS</h4>
        <small>"Mulia di Negeri Langit"</small> <br>
        <i class="material-icons">remove</i>
        <i class="material-icons">arrow_drop_down_circle</i>
        <i class="material-icons">remove</i>
      </div>
    </div>
    <div class="row">
      @foreach ($data as $row)
        <div class="col l4">
            <div class="row">
            <div class="col s12 m12">
              <div class="card">
                <div class="card-image">
                  <img src="{{asset('storage/'.$row->Photo->first()->photo)}}" style="height: 200px">
                  <span class="card-title">{{$row->title}}</span>
                </div>
                <div class="card-action">
                  <a href="{{route('blog.show',['blog' => $row->id])}}">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="row">
      <div class="col l12 s12">
        <a href="{{route('blog.list')}}">Lihat Lebih Banyak</a>
      </div>
    </div>
  </div>
@endsection
