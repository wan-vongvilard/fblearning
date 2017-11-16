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
                <div class="content__inner content__inner--sm">
                    <header class="content__title">
                        <h1>Vongvilard Nuannil</h1>

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

                    <div class="card profile">
                        <div class="profile__img">
                            <img src="demo/img/contacts/9.jpg" alt="">

                            <a href="" class="zmdi zmdi-camera profile__img__edit"></a>
                        </div>

                        <div class="profile__info">
                            <p>     </p>
                            <ul class="icon-list">
                                <li><i class="zmdi zmdi-phone"></i> 084 313 0399</li>
                                <li><i class="zmdi zmdi-email"></i> 574234058@parichat.skru.ac.th</li>
                                <li><i class="zmdi zmdi-twitter"></i> @Vongvilard_wan</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toolbar">
                        <nav class="toolbar__nav">
                            <a class="active" href="profile-about.php">About</a>
                            <a href="profile-photos.php">Photos</a>
                            <a href="profile-contacts.php">Contacts</a>
                        </nav>

                        <div class="actions">
                            <i class="actions__item zmdi zmdi-search" data-ma-action="toolbar-search-open"></i>
                        </div>

                        <div class="toolbar__search">
                            <input type="text" placeholder="Search...">

                            <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-ma-action="toolbar-search-close"></i>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-block__title mb-4">About</h4>

                            <p> </p>

                            <br>
                            <h4 class="card-block__title mb-4">Contact Information</h4>
                            <ul class="icon-list">
                                <li><i class="zmdi zmdi-phone"></i>084 313 0399</li>
                                <li><i class="zmdi zmdi-email"></i>574234058@parichat.skru.ac.th</li>
                                <li><i class="zmdi zmdi-facebook"></i>Vongvilard nuannil</li>
                                <li><i class="zmdi zmdi-twitter"></i>@Vongvilard_wan</li>
                                <li><i class="zmdi zmdi-pin"></i>5470 Madison Street Severna Park, MD 21146</li>
                            </ul>
                        </div>
                    </div>
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