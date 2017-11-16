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
    </head>

    <body data-ma-theme="green">
        <main class="main">
            <?php Include 'topmenu.php';?>
            <?php Include 'mainmenu.php';?>

            <section class="content">
                <div class="content__inner">
                    <header class="content__title">
                        <h1>Toolbars</h1>
                        <small>Toolbars are used as action headers to perform certain list of actions within a page with list of data.</small>

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

                    <br>

                    <header class="content__title">
                        <h1>Basic example</h1>
                        <small>Basic example with label only</small>
                    </header>

                    <div class="toolbar">
                        <div class="toolbar__label">This is a sample label</div>
                    </div>


                    <header class="content__title">
                        <h1>Nav</h1>
                        <small>Add set of nav links</small>
                    </header>

                    <div class="toolbar">
                        <div class="toolbar__nav">
                            <a href="">Profile</a>
                            <a href="">Messages</a>
                            <a href="">Settings</a>
                        </div>
                    </div>

                    <header class="content__title">
                        <h1>Search</h1>
                        <small>Add togglable search blocks with input and close options</small>
                    </header>

                    <div class="toolbar">
                        <div class="actions">
                            <i class="actions__item zmdi zmdi-search" data-ma-action="toolbar-search-open"></i>
                        </div>

                        <div class="toolbar__search">
                            <input type="text" placeholder="Search...">
                            <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-ma-action="toolbar-search-close"></i>
                        </div>
                    </div>

                    <header class="content__title">
                        <h1>Action Icons</h1>
                        <small>Add further action icons in addition to search</small>
                    </header>

                    <div class="toolbar">
                        <div class="actions">
                            <i class="actions__item zmdi zmdi-search" data-ma-action="toolbar-search-open"></i>
                            <a href="" class="actions__item zmdi zmdi-time"></a>
                            <div class="dropdown actions__item">
                                <i class="zmdi zmdi-sort" data-toggle="dropdown"></i>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="" class="dropdown-item">Last Modified</a>
                                    <a href="" class="dropdown-item">Name</a>
                                    <a href="" class="dropdown-item">Size</a>
                                </div>
                            </div>
                            <a href="" class="actions__item zmdi zmdi-help-outline"></a>
                        </div>

                        <div class="toolbar__search">
                            <input type="text" placeholder="Search...">
                            <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-ma-action="toolbar-search-close"></i>
                        </div>
                    </div>

                    <header class="content__title">
                        <h1>Complete example</h1>
                        <small>Complete toolbar example with navs and action icons</small>
                    </header>

                    <div class="toolbar">
                        <div class="toolbar__nav">
                            <a href="">Profile</a>
                            <a href="">Messages</a>
                            <a href="">Settings</a>
                        </div>

                        <div class="actions">
                            <i class="actions__item zmdi zmdi-search" data-ma-action="toolbar-search-open"></i>
                            <a href="" class="actions__item zmdi zmdi-time hidden-xs-down"></a>
                            <div class="dropdown actions__item hidden-xs-down">
                                <i class="zmdi zmdi-sort" data-toggle="dropdown"></i>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="" class="dropdown-item">Last Modified</a>
                                    <a href="" class="dropdown-item">Name</a>
                                    <a href="" class="dropdown-item">Size</a>
                                </div>
                            </div>
                            <a href="" class="actions__item zmdi zmdi-help-outline hidden-xs-down"></a>
                        </div>

                        <div class="toolbar__search">
                            <input type="text" placeholder="Search...">
                            <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-ma-action="toolbar-search-close"></i>
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