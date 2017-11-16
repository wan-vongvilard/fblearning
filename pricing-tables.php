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
            <?php include 'mainmenu.php';?>
            <section class="content">
                <div class="content__inner">
                    <div class="row price-table price-table--basic">
                        <div class="col-md-4">
                            <div class="price-table__item">
                                <header class="price-table__header bg-light-blue">
                                    <div class="price-table__title">4614102</div>
                                    <div class="price-table__desc">กฎหมายและจริยธรรมทางคอมพิวเตอร์</div><small>นางสาวยุพดี อินทสร</small>
                                </header>
                                <a href="" class="price-table__action bg-light-blue">..</a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="price-table__item">
                                <header class="price-table__header bg-red">
                                    <div class="price-table__title">4614605</div>
                                    <div class="price-table__desc">โครงงานทางวิทยาการคอมพิวเตอร์</div><small>..</small>
                                </header>
                                <a href="" class="price-table__action bg-red">Select Plan</a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="price-table__item">
                                <header class="price-table__header bg-purple">
                                    <div class="price-table__title">4663301</div>
                                    <div class="price-table__desc">การจัดการและบำรุงรักษาระบบคอมพิวเตอร์</div><small>นายสกรรจ์ รอดคล้าย</small>
                                </header>
                                <a href="" class="price-table__action bg-purple">Select Plan</a>
                            </div>
                        </div>

                        <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <?php Include 'show.php'; ?>
                    </div>
                     </div>
                      </div>
                    </div>

                    <br>
                    <br>
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