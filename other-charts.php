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
            <?php Include 'topmenu.php';?>
            <?php Include 'mainmenu.php';?>
            <section class="content">
                <header class="content__title">
                    <h1>jQuery Sparklines</h1>
                    <small>This jQuery plugin generates sparklines (small inline charts) directly in the browser using data supplied either inline in the HTML, or via javascript.</small>

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
                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <div class="card-header"><h2 class="card-title">Sparkline Bar Chart</h2></div>

                            <div class="card-block">
                                <div class="sparkline-bar">6,9,5,6,3,7,5,4,6,5,6,4,2,5,8,2,6,9,5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <div class="card-header"><h2 class="card-title">Sparkline Tristate Chart</h2></div>

                            <div class="card-block">
                                <div class="sparkline-tristate">1,1,0,1,-1,-1,1,-1,0,0,1,1,-1,0,0,0,0,-1,1,1,1,-1,1-1,1,-1,0,0,1,1,-1,-1,1,-1,0,0,1,1</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <div class="card-header"><h2 class="card-title">Sparkline Discrete Chart</h2></div>

                            <div class="card-block">
                                <div class="sparkline-discrete">4,6,7,7,4,3,2,1,4,4,5,7,1,9,5,3,6,3,1,0,8,4,3,5,1,5,7,4,4,4,1,2,4,7,1,9,5,3,6,3,1,0,8,4,3,5,9,9,9,9,9,4,1,1,1,4,2,4,3,7,6,8,9,6,4,6,4,3,6,3,7,2,3</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <div class="card-header"><h2 class="card-title">Sparkline Bullet Chart</h2></div>

                            <div class="card-block">
                                <div class="sparkline-bullet">10,12,12,9,7</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <div class="card-header"><h2 class="card-title">Sparkline Line Chart</h2></div>

                            <div class="card-block">
                                <div class="sparkline-line" style="max-width: 300px">9,5,6,3,9,7,5,4,6,5,6,4,9</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <div class="card-header"><h2 class="card-title">Sparkline Pie Chart</h2></div>

                            <div class="card-block">
                                <div class="sparkline-pie d-inline-block">1,1,2</div>
                                <div class="sparkline-pie d-inline-block">1,1,1</div>
                                <div class="sparkline-pie d-inline-block">1,3,1,1</div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr />
                <br>

                <header class="content__title">
                    <h1>Easy Pie Charts</h1>
                    <small>Lightweight jQuery plugin to render and animate nice pie charts with the HTML5 canvas element</small>

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

                <div class="card">
                    <div class="card-block">
                        <div class="easy-pie-chart" data-percent="74" data-size="140" data-track-color="#eee" data-bar-color="#03A9F4">
                            <span class="easy-pie-chart__value">74</span>
                        </div>

                        <div class="easy-pie-chart" data-percent="85" data-size="120" data-track-color="#eee" data-bar-color="#32c787">
                            <span class="easy-pie-chart__value">85</span>
                        </div>

                        <div class="easy-pie-chart" data-percent="50" data-size="100" data-track-color="#eee" data-bar-color="#ff6b68">
                            <span class="easy-pie-chart__value">50</span>
                        </div>

                        <div class="easy-pie-chart" data-percent="22" data-size="80" data-track-color="#eee" data-bar-color="#d066e2">
                            <span class="easy-pie-chart__value">22</span>
                        </div>

                        <div class="easy-pie-chart" data-percent="64" data-size="60" data-track-color="#eee" data-bar-color="#607D8B">
                            <span class="easy-pie-chart__value">64</span>
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

        <script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="vendors/jquery.sparkline/jquery.sparkline.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>

        <!-- Demo -->
        <script src="demo/js/other-charts.js"></script>
    </body>
</html>