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

    <link data-n-head="ssr" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="">
        <!-- header section strats -->
        @include('template.navbar')

        <!-- end header section -->
        <!-- slider section -->
        <!-- end slider section -->
    </div>

    <!-- service section -->

    <section class="service_section layout_padding ">
        <div class="container">

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
    @yield('script')


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
    <script>
        // Dapatkan referensi ke elemen audio dan tombol putar/berhenti
    const audio = document.getElementById("audio");
    const playPauseBtn = document.getElementById("playPauseBtn");
    
    // Atur keadaan awal
    let sedangDiputar = false;
    
    // Fungsi untuk beralih antara memutar dan memberhentikan
    function togglePutarBerhenti() {
        if (sedangDiputar) {
            audio.pause();
            playPauseBtn.innerHTML  = '<i class="fa fa-play"></i>&nbsp;&nbsp;&nbsp;Play Audio';
            playPauseBtn.classList.remove('btn-danger'); 
        } else {
            audio.play();
            playPauseBtn.innerHTML  = '<i class="fa fa-pause"></i>&nbsp;&nbsp;&nbsp;Pause';
            playPauseBtn.classList.add('btn-danger'); 
        }
        sedangDiputar = !sedangDiputar;
    }
    
    // Tambahkan event listener klik ke tombol
    playPauseBtn.addEventListener("click", togglePutarBerhenti);
    
    </script>
</body>

</html>
