<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

    <!-- Mirrored from inthe7heaven.com/flatastic-html/index_layout_2.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 17 Jun 2014 17:33:43 GMT -->
    <head>
        <title>Epu Mushroom House</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!--meta info-->
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <link rel="icon" type="image/ico" href="{{asset('/')}}public/front_end/images/favicon-16x16.png">
        <!--stylesheet include-->
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('/')}}public/front_end/css/colorpicker.css">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('/')}}public/front_end/css/flexslider.css">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('/')}}public/front_end/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('/')}}public/front_end/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('/')}}public/front_end/css/owl.transitions.css">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('/')}}public/front_end/css/jquery.custom-scrollbar.css">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('/')}}public/front_end/css/style.css">
        <!--font include-->
        <link href="{{asset('/')}}public/front_end/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('/')}}public/front_end/css/jquery.fancybox-1.3.4.css">
        <script src="https://code.jquery.com/jquery-1.8.3.js" integrity="sha256-dW19+sSjW7V1Q/Z3KD1saC6NcE5TUIhLJzJbrdKzxKc=" crossorigin="anonymous"></script>
        <script id = "myScript" src="https://scripts.sandbox.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout-sandbox.js"></script> 

    </head>
    <!---------------------------------------------->

    <body>

        <div class="wide_layout relative w_xs_auto">


            <header role="banner">

                <!--header bottom part-->
                <section class="h_bot_part container">
                    <div class="clearfix row">
                        <div class="col-lg-6 col-md-6 col-sm-4 t_xs_align_c">
                            <a class="logo m_xs_bottom_15 d_xs_inline_b">
                                <img width="30%" src="{{asset('/')}}public/front_end/images/PNG - Copy.png" alt="">
                            </a>
                        </div>
                    </div>
                </section>

                <!------main menu container-------------------------------->
                @yield('menu')
            </header>

            @yield('slider')


            <!--content-->
            @yield('master-content')




            <!--markup footer---------------------------->
            <footer id="footer" class="type_2">
                <div class="footer_top_part">
                    <div class="container t_align_c m_bottom_20">
                        <!--social icons-->
                    </div>
                    <hr class="divider_type_4 m_bottom_50">
                    <div class="container">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                                <h3 class="color_light_2 m_bottom_20">About</h3>
                                <p class="m_bottom_15">We enjoy mushrooms today as an everyday vegetable. Mushrooms are a natural product with many nutritional advantages. Generally, people do not get edible Mushroom's in the market, but we can assure 100% organic and edible mushrooms cultivating in the area.</p>

                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <h3 class="color_light_2 m_bottom_20">Contact Us</h3>
                                <ul class="c_info_list">
                                    <li class="m_bottom_10">
                                        <div class="clearfix m_bottom_15">
                                            <i class="fa fa-map-marker f_left"></i>
                                            <p class="contact_e">Head Office : Ward no:05, Bashurhat<br> Pourosova, Companigonj, Noakhali,<br> Chittagong Division,  Bangladesh<br></p>
                                        </div>
                                    </li>
                                    <li class="m_bottom_10">
                                        <div class="clearfix m_bottom_10">
                                            <i class="fa fa-phone f_left"></i>
                                            <p class="contact_e">01776464259</p>
                                        </div>
                                    </li>
                                    <li class="m_bottom_10">
                                        <div class="clearfix m_bottom_10">
                                            <i class="fa fa-envelope f_left"></i>
                                            <a class="contact_e color_light" href="mailto:#">epumushroomhouse@gmail.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--copyright part-->
                <div class="footer_bottom_part">
                    <div class="container clearfix t_mxs_align_c">
                        <p class="f_left f_mxs_none m_mxs_bottom_10">&copy; 2021 <span class="color_light">Md.Miraj Hossain</span>. All Rights Reserved.</p>
                    </div>
                </div>
            </footer>
        </div>




        <!-------------social widgets-------------------------------------------->
        <ul class="social_widgets d_xs_none">
            <!--facebook-->
            <li class="relative">
                <button class="sw_button t_align_c facebook"><i class="fa fa-facebook"></i></button>
                <div class="sw_content">
                    <h3 class="color_dark m_bottom_20">Join Us on Facebook</h3>
                    <a style="color: blue" href="https://www.facebook.com/Epu-Mushroom-House-101281791888282" target="_blank" class="color_dark d_inline_b f_size_ex_large v_align_b">Epu Mushroom House</a><br>        
             <!--<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgroups%2F624813428167731&tabs=timeline&width=0&height=0&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" style="border:none; overflow:hidden; width:235px; height:258px;"></iframe>-->
                </div>
            </li>
            <!--contact form-->
            <li class="relative">
                <button class="sw_button t_align_c contact"><i class="fa fa-envelope-o"></i></button>
                <div class="sw_content">
                    <h3 class="color_dark m_bottom_20">Contact Us</h3>           
                    <form  action="{{URL::to('/save-contact')}}" method="post">
                        @csrf
                        <input class="f_size_medium m_bottom_10 r_corners full_width" type="text" name="contact_name" placeholder="Your name" required>
                        <input class="f_size_medium m_bottom_10 r_corners full_width" type="email" name="contact_email" placeholder="Email" required>
                        <input class="f_size_medium m_bottom_10 r_corners full_width" type="text" name="contact_subject" placeholder="Subject" required>
                        <textarea class="f_size_medium r_corners full_width m_bottom_20" placeholder="Message" name="contact_message" required></textarea>
                        <button type="submit" class="button_type_4 r_corners mw_0 tr_all_hover color_dark bg_light_color_2">Send</button>
                    </form>
                </div>	
            </li>
            <!--contact info---------------------------------------->
            <li class="relative">
                <button class="sw_button t_align_c googlemap"><i class="fa fa-map-marker"></i></button>
                <div class="sw_content">
                    <h3 class="color_dark m_bottom_20">Location</h3>
                    <ul class="c_info_list">
                        <li class="m_bottom_10">
                            <div class="clearfix m_bottom_15">
                                <i class="fa fa-map-marker f_left color_dark"></i>
                                <p class="contact_e">,<br> .</p>
                            </div>
                            <iframe class="r_corners full_width" id="gmap_mini" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2658.218072886922!2d90.38813450766477!3d23.737807608099022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8c0f053a153%3A0x9a3d97b29d046a7d!2sBijoy%20Ekattor%20Hall!5e0!3m2!1sen!2sbd!4v1610015181208!5m2!1sen!2sbd"></iframe>
                        </li>
                        <li class="m_bottom_10">
                            <div class="clearfix m_bottom_10">
                                <i class="fa fa-phone f_left color_dark"></i>
                                <p class="contact_e">01776464259</p>
                            </div>
                        </li>
                        <li class="m_bottom_10">
                            <div class="clearfix m_bottom_10">
                                <i class="fa fa-envelope f_left color_dark"></i>
                                <a class="contact_e default_t_color" href="mail to:#">epumushroomhouse@gmail.com</a>
                            </div>
                        </li>
                    </ul>
                </div>	
            </li>
        </ul>

        <button class="t_align_c r_corners type_2 tr_all_hover animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
        <!--scripts include-->
        <script src="{{asset('/')}}public/front_end/js/jquery-2.1.0.min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/retina.js"></script>
        <script src="{{asset('/')}}public/front_end/js/jquery.flexslider-min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/styleswitcher.js"></script>
        <script src="{{asset('/')}}public/front_end/js/colorpicker.js"></script>
        <script src="{{asset('/')}}public/front_end/js/waypoints.min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/jquery.isotope.min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/owl.carousel.min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/jquery.tweet.min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/jquery.custom-scrollbar.js"></script>
        <script src="{{asset('/')}}public/front_end/js/scripts.js"></script>
        <script type="text/javascript" src="../../s7.addthis.com/{{asset('/')}}public/front_end/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
        <script src="{{asset('/')}}public/front_end/js/jquery-ui.min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/elevatezoom.min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/jquery.fancybox-1.3.4.js"></script>


    </body>   
</html>