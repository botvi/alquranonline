<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Al-qur'an - Online</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('admin') }}/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('admin') }}/css/responsive.css" rel="stylesheet" />

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('template.navbar')

        <!-- end header section -->
        <!-- slider section -->
        <section class=" slider_section position-relative">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="slider_item-box">
                            <div class="slider_item-container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="slider_item-detail">
                                                <div>
                                                    <h1>
                                                        Baca<br />
                                                        Al-Qur'an Online
                                                    </h1>
                                                    <p>
                                                        Baca Al-Qur'an secara Online dimana dan kapanpun saja dengan mudah.
                                                    </p>
                                                    <div class="d-flex">
                                                        <!-- <a href="" class="text-uppercase custom_orange-btn mr-3">
                              Shop Now
                            </a>
                            <a href="" class="text-uppercase custom_dark-btn">
                              Contact Us
                            </a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="slider_img-box">
                                                <div>
                                                    <img src="{{ asset('admin') }}/images/logosalquran.png"
                                                        alt="" class="fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- end slider section -->
    </div>

    <!-- service section -->

    <section class="service_section layout_padding ">
        <div class="container">
            <h2 class="custom_heading">Surat Surat Di Dalam Al-Qur'an</h2>
            <p class="custom_heading-text">
                Mulai membaca Al-Qur'an
            </p>

            @yield('content')


        </div>
    </section>

    <!-- end service section -->




    <!-- footer section -->
    <section class="container-fluid footer_section">
        <p>
            Copyright &copy; 2023 by Yovi Ardiansyah
        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="{{ asset('admin') }}/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('admin') }}/js/bootstrap.js"></script>

    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = '{{ asset('admin') }}/images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
    </script>
    <!-- end google map js -->
</body>

</html>
