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
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/set1.css">
    <link rel="stylesheet" href="css/style.css">
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
                                <li><a href="#" class="btn btn-outline-light top-btn"><span class="ti-plus"></span> Add Listing</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 responsive-wrap">
                    <div class="row detail-filter-wrap">
                        <div class="col-md-4 featured-responsive">
                            <div class="detail-filter-text">
                                <h3>{{ $prefecture->name }}</h3>
                                <!--<p>34 Results For <span>Restaurant</span></p>-->
                            </div>
                        </div>
                    </div>                    
                    <div class="row light-bg detail-options-wrap">
                        @forelse ($prefecture->shops as $shop)
                        <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                            <div class="featured-place-wrap">
                                <a href="/prefecture/{{ $prefecture->id }}/{{ $shop->shop_id }}">
                                    <img src="/images/featured1.jpg" class="img-fluid" alt="#">
                                    <div class="featured-title-box">
                                        <h6>{{ $shop->shop_name}}</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @empty
                        <a>No shops yet</a>
                        @endforelse
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
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright &copy; 2018 Listing. All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <script>
        $(".map-icon").click(function() {
            $(".map-fix").toggle();
        });
    </script>
    <script>
        // Want to customize colors? go to snazzymaps.com
        function myMap() {
            var maplat = $('#map').data('lat');
            var maplon = $('#map').data('lon');
            var mapzoom = $('#map').data('zoom');
            // Styles a map in night mode.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: maplat,
                    lng: maplon
                },
                zoom: mapzoom,
                scrollwheel: false
            });
            var marker = new google.maps.Marker({
                position: {
                    lat: maplat,
                    lng: maplon
                },
                map: map,
                title: 'We are here!'
            });
        }
    </script>
    <!-- Map JS (Please change the API key below. Read documentation for more info) -->
    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyDMTUkJAmi1ahsx9uCGSgmcSmqDTBF9ygg"></script>
</body>

</html>

    