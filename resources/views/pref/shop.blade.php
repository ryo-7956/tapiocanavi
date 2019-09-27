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
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>{{ $shop->shop_name }}</h5>
                </div>
                <div class="col-md-6">
                    <div class="reserve-seat-block">
                        @auth
                        <div class="review-btn">
                            <a href="/{{ $shop->shop_id }}/review" class="btn btn-outline-danger">この店のレビューを書く</a>
                        </div>
                        @endauth
                        @guest
                        <div class="review-btn">
                            <a href="/login" class="btn btn-outline-danger">ログインしてこの店のレビューを書く</a>
                        </div>
                        @endguest
                    </div>
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
                            <p>{{ $shop->shop_description}}</p>
                            <hr>
                        </div>
                    <div class="booking-checkbox_wrap mt-4">
                        <h5></h5>
                        <hr>
                        <div class="customer-review_wrap">
                            <div class="customer-img">
                            @forelse ($shop->reviews as $review)
                                        <h6>{{ $review->review_comment }}</h6>
                            @empty
                            <a>No reviews yet</a>
                            @endforelse



                                <img src="images/customer-img1.jpg" class="img-fluid" alt="#">
                                <p></p>
                            </div>
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6></h6>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="round-icon-blank"></span>
                                        <p></p>
                                    </div>
                                
                                </div>
                                <p class="customer-text">
                                </p>
                                <p class="customer-text">
                                </p>
                                <ul>
                                    <li><img src="images/review-img1.jpg" class="img-fluid" alt="#"></li>
                                    <li><img src="images/review-img2.jpg" class="img-fluid" alt="#"></li>
                                    <li><img src="images/review-img3.jpg" class="img-fluid" alt="#"></li>
                                </ul>
                                <a href="#"><span class="icon-like"></span>Helpful</a>
                            </div>
                        </div>
                        <hr>
                        
                            
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