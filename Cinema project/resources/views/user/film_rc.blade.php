 @extends ('user.main')

@section ('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

    <link rel="stylesheet" href="{{ asset('css/film.css') }}">
    <link rel="stylesheet" href="/template/css/film.css">
    <link rel="stylesheet" type="text/css" href="film.css">
@endsection

@section ('content')
        
          <!--Tạo header cho trang-->
        <header>
            <a href="/user/menu">
                <img src="..\image/logo.png" alt="Logo" class="logo">
            </a>
            <input type="checkbox" id="menu">
            <label for="menu"> 
                <i class="fa-solid fa-bars"></i></label>
            <nav>
              <ul>
                <li>
                  <a href="#0">Phim▾</a>
                  <ul class="dropdown">
                    <li> <a href="/user/film_rc">Phim đang chiếu</a></li>
                    <li> <a href="/user/film_cm">Phim sắp chiếu</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#0">Thành viên▾</a>
                  <ul class="dropdown">
                    <li> <a href="#1">Tài khoản thành viên</a></li>
                    <li> <a href="#1">Quyền lợi</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#0">Khuyến mãi</a>
                </li>
                <li>
                  <a href="#0">Giới thiệu▾</a>
                  <ul class="dropdown">
                    <li> <a href="">Về chúng tôi</a></li>
                    <li> <a href="">Các quy định</a></li>
                    <li> <a href="">Các điều khoản</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#0">Liên hệ</a>
                </li>
            </ul>
            </nav>
            
            {{-- <partial name="_LoginPartial" /> --}}
              <ul class="navbar-nav">
                @auth
                    <h3>
                        <a id="manage" class="nav-link text-dark" href="{{ route('profile.show') }}" title="Manage">{{ Auth::user()->cus_name }}</a>
                    </h3>
                    <li class="nav-item">
                        <form id="logoutForm" class="form-inline" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button id="logout" type="submit" class="nav-link btn btn-link text-dark">Logout</button>
                        </form>
                    </li>
                    @endauth
            </ul>
        </header>

          <!----------------- Banner ------------->
          <div class="body-banner">
            <div class="banner">
              <div class="banner-slider">
                <div class="banner-img"> 
                  <a href="#b1"> <img src="..\image/1.png" alt=""> </a>
                </div>
              </div>
              <div class="banner-slider">
                <div class="banner-img"> 
                  <a href="#b2"> <img src="..\image/2.png" alt=""> </a>
                </div>
              </div>
              <div class="banner-slider">
                <div class="banner-img"> 
                  <a href="#b3"> <img src="..\image/3.png" alt=""> </a>
                </div>
              </div>
              <div class="banner-slider">
                <div class="banner-img"> 
                  <a href="#b4"> <img src="..\image/4.png" alt=""> </a>
                </div>
              </div>
              <div class="banner-slider">
                <div class="banner-img"> 
                  <a href="#b5"> <img src="..\image/5.png" alt=""> </a>
                </div>
              </div>
            </div>
          </div>

          <!-----------------Film --------------------->
         <div class="film-heading">
            <h2>Phim đang chiếu</h2>

            <div class="film-link">
              <a href="/user/film_cm">PHIM SẮP CHIẾU</a>
            </div>
         </div>

         <section id="film-list">
 
            @foreach($movies as $movie)
              <div class="film-box">
                <!-- img -->
                <div class="film-img">
                  <div class="rating"> {{$movie->mv_restrict}}    </div>
                  <img src="{{$movie->mv_link_poster}}" alt="">
                </div>

                <!-- text -->
                  <a href="/user/film_detail/{{$movie->mv_id}}">
                    <strong> {{$movie->mv_name}} </strong>
                  </a>
              </div> 
            @endforeach
          
          </section>
          
          <button class="backtop">         
            <a href="#top"><i class="fa-solid fa-arrow-up fa-2x"></i></a>
          </button>

          <div class="footblank"> </div>

@endsection

@section('footer')
      <script src="/template/js/film.js"></script>

      <script
          type="text/javascript"
          src="https://code.jquery.com/jquery-1.11.0.min.js"
        ></script>
        <script
          type="text/javascript"
          src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
        ></script>
        <script
          type="text/javascript"
          src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
        ></script>
          <script  >    
                $(document).ready(function(){
                $(".banner").slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: false,
                    dots: true,
                    autoplay: true,
                    autoplaySpeed: 3000,
                });
            });
        </script>
@endsection
