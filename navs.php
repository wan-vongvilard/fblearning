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
                        <h1>Navs</h1>
                        <small>Navigation available in Bootstrap share general markup and styles, from the base <code>.nav</code> class to the active and disabled states. Swap modifier classes to switch between each style.</small>

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
                        <div class="card-header">
                            <h2 class="card-title">Base nav</h2>
                            <small class="card-subtitle">The base <code>.nav</code> component is built with flexbox and provide a strong foundation for building all types of navigation components. It includes some style overrides (for working with lists), some link padding for larger hit areas, and basic disabled styling. No active states are included in the base nav.</small>
                        </div>

                        <div class="card-block">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="">Disabled</a>
                                </li>
                            </ul>

                            <br>
                            <br>

                            <p>Classes are used throughout, so your markup can be super flexible. Use <code>&#x3C;ul&#x3E;</code>s like above, or roll your own with say a <code>&#x3C;nav&#x3E;</code> element. Because the <code>.nav</code> uses <code>display: flex</code>, the nav links behave the same as nav items would, but without the extra markup</p>

                            <nav class="nav">
                                <a class="nav-link active" href="">Active</a>
                                <a class="nav-link" href="">Link</a>
                                <a class="nav-link" href="">Link</a>
                                <a class="nav-link disabled" href="">Disabled</a>
                            </nav>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Horizontal alignment</h2>
                            <small class="card-subtitle">Change the horizontal alignment of your nav with <a target="_blank" href="https://v4-alpha.getbootstrap.com/layout/grid/#horizontal-alignment">flexbox utilities</a>. By default, navs are left-aligned, but you can easily change them to center or right aligned.</small>
                        </div>

                        <div class="card-block">
                            <p>Centered with <code>.justify-content-center</code></p>

                            <ul class="nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link active" href="">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="">Disabled</a>
                                </li>
                            </ul>

                            <br>

                            <p>Right-aligned with <code>.justify-content-end</code></p>

                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link active" href="">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Vertical alignment</h2>
                            <small class="card-subtitle">Stack your navigation by changing the flex item direction with the <code>.flex-column</code> utility. Need to stack them on some viewports but not others? Use the responsive versions (e.g., <code>.flex-sm-column</code>).</small>
                        </div>

                        <div class="card-block">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" href="">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="">Disabled</a>
                                </li>
                            </ul>

                            <br>

                            <p>As always, vertical navigation is possible without <code>&#x3C;ul&#x3E;</code>s, too.</p>

                            <nav class="nav flex-column">
                                <a class="nav-link active" href="">Active</a>
                                <a class="nav-link" href="">Link</a>
                                <a class="nav-link" href="">Link</a>
                                <a class="nav-link disabled" href="">Disabled</a>
                            </nav>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Pills</h2>
                            <small class="card-subtitle">Take that same HTML, but use <code>.nav-pills</code> instead</small>
                        </div>

                        <div class="card-block">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="">Disabled</a>
                                </li>
                            </ul>

                            <br>
                            <br>

                            <h3 class="card-block__title">Fill and justify</h3>
                            <p>Force your <code>.nav’s</code> contents to extend the full available width one of two modifier classes. To proportionately fill all available space with your <code>.nav-items</code>, use <code>.nav-fill</code>. Notice that all horizontal space is occupied, but not every nav item has the same width.</p>

                            <br>

                            <ul class="nav nav-pills nav-fill">
                                <li class="nav-item">
                                    <a class="nav-link active" href="">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="">Disabled</a>
                                </li>
                            </ul>
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