<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
        <link rel="stylesheet" href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">
    </head>

    <body data-ma-theme="green">
        <main class="main">
            <?php Include 'topmenu.php';?>
            <?php Include 'mainmenu.php';?>

            <section class="content">
                <div class="content__inner">
                    <header class="content__title">
                        <h1>Dashboard</h1>
                        <small>Welcome to the unique Material Design admin web app experience!</small>

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

                    <div class="row quick-stats">
                        <div class="col-sm-6 col-md-3">
                            <div class="quick-stats__item bg-light-blue">
                                <div class="quick-stats__info">
                                    <h2>987,459</h2>
                                    <small>Total Website Traffics</small>
                                </div>

                                <div class="quick-stats__chart sparkline-bar-stats">6,4,8,6,5,6,7,8,3,5,9,5</div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="quick-stats__item bg-amber">
                                <div class="quick-stats__info">
                                    <h2>356,785K</h2>
                                    <small>Total Website Impressions</small>
                                </div>

                                <div class="quick-stats__chart sparkline-bar-stats">4,7,6,2,5,3,8,6,6,4,8,6</div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="quick-stats__item bg-purple">
                                <div class="quick-stats__info">
                                    <h2>$58,778</h2>
                                    <small>Total Total Sales</small>
                                </div>

                                <div class="quick-stats__chart sparkline-bar-stats">9,4,6,5,6,4,5,7,9,3,6,5</div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="quick-stats__item bg-red">
                                <div class="quick-stats__info">
                                    <h2>214</h2>
                                    <small>Total Support Tickets</small>
                                </div>

                                <div class="quick-stats__chart sparkline-bar-stats">5,6,3,9,7,5,4,6,5,6,4,9</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title">Sales Statistics</h2>
                                    <small class="card-subtitle">Vestibulum purus quam scelerisque, mollis nonummy metus</small>
                                </div>

                                <div class="card-block">
                                    <div class="flot-chart flot-curved-line"></div>
                                    <div class="flot-chart-legends flot-chart-legends--curved"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title">Growth Rate</h2>
                                    <small class="card-subtitle">Commodo luctus nisi erat porttitor ligula eget lacinia odio semnec elit</small>
                                </div>

                                <div class="card-block">
                                    <div class="flot-chart flot-line"></div>
                                    <div class="flot-chart-legends flot-chart-legends--line"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div data-columns>
                        <div class="card">
                            <img class="card-img-top" src="demo/img/widgets/note.png" alt="">
                            <div class="card-header">
                                <h2 class="card-title">Pellentesque Ligula Fringilla</h2>
                                <div class="card-subtitle">by Malinda Hollaway on 19th June 2015 at 09:10 AM
                                </div>
                            </div>
                            <div class="card-block">
                                <p>Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra.</p>
                                <a href="" class="view-more text-left">View Article...</a>
                            </div>
                        </div>

                        <div class="card widget-visitors">
                            <div class="card-header">
                                <h2 class="card-title">Realtime Visitors</h2>
                                <small class="card-subtitle">Nullam dolor isnibh ultricies vehicula adipiscing</small>
                            </div>

                            <div class="card-block">
                                <div class="widget-visitors__stats">
                                    <div>
                                        <strong>23528</strong>
                                        <small>Visitor for last 24 hours</small>
                                    </div>
                                    <div>
                                        <strong>746</strong>
                                        <small>Visitors last 30 minutes</small>
                                    </div>
                                </div>

                                <div class="widget-visitors__map map-visitors"></div>
                            </div>

                            <div class="listview listview--bordered">
                                <div class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Sunday, September 4, 21:44:02 (2 Mins 56 Seconds)</div>

                                        <div class="listview__attrs">
                                            <span><img class="widget-visitors__country" src="demo/img/flags/United_States_of_America.png" alt=""> United States</span>
                                            <span>Firefox</span>
                                            <span>Mac OSX</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Sunday, September 4, 20:21:01 (5 Mins 12 Seconds)</div>

                                        <div class="listview__attrs">
                                            <span><img class="widget-visitors__country" src="demo/img/flags/Australia.png" alt=""> Australia</span>
                                            <span>Chrome</span>
                                            <span>Android</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Sunday, September 4, 20:21:10 (10 Mins 43 Seconds)</div>

                                        <div class="listview__attrs">
                                            <span><img class="widget-visitors__country" src="demo/img/flags/Brazil.png" alt=""> Brazil</span>
                                            <span>Edge</span>
                                            <span>Windows</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Sunday, September 4, 20:59:04 (1 Min 02 Seconds)</div>

                                        <div class="listview__attrs">
                                            <span><img class="widget-visitors__country" src="demo/img/flags/South_Korea.png" alt=""> South Korea</span>
                                            <span>Chrome</span>
                                            <span>Android</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Sunday, September 4, 20:58:12 (3 Min 44 Seconds)</div>

                                        <div class="listview__attrs">
                                            <span><img class="widget-visitors__country" src="demo/img/flags/Japan.png" alt=""> Japan</span>
                                            <span>Chrome</span>
                                            <span>Windows</span>
                                        </div>
                                    </div>
                                </div>

                                <a href="" class="view-more">View All</a>
                            </div>
                        </div>

                        <div class="card card-inverse widget-past-days">
                            <div class="card-header">
                                <h2 class="card-title">For the past 30 days</h2>
                                <small class="card-subtitle">Pellentesque ornare sem lacinia quam</small>
                            </div>

                            <div class="widget-past-days__main">
                                <div class="flot-chart flot-chart--sm flot-past-days"></div>
                            </div>

                            <div class="listview listview--inverse listview--striped">
                                <div class="listview__item">
                                    <div class="widget-past-days__info">
                                        <small>Page Views</small>
                                        <h3>47,896,536</h3>
                                    </div>

                                    <div class="widget-past-days__chart hidden-sm">
                                        <div class="sparkline-bar-stats">6,9,5,6,3,7,5,4,6,5,6,4,2,5,8,2,6,9</div>
                                    </div>
                                </div>

                                <div class="listview__item">
                                    <div class="widget-past-days__info">
                                        <small>Site Visitors</small>
                                        <h3>24,456,799</h3>
                                    </div>

                                    <div class="widget-past-days__chart hidden-sm">
                                        <div class="sparkline-bar-stats">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                                    </div>
                                </div>

                                <div class="listview__item">
                                    <div class="widget-past-days__info">
                                        <small>Total Clicks</small>
                                        <h3>13,965</h3>
                                    </div>

                                    <div class="widget-past-days__chart hidden-sm">
                                        <div class="sparkline-bar-stats">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                                    </div>
                                </div>

                                <div class="listview__item">
                                    <div class="widget-past-days__info">
                                        <small>Total Returns</small>
                                        <h3>198</h3>
                                    </div>

                                    <div class="widget-past-days__chart hidden-sm">
                                        <div class="sparkline-bar-stats">3,9,1,3,5,6,7,6,8,2,5,2,7,5,6,7,6,8</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card todo">
                            <div class="card-header">
                                <h2 class="card-title">Todo lists</h2>
                                <small class="card-subtitle">Venenatis portauam Inceptos ameteiam</small>
                            </div>

                            <div class="listview">
                                <div class="listview__item">
                                    <label class="custom-control custom-control--char todo__item">
                                        <input class="custom-control-input" type="checkbox" value="" checked>
                                        <span class="custom-control--char__helper"><i class="bg-amber">F</i></span>
                                        <div class="todo__info">
                                            <span>Fivamus sagittis lacus vel augue laoreet rutrum faucibus dolor</span>
                                            <small>Today at 8.30 AM</small>
                                        </div>

                                        <div class="listview__attrs">
                                            <span>#Messages</span>
                                            <span>!!!</span>
                                        </div>
                                    </label>

                                    <div class="actions listview__actions">
                                        <div class="dropdown actions__item">
                                            <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="">Mark as completed</a>
                                                <a class="dropdown-item" href="">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="listview__item">
                                    <label class="custom-control custom-control--char todo__item">
                                        <input class="custom-control-input" type="checkbox" value="" checked>
                                        <span class="custom-control--char__helper"><i class="bg-light-blue">N</i></span>
                                        <div class="todo__info">
                                            <span>Nullam id dolor id nibh ultricies vehicula ut id elit</span>
                                            <small>Today at 12.30 PM</small>
                                        </div>

                                        <div class="listview__attrs">
                                            <span>#Clients</span>
                                            <span>!!</span>
                                        </div>
                                    </label>

                                    <div class="actions listview__actions">
                                        <div class="dropdown actions__item">
                                            <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="">Mark as completed</a>
                                                <a class="dropdown-item" href="">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="listview__item">
                                    <label class="custom-control custom-control--char todo__item">
                                        <input class="custom-control-input" type="checkbox" value="">
                                        <span class="custom-control--char__helper"><i class="bg-purple">C</i></span>
                                        <div class="todo__info">
                                            <span>Cras mattis consectetur purus sit amet fermentum</span>
                                            <small>Tomorrow at 10.30 AM</small>
                                        </div>

                                        <div class="listview__attrs">
                                            <span>#Clients</span>
                                            <span>!!</span>
                                        </div>
                                    </label>

                                    <div class="actions listview__actions">
                                        <div class="dropdown actions__item">
                                            <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="">Mark as completed</a>
                                                <a class="dropdown-item" href="">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="listview__item">
                                    <label class="custom-control custom-control--char todo__item">
                                        <input class="custom-control-input" type="checkbox" value="">
                                        <span class="custom-control--char__helper"><i class="bg-lime">I</i></span>
                                        <div class="todo__info">
                                            <span>Integer posuere erat a ante venenatis dapibus posuere velit aliquet</span>
                                            <small>05/08/2017 at 08.00 AM</small>
                                        </div>

                                        <div class="listview__attrs">
                                            <span>#Server</span>
                                            <span>!</span>
                                        </div>
                                    </label>

                                    <div class="actions listview__actions">
                                        <div class="dropdown actions__item">
                                            <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="">Mark as completed</a>
                                                <a class="dropdown-item" href="">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="listview__item">
                                    <label class="custom-control custom-control--char todo__item">
                                        <input class="custom-control-input" type="checkbox" value="">
                                        <span class="custom-control--char__helper"><i class="bg-red">P</i></span>
                                        <div class="todo__info">
                                            <span>Praesent commodo cursus magnavel scelerisque nisl consectetur</span>
                                            <small>10/08/2016 at 04.00 AM</small>
                                        </div>

                                        <div class="listview__attrs">
                                            <span>#Server</span>
                                            <span>!!!</span>
                                        </div>
                                    </label>

                                    <div class="actions listview__actions">
                                        <div class="dropdown actions__item">
                                            <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="">Mark as completed</a>
                                                <a class="dropdown-item" href="">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a href="todos.php" class="view-more">View More</a>
                            </div>
                        </div>

                        <div class="card card-inverse widget-pie">
                            <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                                <div class="easy-pie-chart" data-percent="50" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                    <span class="easy-pie-chart__value">92</span>
                                </div>
                                <div class="widget-pie__title">Email<br> Scheduled</div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                                <div class="easy-pie-chart" data-percent="11" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                    <span class="easy-pie-chart__value">11</span>
                                </div>
                                <div class="widget-pie__title">Email<br> Bounced</div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                                <div class="easy-pie-chart" data-percent="52" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                    <span class="easy-pie-chart__value">52</span>
                                </div>
                                <div class="widget-pie__title">Email<br> Opened</div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                                <div class="easy-pie-chart" data-percent="44" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                    <span class="easy-pie-chart__value">44</span>
                                </div>
                                <div class="widget-pie__title">Storage<br>Remaining</div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                                <div class="easy-pie-chart" data-percent="78" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                    <span class="easy-pie-chart__value">78</span>
                                </div>
                                <div class="widget-pie__title">Web Page<br> Views</div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                                <div class="easy-pie-chart" data-percent="32" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                    <span class="easy-pie-chart__value">32</span>
                                </div>
                                <div class="widget-pie__title">Server<br> Processing</div>
                            </div>
                        </div>

                        <div class="card widget-calendar">
                            <div class="card-header bg-light-blue">
                                <div class="widget-calendar__year"></div>
                                <div class="widget-calendar__day"></div>

                                <a href="calendar.php" class="bg-orange btn btn--action"><i class="zmdi zmdi-plus"></i></a>
                            </div>

                            <div class="widget-calendar__body"></div>
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
                </div>
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
        <!-- ../vendors -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/tether/dist/js/tether.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>

        <script src="vendors/bower_components/flot/jquery.flot.js"></script>
        <script src="vendors/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
        <script src="vendors/bower_components/jqvmap/dist/jquery.vmap.min.js"></script>
        <script src="vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="vendors/bower_components/salvattore/dist/salvattore.min.js"></script>
        <script src="vendors/jquery.sparkline/jquery.sparkline.min.js"></script>
        <script src="vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

        <!-- Charts and maps-->
        <script src="demo/js/flot-charts/curved-line.js"></script>
        <script src="demo/js/flot-charts/line.js"></script>
        <script src="demo/js/flot-charts/chart-tooltips.js"></script>
        <script src="demo/js/other-charts.js"></script>
        <script src="demo/js/jqvmap.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>
</html>