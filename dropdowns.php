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
                <div class="content__inner">
                    <header class="content__title">
                        <h1>Dropdowns</h1>
                        <small>Dropdowns are toggleable, contextual overlays for displaying lists of links and more. They’re made interactive with the included dropdown directives.</small>

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
                            <h2 class="card-title">Single button dropdowns</h2>
                            <small class="card-subtitle">Any single <code>.btn</code> can be turned into a dropdown toggle with some markup changes. Here’s how you can put them to work with either <code>&#x3C;button&#x3E;</code>elements.
                            </small>
                        </div>

                        <div class="card-block">

                            <div class="dropdown-demo">
                                <div class="dropdown">
                                    <button class="btn btn-primary" data-toggle="dropdown">Primary</button>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item">Action</a>
                                        <a href="" class="dropdown-item">Another Action</a>
                                        <a href="" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-demo">
                                <div class="dropdown">
                                    <button class="btn btn-secondary" data-toggle="dropdown">Secondary</button>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item">Action</a>
                                        <a href="" class="dropdown-item">Another Action</a>
                                        <a href="" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-demo">
                                <div class="dropdown">
                                    <button class="btn btn-info" data-toggle="dropdown">Info</button>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item">Action</a>
                                        <a href="" class="dropdown-item">Another Action</a>
                                        <a href="" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-demo">
                                <div class="dropdown">
                                    <button class="btn btn-success" data-toggle="dropdown">Success</button>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item">Action</a>
                                        <a href="" class="dropdown-item">Another Action</a>
                                        <a href="" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-demo">
                                <div class="dropdown">
                                    <button class="btn btn-warning" data-toggle="dropdown">Warning</button>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item">Action</a>
                                        <a href="" class="dropdown-item">Another Action</a>
                                        <a href="" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-demo">
                                <div class="dropdown">
                                    <button class="btn btn-danger" data-toggle="dropdown">Danger</button>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item">Action</a>
                                        <a href="" class="dropdown-item">Another Action</a>
                                        <a href="" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Split button dropdowns</h2>
                            <small class="card-subtitle">Create split button dropdowns with virtually the same markup as single button dropdowns, but with the addition of <code>.dropdown-toggle-split</code> for proper spacing around the dropdown caret.</small>
                        </div>

                        <div class="card-block">
                            <div class="dropdown-demo">
                                <div class="btn-group" dropdown>
                                    <button id="split-button" type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle-split" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li class="divider dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="dropdown-demo">
                                <div class="btn-group" dropdown>
                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                    <button type="button" class="btn btn-secondary dropdown-toggle-split" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li class="divider dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="dropdown-demo">
                                <div class="btn-group" dropdown>
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button type="button" class="btn btn-info dropdown-toggle-split" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li class="divider dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="dropdown-demo">
                                <div class="btn-group" dropdown>
                                    <button type="button" class="btn btn-success">Success</button>
                                    <button type="button" class="btn btn-success dropdown-toggle-split" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li class="divider dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="dropdown-demo">
                                <div class="btn-group" dropdown>
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button type="button" class="btn btn-warning dropdown-toggle-split" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li class="divider dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="dropdown-demo">
                                <div class="btn-group" dropdown>
                                    <button type="button" class="btn btn-danger">Danger</button>
                                    <button type="button" class="btn btn-danger dropdown-toggle-split" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li class="divider dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Disabled</h2>
                            <small class="card-subtitle">Use <code>disabled</code> attribute on <code>data-toggle="dropdown"</code> to disable the toggle.</small>
                        </div>

                        <div class="card-block">
                            <div class="dropdown-demo">
                                <div class="dropdown">
                                    <button class="btn btn-primary" data-toggle="dropdown" disabled>Primary</button>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item">Action</a>
                                        <a href="" class="dropdown-item">Another Action</a>
                                        <a href="" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-demo">
                                <div class="dropdown">
                                    <button class="btn btn-secondary" data-toggle="dropdown" disabled>Secondary</button>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item">Action</a>
                                        <a href="" class="dropdown-item">Another Action</a>
                                        <a href="" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-demo">
                                <div class="dropdown">
                                    <button class="btn btn-info" data-toggle="dropdown" disabled>Info</button>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item">Action</a>
                                        <a href="" class="dropdown-item">Another Action</a>
                                        <a href="" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-demo">
                                <div class="dropdown">
                                    <button class="btn btn-success" data-toggle="dropdown" disabled>Success</button>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item">Action</a>
                                        <a href="" class="dropdown-item">Another Action</a>
                                        <a href="" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-demo">
                                <div class="dropdown">
                                    <button class="btn btn-warning" data-toggle="dropdown" disabled>Warning</button>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item">Action</a>
                                        <a href="" class="dropdown-item">Another Action</a>
                                        <a href="" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-demo">
                                <div class="dropdown">
                                    <button class="btn btn-danger" data-toggle="dropdown" disabled>Danger</button>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item">Action</a>
                                        <a href="" class="dropdown-item">Another Action</a>
                                        <a href="" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Menu alignment</h2>
                            <small class="card-subtitle">By default, a dropdown menu is automatically positioned 100% from the top and along the left side of its parent. Add class <code>.dropdown-menu-right</code> to a <code>dropdownMenu</code> to right align the dropdown menu.
                            </small>
                        </div>

                        <div class="card-block">
                            <div class="dropdown-demo">
                                <div class="dropdown">
                                    <button class="btn btn-secondary" data-toggle="dropdown">Default (Left)</button>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item">Action</a>
                                        <a href="" class="dropdown-item">Another Action</a>
                                        <a href="" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-demo">
                                <div class="dropdown">
                                    <button class="btn btn-secondary" data-toggle="dropdown">Right aligned</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="" class="dropdown-item">Action</a>
                                        <a href="" class="dropdown-item">Another Action</a>
                                        <a href="" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Dropup variation</h2>
                            <small class="card-subtitle">Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent element.</small>
                        </div>

                        <div class="card-block">
                            <div class="dropdown-demo">
                                <div class="dropup">
                                    <button class="btn btn-secondary" data-toggle="dropdown">This is a Dropup</button>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item">Action</a>
                                        <a href="" class="dropdown-item">Another Action</a>
                                        <a href="" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-demo">
                                <div class="dropup">
                                    <button class="btn btn-secondary" data-toggle="dropdown">This is a Dropup right aligned</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="" class="dropdown-item">Action</a>
                                        <a href="" class="dropdown-item">Another Action</a>
                                        <a href="" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Separated link</a>
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
    </body>
</html>