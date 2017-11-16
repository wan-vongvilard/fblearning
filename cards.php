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
                    <h1>Basic example</h1>
                    <small>Below is an example of a basic card with mixed content and a fixed width. Cards have no fixed width to start, so they’ll naturally fill the full width of its parent element.</small>

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

                <div class="card-demo">
                    <div class="card">

                        <div class="card-header">
                            <h2 class="card-title">Card title</h2>
                            <small class="card-subtitle">Praesent commodo cursus magna scelerisque consectetur.</small>
                        </div>

                        <div class="card-block">
                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Donec sed odio dui.</p>
                        </div>

                    </div>
                </div>

                <br>
                <br>

                <header class="content__title">
                    <h1>Card with actions</h1>
                    <small>Cards can also contains action links in icon format.</small>
                </header>

                <div class="card-demo">
                    <div class="card">

                        <div class="card-header">
                            <h2 class="card-title">Card title</h2>
                            <small class="card-subtitle">Praesent commodo cursus magna scelerisque consectetur.</small>

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
                        </div>

                        <div class="card-block">
                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Donec sed odio dui.</p>
                        </div>

                    </div>
                </div>

                <div class="card-demo">
                    <div class="card">

                        <div class="card-header">
                            <h2 class="card-title">Card title</h2>
                            <small class="card-subtitle">Praesent commodo cursus magna scelerisque consectetur.</small>

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
                        </div>

                        <div class="card-block">
                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Donec sed odio dui.</p>
                        </div>

                    </div>
                </div>

                <div class="card-demo">
                    <div class="card card-primary card-inverse">

                        <div class="card-header">
                            <h2 class="card-title">Card title</h2>
                            <small class="card-subtitle">Praesent commodo cursus magna scelerisque consectetur.</small>

                            <div class="actions actions--inverse">
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
                        </div>

                        <div class="card-block">
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Donec sed odio dui.</p>
                        </div>

                    </div>
                </div>

                <br>
                <br>

                <header class="content__title">
                    <h1>Blocks</h1>
                    <small>The building block of a card is the <code>.card-block</code>. Use it whenever you need a padded section within a card.</small>
                </header>

                <div class="card-demo">
                    <div class="card">
                        <div class="card-block">
                            <p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                        </div>
                    </div>
                </div>

                <div class="card-demo">
                    <div class="card">
                        <div class="card-block">
                            <p>Aenean lacinia bibendum nulla sed consectetur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nulla vitae elit libero</p>
                        </div>
                    </div>
                </div>

                <br>
                <br>

                <header class="content__title">
                    <h1>Card links</h1>
                    <small>Links are added and placed next to each other by adding <code>.card-link</code> to a <code>&#x3C;a&#x3E;</code> tag.</small>
                </header>

                <div class="card-demo">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Card title</h2>
                            <small class="card-subtitle">Praesent commodo cursus magna scelerisque consectetur</small>
                        </div>

                        <div class="card-block">
                            <p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                        </div>

                        <div class="card-footer">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>

                <div class="card-demo">
                    <div class="card">
                        <div class="card-block">
                            <p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                        </div>

                        <div class="card-footer">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>

                <br>
                <br>

                <header class="content__title">
                    <h1>Images</h1>
                    <small>Cards can also include images in the top and bottom.</small>
                </header>

                <div class="card-demo">
                    <div class="card">
                        <img class="card-img-top" src="demo/img/headers/6.png">

                        <div class="card-header">
                            <h2 class="card-title">Card title</h2>
                            <small class="card-subtitle">Praesent commodo cursus magna scelerisque consectetur</small>
                        </div>

                        <div class="card-block">
                            <p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                        </div>
                    </div>
                </div>

                <div class="card-demo">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Card title</h2>
                            <small class="card-subtitle">Praesent commodo cursus magna scelerisque consectetur</small>
                        </div>

                        <div class="card-block">
                            <p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                        </div>

                        <img class="card-img-bottom" src="demo/img/headers/4.png">
                    </div>
                </div>

                <br>
                <br>

                <header class="content__title">
                    <h1>Image overlays</h1>
                    <small>Turn an image into a card background and overlay your card’s text. Depending on the image, you may or may not need <code>.card-inverse</code></small>
                </header>

                <div class="card-demo">
                    <div class="card card-inverse">
                        <img class="card-img" src="demo/img/card-img-overlay.jpg">

                        <div class="card-img-overlay">
                            <div class="card-header">
                                <h2 class="card-title">Card title</h2>
                                <small class="card-subtitle">Praesent commodo cursus magna scelerisque consectetur</small>
                            </div>

                            <div class="card-block">
                                <p class="card-text">Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <br>
                <br>

                <header class="content__title">
                    <h1>Inverted text & background variants</h1>
                    <small>Cards include their own variant classes for quickly changing the background-color and border-color of a card. Darker colors require the use of <code>.card-inverse</code> invert the text colors.</small>
                </header>

                <div class="card-demo">
                    <div class="card card-primary card-inverse">
                        <div class="card-block">
                            <p class="card-text">Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>
                    </div>
                </div>

                <div class="card-demo">
                    <div class="card card-success card-inverse">
                        <div class="card-block">
                            <p class="card-text">Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>
                    </div>
                </div>

                <div class="card-demo">
                    <div class="card card-info card-inverse">
                        <div class="card-block">
                            <p class="card-text">Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>
                    </div>
                </div>

                <div class="card-demo">
                    <div class="card card-warning card-inverse">
                        <div class="card-block">
                            <p class="card-text">Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>
                    </div>
                </div>

                <div class="card-demo">
                    <div class="card card-danger card-inverse">
                        <div class="card-block">
                            <p class="card-text">Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>
                    </div>
                </div>

                <br>
                <br>

                <header class="content__title">
                    <h1>Outline cards</h1>
                    <small>In need of a colored card, but not the hefty background colors they bring? Replace the default modifier classes with the <code>.card-outline-*</code> ones to style just the <code>border-color</code> of a card.</small>
                </header>

                <div class="card-demo">
                    <div class="card card-outline-primary">
                        <div class="card-block">
                            <p class="card-text">Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>
                    </div>
                </div>

                <div class="card-demo">
                    <div class="card card-outline-success">
                        <div class="card-block">
                            <p class="card-text">Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>
                    </div>
                </div>

                <div class="card-demo">
                    <div class="card card-outline-info">
                        <div class="card-block">
                            <p class="card-text">Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>
                    </div>
                </div>

                <div class="card-demo">
                    <div class="card card-outline-warning">
                        <div class="card-block">
                            <p class="card-text">Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>
                    </div>
                </div>

                <div class="card-demo">
                    <div class="card card-outline-danger">
                        <div class="card-block">
                            <p class="card-text">Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
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