<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <link rel="shortcut icon" href="#">

    <title>タピオカなび</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/set1.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
</head>

<body>
    <div class="nav-menu">
    <div class="dark-bg sticky-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/">タピオカなび</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-menu"></span>
            </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                            @guest
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link">ログイン</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link">新規登録</a>
                                </li>
                                @else
                                <li class="nav-item">
                                <a href="/home" class="nav-link" >
                                    マイページ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">
                                            ログアウト
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    @endguest
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <a href="images/reserve-slide2.jpg" class="grid image-link">
                        <img src="images/reserve-slide2.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide1.jpg" class="grid image-link">
                        <img src="images/reserve-slide1.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide3.jpg" class="grid image-link">
                        <img src="images/reserve-slide3.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide1.jpg" class="grid image-link">
                        <img src="images/reserve-slide1.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide2.jpg" class="grid image-link">
                        <img src="images/reserve-slide2.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide3.jpg" class="grid image-link">
                        <img src="images/reserve-slide3.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>場所一覧から探す</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="light-bg booking-details_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8 responsive-wrap">
                    <div class="booking-checkbox_wrap">
                        <div class="booking-checkbox">
                          <div class="row">
                          @foreach ($prefectures as $prefecture)
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                                  <span class="ti-check-box"></span>
                                    <span class="custom-control-description">
                                        <a href="/prefecture/{{ $prefecture->id }}">{{ $prefecture->name }}</a>
                                    </span>
                                </label> 
                            </div>
                            @endforeach
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright &copy; <a>2019 タピオカなび </a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        if ($('.image-link').length) {
            $('.image-link').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
        if ($('.image-link2').length) {
            $('.image-link2').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
    </script>
</body>
</html>