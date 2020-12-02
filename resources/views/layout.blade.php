<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Kawsar</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo"> <a href="/">Wise</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class={{ Request::path()==='/'? 'active':''}}> <a href="/">Home</a> </li>
                                        <li class={{ Request::path()==='about'? 'active':''}}> <a href="/about">About</a> </li>
                                        <li> <a href="#service"> Service</a> </li>
                                        <li> <a href="#download">Screenshot</a> </li>
                                        <li> <a href="#testimonial">Contact us</a> </li>
                                        <li class="mean-last"> <a href="#"><img src="/images/search_icon.png" alt="#" /></a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
    </header>
    <!-- end header -->
    @yield('content')
    <!--  footer -->
    <footr>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Address</h3>
                            <i><img src="/icon/3.png">Locations</i>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Menus</h3>
                            <i><img src="/icon/2.png">Locations</i>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Useful Linkes</h3>
                            <i><img src="/icon/1.png">Locations</i>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Social Media </h3>
                            <ul class="contant_icon">
                                <li><img src="/icon/fb.png" alt="icon" /></li>
                                <li><img src="/icon/tw.png" alt="icon" /></li>
                                <li><img src="/icon/lin (2).png" alt="icon" /></li>
                                <li><img src="/icon/instagram.png" alt="icon" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 width">
                        <div class="address">
                            <h3>Newsletter </h3>
                            <input class="form-control" placeholder="Enter your email" type="type" name="Enter your email">
                            <button class="submit-btn">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright 2019 All Right Reserved By <a href="https://yetfix.com/">YetFIx Ltd.</a></p>
            </div>
        </div>
    </footr>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.0.0.min.js"></script>
    <script src="/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>