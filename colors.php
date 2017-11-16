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
                    <h1>Colors</h1>

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
                        <p>All these colors are available in LESS variable. You include this with any class/ID as mentioned below.</p>

                        <p>Example usage:</p>

                        <pre><code>.highlight-block {{ '{' }}
  background-color: @red;
  color: @green;
}</code></pre>

                        <br>
                        <br>

                        <h3 class="card-block__title">Available color previews</h3>

                        <br>

                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #ff6b68;">
                                    <div class="color-demo__color">Red</div>
                                    <div class="color-demo__hex">#ff6b68</div>
                                    <div class="color-demo__var">$red</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #ff85af;">
                                    <div class="color-demo__color">Pink</div>
                                    <div class="color-demo__hex">#ff85af</div>
                                    <div class="color-demo__var">$pink</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #d066e2;">
                                    <div class="color-demo__color">Purple</div>
                                    <div class="color-demo__hex">#d066e2</div>
                                    <div class="color-demo__var">$purple</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #673AB7;">
                                    <div class="color-demo__color">Deep Purple</div>
                                    <div class="color-demo__hex">#673AB7</div>
                                    <div class="color-demo__var">$deep-purple</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #3F51B5;">
                                    <div class="color-demo__color">Indigo</div>
                                    <div class="color-demo__hex">#3F51B5</div>
                                    <div class="color-demo__var">$indigo</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #2196F3;">
                                    <div class="color-demo__color">Blue</div>
                                    <div class="color-demo__hex">#2196F3</div>
                                    <div class="color-demo__var">$blue</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #03A9F4;">
                                    <div class="color-demo__color">Light Blue</div>
                                    <div class="color-demo__hex">#03A9F4</div>
                                    <div class="color-demo__var">$light-blue</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #00BCD4;">
                                    <div class="color-demo__color">Cyan</div>
                                    <div class="color-demo__hex">#00BCD4</div>
                                    <div class="color-demo__var">$cyan</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #39bbb0;">
                                    <div class="color-demo__color">Teal</div>
                                    <div class="color-demo__hex">#39bbb0</div>
                                    <div class="color-demo__var">$teal</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #32c787;">
                                    <div class="color-demo__color">Green</div>
                                    <div class="color-demo__hex">#32c787</div>
                                    <div class="color-demo__var">$green</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #8BC34A;">
                                    <div class="color-demo__color">Light Green</div>
                                    <div class="color-demo__hex">#8BC34A</div>
                                    <div class="color-demo__var">$light-green</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #CDDC39;">
                                    <div class="color-demo__color">Lime</div>
                                    <div class="color-demo__hex">#CDDC39</div>
                                    <div class="color-demo__var">$lime</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo color-demo--light" style="background-color: #FFEB3B;">
                                    <div class="color-demo__color">Yellow</div>
                                    <div class="color-demo__hex">#FFEB3B</div>
                                    <div class="color-demo__var">$yellow</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #f5c942;">
                                    <div class="color-demo__color">Amber</div>
                                    <div class="color-demo__hex">#f5c942</div>
                                    <div class="color-demo__var">$amber</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #FF9800;">
                                    <div class="color-demo__color">Orange</div>
                                    <div class="color-demo__hex">#FF9800</div>
                                    <div class="color-demo__var">$orange</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #FF5722;">
                                    <div class="color-demo__color">Deep Orange</div>
                                    <div class="color-demo__hex">#FF5722</div>
                                    <div class="color-demo__var">$deep-orange</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #795548;">
                                    <div class="color-demo__color">Brown</div>
                                    <div class="color-demo__hex">#795548</div>
                                    <div class="color-demo__var">$brown</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #9E9E9E;">
                                    <div class="color-demo__color">Grey</div>
                                    <div class="color-demo__hex">#9E9E9E</div>
                                    <div class="color-demo__var">$grey</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #607D8B;">
                                    <div class="color-demo__color">Blue Grey</div>
                                    <div class="color-demo__hex">#607D8B</div>
                                    <div class="color-demo__var">$blue-grey</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo" style="background-color: #000000;">
                                    <div class="color-demo__color">Black</div>
                                    <div class="color-demo__hex">#000000</div>
                                    <div class="color-demo__var">$black</div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <div class="color-demo color-demo--light color-demo--white" style="background-color: #FFFFFF;">
                                    <div class="color-demo__color">White</div>
                                    <div class="color-demo__hex">#FFFFFF</div>
                                    <div class="color-demo__var">$white</div>
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
    </body>
</html>