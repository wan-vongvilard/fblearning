<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">

        <!-- Demo -->
        <link rel="stylesheet" href="demo/css/demo.css">
    </head>

    <body data-ma-theme="green">
        <main class="main">
            <?php Include 'topmenu.php'; ?>
            <?php Include 'mainmenu.php'; ?>
            <section class="content">
                <header class="content__title">
                    <h1>CSS Animations</h1>
                    <small>animate.css is a bunch of cool, fun, and cross-browser animations for you to use in your projects. Great for emphasis, home pages, sliders, and general just-add-water-awesomeness.</small>

                    <div class="actions">
                            <a href="" class="actions__item zmdi zmdi-trending-up"></a>
                            <a href="" class="actions__item zmdi zmdi-check-all"></a>

                            <div class="dropdown actions__item">
                                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="" class="dropdown-item">Refresh</a>
                                    <a href="" class="dropdown-item">Manage Widgets</a>
                                    <a href="" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </div>
                </header>

                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="card animation-demo">
                            <div class="card-header">
                                <h2 class="card-title">Attention Seekers</h2>
                                <small class="card-subtitle">Click on the buttons below to start the animation</small>
                            </div>

                            <div class="card-block">
                                <img class="animated" src="demo/img/headers/sm/1.png" alt="">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">bounce</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">flash</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">pulse</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">rubberBand</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">shake</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">swing</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">tada</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">wobble</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card animation-demo">
                            <div class="card-header">
                                <h2 class="card-title">Flippers</h2>
                                <small class="card-subtitle">Click on the buttons below to start the animation</small>
                            </div>

                            <div class="card-block">
                                <img class="animated" src="demo/img/headers/sm/6.png" alt="">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">flip</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">flipInX</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">flipInY</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">flipOutX</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">flipOutY</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card animation-demo">
                            <div class="card-header">
                                <h2 class="card-title">Light Speed</h2>
                                <small class="card-subtitle">Click on the buttons below to start the animation</small>
                            </div>

                            <div class="card-block">
                                <img class="animated" src="demo/img/headers/sm/7.png" alt="">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">lightSpeedIn</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">lightSpeedOut</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card animation-demo">
                            <div class="card-header">
                                <h2 class="card-title">Specials</h2>
                                <small class="card-subtitle">Click on the buttons below to start the animation</small>
                            </div>

                            <div class="card-block">
                                <img class="animated" src="demo/img/headers/sm/1.png" alt="">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">hinge</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">rollIn</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">rollOut</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="card animation-demo">
                            <div class="card-header">
                                <h2 class="card-title">Bouncing Entrances</h2>
                                <small class="card-subtitle">Click on the buttons below to start the animation</small>
                            </div>

                            <div class="card-block">
                                <img class="animated" src="demo/img/headers/sm/2.png" alt="">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">bounceIn</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">bounceInDown</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">bounceInLeft</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">bounceInRight</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">bounceInUp</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card animation-demo">
                            <div class="card-header">
                                <h2 class="card-title">Bouncing Exits</h2>
                                <small class="card-subtitle">Click on the buttons below to start the animation</small>
                            </div>

                            <div class="card-block">
                                <img class="animated" src="demo/img/headers/sm/3.png" alt="">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">bounceOut</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">bounceOutDown</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">bounceOutLeft</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">bounceOutRight</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">bounceOutUp</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card animation-demo">
                            <div class="card-header">
                                <h2 class="card-title">Rotating Entrances</h2>
                                <small class="card-subtitle">Click on the buttons below to start the animation</small>
                            </div>

                            <div class="card-block">
                                <img class="animated" src="demo/img/headers/sm/8.png" alt="">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">rotateIn</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">rotateInDownLeft</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">rotateInDownRight</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">rotateInUpLeft</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">rotateInUpRight</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card animation-demo">
                            <div class="card-header">
                                <h2 class="card-title">Rotating Exits</h2>
                                <small class="card-subtitle">Click on the buttons below to start the animation</small>
                            </div>

                            <div class="card-block">
                                <img class="animated" src="demo/img/headers/sm/9.png" alt="">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">rotateOut</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">rotateOutDownLeft</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">rotateOutDownRight</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">rotateOutUpLeft</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">rotateOutUpRight</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="card animation-demo">
                            <div class="card-header">
                                <h2 class="card-title">Fading Entrances</h2>
                                <small class="card-subtitle">Click on the buttons below to start the animation</small>
                            </div>

                            <div class="card-block">
                                <img class="animated" src="demo/img/headers/sm/4.png" alt="">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeIn</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeInDown</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeInDownBig</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeInLeft</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeInLeftBig</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeInRight</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeInRightBig</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeInUp</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeInUpBig</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card animation-demo">
                            <div class="card-header">
                                <h2 class="card-title">Fading Exits</h2>
                                <small class="card-subtitle">Click on the buttons below to start the animation</small>
                            </div>

                            <div class="card-block">
                                <img class="animated" src="demo/img/headers/sm/5.png" alt="">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeOut</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeOutDown</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeOutDownBig</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeOutLeft</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeOutLeftBig</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeOutRight</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeOutRightBig</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeOutUp</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">fadeOutUpBig</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card animation-demo">
                            <div class="card-header">
                                <h2 class="card-title">Zoom Entrances</h2>
                                <small class="card-subtitle">Click on the buttons below to start the animation</small>
                            </div>

                            <div class="card-block">
                                <img class="animated" src="demo/img/headers/sm/4.png">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">zoomIn</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">zoomInDown</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">zoomInLeft</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">zoomInRight</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">zoomInUp</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card animation-demo">
                            <div class="card-header">
                                <h2 class="card-title">Zoom Exits</h2>
                                <small class="card-subtitle">Click on the buttons below to start the animation</small>
                            </div>

                            <div class="card-block">
                                <img class="animated" src="demo/img/headers/sm/3.png" alt="">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">zoomOut</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">zoomOutDown</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">zoomOutLeft</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">zoomOutRight</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">zoomOutUp</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="footer hidden-xs-down">
                    <p>© Material Admin Responsive. All rights reserved.</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="">Homepage</a>

                        <a class="nav-link" href="">Company</a>

                        <a class="nav-link" href="">Support</a>

                        <a class="nav-link" href="">News</a>

                        <a class="nav-link" href="">Contacts</a>
                    </ul>
                </footer>
            </section>
        </main>

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/tether/dist/js/tether.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>

        <!-- Demo only -->
        <script src="demo/js/demo.js"></script>
    </body>
</html>