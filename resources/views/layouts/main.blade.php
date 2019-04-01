<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="На этой странице Вы можете оформить заказ на продукции компании Jeunesse Global в Казахстане. ... Атырау, Алматы, Кокшетау, Караганде, Павлодаре, ..." >
    <title> @yield('title',' Компания Jeunesse Global в Казахстане - Официальный дистрибьютор')  </title>

    <link href="images/favicon/favicon.png" rel="shortcut icon" type="image/png">
   
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
     
    <link href="{{asset('css/app2.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">

   

</head>

<body class="home-style-3">

    <div class="page-wrapper">

        <div class="preloader">
            <div class="preloader-inner">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    
        <header class="site-header header-style-3">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-6 contact-info">
                            <ul>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i>  mail@solid-industry.co.uk</li>
                                <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i>  +7 (702) 433 48 88</li>
                            </ul>
                        </div>
                        <div class="col col-sm-6 language-login-wrapper">
                            <div class="language-login clearfix">
                                <div class="client-login">
                                    <a href="#" id="client-login-btn"><i class="fa fa-phone" aria-hidden="true"></i> Обратный звонок</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt></a>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder" style="padding-top: 9px;">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children current-menu-ancestor current-menu-parent">
                                <a href="{{route('home')}}">Главная</a>
                            </li>
                            <li><a href="{{url('/products')}}">Продукция</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Результаты</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Доставка</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">О Компании</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Бизнес в jeunesse</a></li>
                                    <li><a href="blog-right-sidebar.html">Видео о jeunesse</a></li>
                                    <li><a href="blog-left-sidebar.html">новости и статьи</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Контакты</a></li>
                        </ul>
                    </div>

                    <div class="social-links-holder">
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-vk"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
        
      
    
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">
                        <div class="widget about-widget">
                            <h3><img src="images/logo.png" alt></h3>
                            <p>The following marks are licensed from Jeunesse Global Holdings, LLC: Jeunesse Казахстан, г.Алматы</p>
                        </div>
                    </div>

                    <div class="col col-md-4 ">
                        <div class="widget site-map-widget">
                            <h3>Навигация</h3>
                            <ul>
                                <li><a href="#">Главная</a></li>
                                <li><a href="{{url('/products')}}">Продукция</a></li>
                                <li><a href="#">Доставка</a></li>
                                <li><a href="#">О Компании</a></li>
                                <li><a href="#">Контакты</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class=" col-md-4 ">
                    </div>

                    <div class="col col-md-3 ">
                        <div class="widget newsletter-widget">
                            <h3>Подписка</h3>
                            <p>Оставьте свой email чтобы быть вкурсе последних новостей</p>
                            <form class="form">
                                <div>
                                    <input type="text" class="form-control" placeholder="email адрес">
                                    <button class="btn" type="submit"><i class="fa fa-send"></i></button>
                                </div>

                            </form>
                        </div>

                        <div class="widget social-media-widget">
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-vk"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div> 
        </footer>
     


        <div class="client-login-area">
            <div class="client-login-form">
                <h3>Client Login area</h3>
                <form class="form">
                    <div>
                        <label for="username">Username</label>
                        <input type="text" id="username" class="form-control">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control">
                    </div>
                    <div>
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="js/bootstrap.min.js')}}"></script>

    <script src="{{asset('js/jquery-plugin-collection.js')}}"></script>

    <script src="{{asset('js/script.js')}}"></script>
</body>


</html>
