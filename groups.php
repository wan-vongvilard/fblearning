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
                        <h1>Groups</h1>

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

                    <div class="toolbar">
                        <div class="toolbar__label">
                            125 Groups
                        </div>

                        <div class="actions">
                            <i class="actions__item zmdi zmdi-search" data-ma-action="toolbar-search-open"></i>
                            <a href="" class="actions__item zmdi zmdi-info-outline hidden-xs-down"></a>

                            <div class="dropdown actions__item hidden-xs-down">
                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="" class="dropdown-item">Refresh</a>
                                    <a href="" class="dropdown-item">Delete</a>
                                    <a href="" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </div>

                        <div class="toolbar__search">
                            <input type="text" placeholder="Search...">

                            <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-ma-action="toolbar-search-close"></i>
                        </div>
                    </div>

                    <div class="row groups">
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <div class="groups__item">
                                <a href="">
                                    <div class="groups__img">
                                        <img class="avatar-img" src="demo/img/contacts/1.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/contacts/2.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/contacts/3.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/contacts/4.jpg" alt="">
                                    </div>

                                    <div class="groups__info">
                                        <strong>Sold Properties</strong>
                                        <small>106 Contacts</small>
                                    </div>
                                </a>

                                <div class="actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Edit</a>
                                            <a class="dropdown-item" href="" data-demo-action="delete-listing">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <div class="groups__item">
                                <a href="">
                                    <div class="groups__img">
                                        <div class="avatar-img avatar-char bg-light-blue">A</div>
                                        <img class="avatar-img" src="demo/img/contacts/7.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/contacts/8.jpg" alt="">
                                        <div class="avatar-img avatar-char bg-red">D</div>
                                    </div>

                                    <div class="groups__info">
                                        <strong>San Fransisco</strong>
                                        <small>12 Contacts</small>
                                    </div>
                                </a>

                                <div class="actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Edit</a>
                                            <a class="dropdown-item" href="" data-demo-action="delete-listing">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <div class="groups__item">
                                <a href="">
                                    <div class="groups__img">
                                        <img class="avatar-img" src="demo/img/contacts/5.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/contacts/6.jpg" alt="">
                                        <div class="avatar-img avatar-char bg-amber">E</div>
                                        <img class="avatar-img" src="demo/img/contacts/8.jpg" alt="">
                                    </div>

                                    <div class="groups__info">
                                        <strong>Pending Leads</strong>
                                        <small>42 Contacts</small>
                                    </div>
                                </a>
                                <div class="actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Edit</a>
                                            <a class="dropdown-item" href="" data-demo-action="delete-listing">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <div class="groups__item">
                                <a href="">
                                    <div class="groups__img">
                                        <img class="avatar-img" src="demo/img/contacts/5.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/contacts/6.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/contacts/8.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/group_empty.jpg" alt="">
                                    </div>

                                    <div class="groups__info">
                                        <strong>Management</strong>
                                        <small>3 Contacts</small>
                                    </div>
                                </a>
                                <div class="actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Edit</a>
                                            <a class="dropdown-item" href="" data-demo-action="delete-listing">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <div class="groups__item">
                                <a href="">
                                    <div class="groups__img">
                                        <img class="avatar-img" src="demo/img/contacts/4.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/contacts/9.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/contacts/2.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/contacts/10.jpg" alt="">
                                    </div>

                                    <div class="groups__info">
                                        <strong>Colleagues</strong>
                                        <small>22 Contacts</small>
                                    </div>
                                </a>
                                <div class="actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Edit</a>
                                            <a class="dropdown-item" href="" data-demo-action="delete-listing">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <div class="groups__item">
                                <a href="">
                                    <div class="groups__img">
                                        <div class="avatar-img avatar-char bg-amber">E</div>
                                        <div class="avatar-img avatar-char bg-blue-grey">T</div>
                                        <div class="avatar-img avatar-char bg-indigo">O</div>
                                        <div class="avatar-img avatar-char bg-teal">G</div>
                                    </div>

                                    <div class="groups__info">
                                        <strong>Los Angeles</strong>
                                        <small>27 Contacts</small>
                                    </div>
                                </a>
                                <div class="actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Edit</a>
                                            <a class="dropdown-item" href="" data-demo-action="delete-listing">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <div class="groups__item">
                                <a href="">
                                    <div class="groups__img">
                                        <img class="avatar-img" src="demo/img/contacts/11.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/group_empty.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/group_empty.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/group_empty.jpg" alt="">
                                    </div>

                                    <div class="groups__info">
                                        <strong>Out Sourcing</strong>
                                        <small>1 Contacts</small>
                                    </div>
                                </a>
                                <div class="actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Edit</a>
                                            <a class="dropdown-item" href="" data-demo-action="delete-listing">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <div class="groups__item">
                                <a href="">
                                    <div class="groups__img">
                                        <div class="avatar-img avatar-char bg-cyan">Z</div>
                                        <div class="avatar-img avatar-char bg-brown">R</div>
                                        <div class="avatar-img avatar-char bg-pink">N</div>
                                        <div class="avatar-img avatar-char bg-green">B</div>
                                    </div>

                                    <div class="groups__info">
                                        <strong>San Diego</strong>
                                        <small>243 Contacts</small>
                                    </div>
                                </a>
                                <div class="actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Edit</a>
                                            <a class="dropdown-item" href="" data-demo-action="delete-listing">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <div class="groups__item">
                                <a href="">
                                    <div class="groups__img">
                                        <img class="avatar-img" src="demo/img/contacts/12.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/contacts/11.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/contacts/10.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/contacts/9.jpg" alt="">
                                    </div>

                                    <div class="groups__info">
                                        <strong>Communication</strong>
                                        <small>96 Contacts</small>
                                    </div>
                                </a>
                                <div class="actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Edit</a>
                                            <a class="dropdown-item" href="" data-demo-action="delete-listing">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <div class="groups__item">
                                <a href="">
                                    <div class="groups__img">
                                        <img class="avatar-img" src="demo/img/group_empty.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/group_empty.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/group_empty.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/group_empty.jpg" alt="">
                                    </div>

                                    <div class="groups__info">
                                        <strong>Not varified</strong>
                                        <small>0 Contacts</small>
                                    </div>
                                </a>
                                <div class="actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Edit</a>
                                            <a class="dropdown-item" href="" data-demo-action="delete-listing">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <div class="groups__item">
                                <a href="">
                                    <div class="groups__img">
                                        <img class="avatar-img" src="demo/img/contacts/2.jpg" alt="">
                                        <img class="avatar-img" src="demo/img/contacts/4.jpg" alt="">
                                        <div class="avatar-img avatar-char bg-teal">G</div>
                                        <img class="avatar-img" src="demo/img/contacts/6.jpg" alt="">
                                    </div>

                                    <div class="groups__info">
                                        <strong>Email List</strong>
                                        <small>10 Contacts</small>
                                    </div>
                                </a>
                                <div class="actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Edit</a>
                                            <a class="dropdown-item" href="" data-demo-action="delete-listing">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <div class="groups__item">
                                <a href="">
                                    <div class="groups__img">
                                        <img class="avatar-img" src="demo/img/contacts/7.jpg" alt="">
                                        <div class="avatar-img avatar-char bg-teal">G</div>
                                        <div class="avatar-img avatar-char bg-purple">L</div>
                                        <img class="avatar-img" src="demo/img/contacts/8.jpg" alt="">
                                    </div>

                                    <div class="groups__info">
                                        <strong>Connected</strong>
                                        <small>178 Contacts</small>
                                    </div>
                                </a>
                                <div class="actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Edit</a>
                                            <a class="dropdown-item" href="" data-demo-action="delete-listing">Delete</a>
                                        </div>
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