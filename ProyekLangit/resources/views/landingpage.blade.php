<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.css')}}"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />
      <title>Proyek Langit</title>

      <style media="screen">
      .navbar-text{
        color: #bdbdbd;
      }
      .full-height{
        min-height: 684px;
      }
      .bg-header{
        background-image: url('{{asset('img/landingpage/header.png')}}');
        background-size: cover;
        padding-top: 200px;
        padding-left: 50px;
      }
      .aboutus{
        background-image: url('{{asset('img/landingpage/about_us.png')}}');
        background-size: cover;
      }
      .content1{
        background-image: url('{{asset('img/landingpage/bg_value.png')}}');
        background-size: cover;
      }
      .center-content{
        padding-top: 15%;
      }
      ul#footer li {
          display:inline;
          margin: 5%;
      }
      </style>
    </head>

    <body>
      <!-- START NAVBAR -->
      @include('layouts.navbar')
      <!-- END NAVBAR -->
      <!-- START HEADER -->
      <div class="container-fluid">
        <div class="row white-text full-height bg-header section scrollspy" id="home">
          <div class="col l5">
            <h3><b>Buatlah Perubahan <br> dan Jadilah Inspirator!</b></h3>
            <p>Temukan pengalaman berharga dengan memiliki barang dan bantu orang-orang di sekitarmu! Setiap pembelian barang milik idolamu turut membantu berbagai kegiatan sosial di sekitar kita.</p>
            <a href="#"><button class="btn light-blue lighten-1 white-text">saya ingin membantu!</button> </a>
          </div>
        </div>
      </div>
      <!-- END HEADER -->
      <!-- START Content 1 -->
      <div class="container-fluid full-height aboutus">
        <div class="row grey-text">
          <div class="col l5 offset-l1" style="margin-top : 10%">
            <h4>Temukan Barang <br>Favorit Milik Idolamu!</h4>
            <p>Temukan dan miliki barang favorite milik idolamu. dengan membeli produk tersebut
            otomatis kamu telah berpartisipasi dalam membantu campaign sosial yang dilakukan oleh idolamu dan membantu menolong mereka yang membutuhkan.</p>
            <button class="btn light-blue lighten-1 white-text">Temukan Barang Favoritmu!</button>
          </div>
          <div class="col l6">
            <img class="responsive-img" src="{{asset('img/landingpage/gambar1.png')}}">
          </div>
        </div>
      </div>
      <!-- END Content 1 -->
      <!-- START Content 2 -->
      <div class="container full-height grey-text">
        <div class="row">
          <div class="col l12 center">
            <h4>Deal Terbaik Untuk Anda!</h4>
          </div>
        </div>
        <div class="row">
          <div class="col l4">
            <div class="card">
              <div class="card-image">
                <img src="{{asset('img/landingpage/produk1.png')}}">
              </div>
              <div class="card-content">
                <div class="row">
                  <div class="col l6">
                    <h6>Nike Shoes</h6>
                    <small>Chelsea Islan</small>
                  </div>
                  <div class="col l16">
                    <h6>Rp.50.000.000</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col l1">
                    <i class="material-icons blue-text">favorite_border</i>
                  </div>
                  <div class="col l2">
                    54.2k
                  </div>
                  <div class="col l1">
                    <i class="material-icons blue-text">bookmark_border</i>
                  </div>
                  <div class="col l2">
                    112
                  </div>
                  <div class="col l1">
                    <i class="material-icons blue-text">share</i>
                  </div>
                  <div class="col l2">
                    2,345
                  </div>
                </div>
              </div>
              <div class="card-action">
              <button class="btn light-blue lighten-1 white-text full-width center">Beli</button>
              </div>
            </div>
          </div>
          <div class="col l4">
            <div class="card">
              <div class="card-image">
                <img src="{{asset('img/landingpage/produk2.png')}}">
              </div>
              <div class="card-content">
                <div class="row">
                  <div class="col l6">
                    <h6>Hermes Bag</h6>
                    <small>Laudya Cintya Bella</small>
                  </div>
                  <div class="col l16">
                    <h6>Rp.200.000.000</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col l1">
                    <i class="material-icons blue-text">favorite_border</i>
                  </div>
                  <div class="col l2">
                    54.2k
                  </div>
                  <div class="col l1">
                    <i class="material-icons blue-text">bookmark_border</i>
                  </div>
                  <div class="col l2">
                    112
                  </div>
                  <div class="col l1">
                    <i class="material-icons blue-text">share</i>
                  </div>
                  <div class="col l2">
                    2,345
                  </div>
                </div>
              </div>
              <div class="card-action">
              <button class="btn light-blue lighten-1 white-text full-width center">Beli</button>
              </div>
            </div>
          </div>
          <div class="col l4">
            <div class="card">
              <div class="card-image">
                <img src="{{asset('img/landingpage/produk3.png')}}">
              </div>
              <div class="card-content">
                <div class="row">
                  <div class="col l6">
                    <h6>Signed Shirt</h6>
                    <small>Chelsea Islan</small>
                  </div>
                  <div class="col l16">
                    <h6>Rp.2.000.000</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col l1">
                    <i class="material-icons blue-text">favorite_border</i>
                  </div>
                  <div class="col l2">
                    54.2k
                  </div>
                  <div class="col l1">
                    <i class="material-icons blue-text">bookmark_border</i>
                  </div>
                  <div class="col l2">
                    112
                  </div>
                  <div class="col l1">
                    <i class="material-icons blue-text">share</i>
                  </div>
                  <div class="col l2">
                    2,345
                  </div>
                </div>
              </div>
              <div class="card-action">
              <button class="btn light-blue lighten-1 white-text full-width center">Beli</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col l12 center">
            <h5 class="blue-text">Lihat Semua Barang <i class="small material-icons blue-text">arrow_forward</i></h5>
          </div>
        </div>
      </div>
      <!-- END Content 2 -->
      <!-- START CONTENT 1 -->
      <div class="container-fluid full-height content1 blue" style="padding-left: 5%">
        <div class="row">
          <div class="col l3 white-text section scrollspy" style="margin-top: 10%; margin-bottom: 10%" id="benefit">
            <h3>Bantu kami menyebarkan nilai-nilai kami!</h3>
          </div>
        </div>
        <div class="row white-text">
          <div class="col l4">
            <h4>Peduli</h4>
            <p>Menggerakkan hati setiap orang untuk semakin peduli terhadap isu sosial di lingkungan sekitar.</p>
          </div>
          <div class="col l4">
            <h4>Bahagia</h4>
            <p>Keuntungan dari penjualan barang eksklusif milik artis akan disalurkan kepada mreka yang sedang membutuhkan bantuan.</p>
          </div>
          <div class="col l4">
            <h4>Dekat</h4>
            <p>Mendekatkan hubungan antara idola dengan fans mereka melalui penjualan barang eksklusif selebriti.</p>
          </div>
        </div>
      </div>
      <!-- END CONTENT 1 -->
      <!-- START SUBSCRIBE -->
      <div class="container full-height center center-content">
        <div class="row">
          <div class="col l12">
            <h4 class="grey-text text-darken-2">Jadilah pelopor dalam membantu mereka!</h4>
            <p class="grey-text text-darken-1" style="margin-top: 5%">Temukan pengalaman berharga langsung dari idolamu sekaligus <br> membantu mereka yang membutuhkan</p>
            <button class="btn light-blue lighten-1 white-text" style="margin-top: 6%">Daftar Menggunakan Email</button>
          </div>
        </div>
      </div>
      <!-- END SUBSCRIBE -->
      {{-- START INFLUENCER --}}
      <div class="container-fluid aboutus"style="padding-left: 5%;padding-right: 5%;">
        <div class="row">
          <div class="col l6">
              <img src="{{asset('img/landingpage/gambar2.png')}}" class="responsive-img">
          </div>
          <div class="col l5 offset-l1 grey-text" style="margin-top: 10%">
            <h4 style="margin-top: 5%">Bergabunglah Sebagai Influencer Mereka!</h4>
            <p>Lebih dekat lebih bersahabat dengan fans Anda sekaligus <br>
            menjadi pioneer, bergeraklah bersama fans Anda untuk membawa perubahan! </p>
            <button class="btn light-blue lighten-1 white-text" style="margin-top: 10%">Bergabung Sebagai Influencer</button>
          </div>
        </div>
        <div class="row">
          <div class="col l5 offset-l1 grey-text" style="margin-top: 10%">
            <h4 style="margin-top: 5%">Bergabunglah Sebagai Non-Governmental Organization!</h4>
            <p>Tingkatkan awareness dan fundrising apa yang Anda perjuangkan! </p>
            <button class="btn light-blue lighten-1 white-text" style="margin-top: 10%">Bergabung Sebagai NGO</button>
          </div>
          <div class="col l6">
              <img src="{{asset('img/landingpage/gambar3.png')}}" class="responsive-img">
          </div>
        </div>
      </div>
      {{-- END INFLUENCER --}}
      {{-- START SUBSCRIBE --}}
      <div class="container-fluid">
        <div class="row" style="height: 100px;padding-top: 20px">
          <div class="col offset-l2 l4 s12">
            <div class="input-field col s12">
              <input id="last_name" type="text" class="validate white" style="border-radius: 10px">
              <label for="last_name">Masukan Alamat Email Anda</label>
            </div>
          </div>
          <div class="col l4 s12">
            <div class="input-field col s12">
              <button class="btn green white-text full-width">Daftar Sekarang</button>
            </div>
          </div>
        </div>
      </div>
      {{-- END SUBSCRIBE --}}
      {{-- START FOOTER --}}
      @include('layouts.footer')
      {{-- END FOOTER --}}
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
      <script type="text/javascript">
      $(document).ready(function(){
        $('.scrollspy').scrollSpy();
        $(".button-collapse").sideNav();
      });
      </script>
    </body>
  </html>
