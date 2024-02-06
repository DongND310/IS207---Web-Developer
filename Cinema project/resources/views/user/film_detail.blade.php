@extends ('user.main')

@section ('head')
    <link rel="stylesheet" href="{{ asset('css/film-detail.css') }}">
    <link rel="stylesheet" href="/template/css/film-detail.css">
    <link rel="stylesheet" type="text/css" href="film-detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


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
        
          <div class="film-heading">
            <h2>NỘI DUNG PHIM</h2>
          </div>

          <div class="film-detail">
                <section class="detail">
                    <div class="detail-img">
                        <img src="{{$movie->mv_link_poster}}" alt="">
                    </div>

                    <div class="detail-content">
                        <h2> {{$movie->mv_name}} </h2>
                        <p> <strong> Thể loại: </strong>
                        @foreach($types as $type)
                             {{ $type->type_name }} , 
                        @endforeach
                        </p>
                        <p> <strong> Khởi chiếu: </strong> {{$movie->mv_start}}</p>                         
                        <p> <strong> Thời lượng: </strong> {{$movie->mv_duration}}</p>
                        <p> <strong> Chế độ phụ đề: </strong> {{$movie->mv_cap}}</p>
                        <p> <strong> Giới hạn tuổi: </strong> {{$movie->mv_restrict}} </p>
                        <p> <strong> Nội dung: </strong> 
                          <input type="hidden" id="mydetail" value = "{{$movie->mv_detail}}">
                          <p id="moviedetail"></p>
                        </p>

                        <div class="btns">
                            <a href="/user/booking/{{$movie->mv_id}}" clas="booking">Đặt vé</a>
                        </div>
                    </div>
                
                </section>
          </div>
          
          <!-- trailer-->
          <div class="film-trailer">
            <video width="60%" height="60%" controls>
              <source src="{{$movie->mv_link_trailer}}" type="video/mp4" frameborder="0" allowfullscreen>
          </video>
          </div>

          <!-- film đang chiếu liên quan -->
          <div class="film-rela">
            <div class="film-rela-title">
              <button class="rela-title">
                <a href="..\film\film_rc.html" class="r-title"> 
                  <strong> PHIM ĐANG CHIẾU </strong>
                </a>
              </button>
            </div>
            <div class="film-rc">
                <div class="film"> 
                <div class="film-slider">
                  <div class="film-img"> 
                    <a href="#f1"> <img src="image/6.png" alt=""> </a> 
                  </div>
                </div>
                <div class="film-slider">
                  <div class="film-img"> 
                    <a href="#f2"> <img src="image/7.png" alt=""> </a> 
                  </div>
                </div>
                <div class="film-slider">
                  <div class="film-img"> 
                    <a href="#f3"> <img src="image/8.png" alt=""> </a> 
                  </div>
                </div>
                <div class="film-slider">
                  <div class="film-img"> 
                    <a href="#f4"> <img src="image/10.png" alt=""> </a> 
                  </div>
                </div>
                <div class="film-slider">
                  <div class="film-img"> 
                    <a href="#f5"> <img src="image/11.png" alt=""> </a> 
                  </div>
                </div>
                <div class="film-slider">
                  <div class="film-img"> 
                    <a href="#f6"> <img src="image/12.png" alt=""> </a> 
                  </div>
                </div>
                <div class="film-slider">
                  <div class="film-img"> 
                    <a href="#f7"> <img src="image/13.png" alt=""> </a> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        

          <button class="backtop">         
            <a href="#top"><i class="fa-solid fa-arrow-up fa-2x"></i></a>
          </button>
        

          <div class="footblank"> </div>

          @endsection

@section('footer')
      <script src="/template/js/film.js"></script>
      <script>
    $(document).ready(function() {
      var textareaValue = $("#mydetail").val();
      $("#moviedetail").html(textareaValue);
    })
  </script>
@endsection
