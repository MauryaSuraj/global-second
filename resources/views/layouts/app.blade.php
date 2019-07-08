<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Glaobal Agra Vaishchamber') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
        $(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
                $('#dynamic').addClass('newClass');
            } else {
                $('#dynamic').removeClass('newClass');
            }
        });
    </script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('inc.navigation')
        <main class="py-4 ">
            @yield('content')
        </main>
        <footer class="footer-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 m-auto col-xs-12">
                        <div class="footer_block ">
                            <img src="http://globalagra-vaishchamber.com/wp-content/uploads/2018/02/logo2-e1557846477241.png" alt="logo" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2 col-xs-12">
                        <div class="footer_block">
                            <h4>Quick Links</h4>
                            <ul class="footer-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Packages</a></li>
                                <li><a href="#">Submit Listing</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12">
                        <div class="footer_block dark_gry">
                            <h4>Featured Listing</h4>
                            <ul class="footer-links">
                                <li><a href="#">Category</a></li>
                                <li><a href="#">Listings</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xs-12">
                        <div class="footer_block">
                            <h4>Contact Information</h4>
                            <ul class="personal-info">
                                <li><i class="fas fa-map-marker-alt"></i> A-18, 2nd Floor, Gate No 4, New Multan Nagar Paschim Vihar, Rohtak Road, Delhi 110026</li>
                                <li><i class="fas fa-envelope"></i> info@globalagra-vaishchamber.com</li>
                                <li><i class="fas fa-phone"></i> +91-9873927287</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <section class="footer-bottom-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md my-auto text-center">
                        <p class="text-white">Copyright 2019 © Global Agra Vaishchamber, All Rights Reserved.</p>
                    </div>
                    <div class="col-md my-auto text-center">
                        <p class="text-white">Proudly Powered By : <a href="http://mydigitech.in/ " target="_blank" class="text-white">&nbsp; DigiTech Services</a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

<script>
    $(window).scroll(function(){
        if ($(this).scrollTop() > 50) {
            $('#dynamic').addClass('newClass');
        } else {
            $('#dynamic').removeClass('newClass');
        }
    });
</script>

</html>
