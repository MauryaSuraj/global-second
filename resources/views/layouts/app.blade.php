<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Glaobal Agra Vaishchamber') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('inc.navigation')
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="footer-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 col-xs-12">
                        <div class="footer_block">
                            <img src="http://globalagra-vaishchamber.com/wp-content/uploads/2018/02/global-footer.jpg.png" alt="logo" class="img-responsive">
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
                            <h4>Recent Posts</h4>
                            <ul class="recentpost">
                                <li> <span><a class="plus" href="https://globalagra-vaishchamber.com/rajesh-jindal/21/05/2019/13/14/37/4439/our-team/nehbhahhhv/"><img width="150" height="150" src="https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Rajesh-Jindal-150x150.jpg" class=" wp-post-image" alt="" srcset="https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Rajesh-Jindal-150x150.jpg 150w, https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Rajesh-Jindal-100x100.jpg 100w, https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Rajesh-Jindal-600x600.jpg 600w, https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Rajesh-Jindal-32x32.jpg 32w, https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Rajesh-Jindal-300x300.jpg 300w" sizes="(max-width: 150px) 100vw, 150px"><i>+</i></a></span>
                                    <p><a href="rajesh-jindal.html">Rajesh Jindal</a></p>
                                    May 21, 2019 </li>
                                <li> <span><a class="plus" href="https://globalagra-vaishchamber.com/rajeev-gupta/21/05/2019/13/09/30/4430/our-team/nehbhahhhv/"><img width="150" height="150" src="https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Rajeev-Gupta-150x150.jpg" class=" wp-post-image" alt="" srcset="https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Rajeev-Gupta-150x150.jpg 150w, https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Rajeev-Gupta-100x100.jpg 100w, https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Rajeev-Gupta-600x600.jpg 600w, https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Rajeev-Gupta-32x32.jpg 32w, https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Rajeev-Gupta-300x300.jpg 300w" sizes="(max-width: 150px) 100vw, 150px"><i>+</i></a></span>
                                    <p><a href="rajeev-gupta.html">Rajeev Gupta</a></p>
                                    May 21, 2019 </li>
                                <li> <span><a class="plus" href="https://globalagra-vaishchamber.com/vikash-singhal/21/05/2019/13/00/49/4427/our-team/nehbhahhhv/"><img width="150" height="150" src="https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Vikash-Singhal-150x150.jpg" class=" wp-post-image" alt="" srcset="https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Vikash-Singhal-150x150.jpg 150w, https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Vikash-Singhal-100x100.jpg 100w, https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Vikash-Singhal-600x600.jpg 600w, https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Vikash-Singhal-32x32.jpg 32w, https://globalagra-vaishchamber.com/wp-content/uploads/2019/05/Vikash-Singhal-300x300.jpg 300w" sizes="(max-width: 150px) 100vw, 150px"><i>+</i></a></span>
                                    <p><a href="vikash-singhal.html">Vikash Singhal</a></p>
                                    May 21, 2019 </li>
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
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-bottom">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <p class="text-white">Copyright 2019 © Global Agra Vaishchamber, All Rights Reserved.</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="web-page">
                                        <ul>
                                            <li class="web-link">Proudly Powered By : <a href="http://mydigitech.in/ " target="_blank">&nbsp; DigiTech Services</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
