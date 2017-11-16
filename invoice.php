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
                        <h1>Invoice</h1>
                        <small>Print ready simple and sleek invoice template. Please use Google Chrome or any other Webkit browsers for better printing.</small>

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

                    <div class="invoice">
                        <div class="invoice__header">
                            <img class="invoice__logo" src="demo/img/invoice-logo.png" alt="">
                        </div>

                        <div class="row invoice__address">
                            <div class="col-6">
                                <div class="text-right">
                                    <p>Invoice from</p>

                                    <h4>David Designs LLC</h4>

                                    <address>
                                        44, Qube Towers
                                        Dubai Media City, Dubai<br>
                                        United Arab Emirates
                                    </address>

                                    0097154686384<br/>
                                    david.atom@ddesign.com
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="text-left">
                                    <p>Invoice to</p>

                                    <h4>Mallinda Hollaway</h4>

                                    <address>
                                        10098 ABC Towers
                                        Dubai Silicon Oasis, Dubai<br>
                                        United Arab Emirates.
                                    </address>

                                    00971123456789<br/>
                                    malinda.h@gmail.com
                                </div>
                            </div>
                        </div>

                        <div class="row invoice__attrs">
                            <div class="col-3">
                                <div class="invoice__attrs__item">
                                    <small>Invoice#</small>
                                    <h3>456213</h3>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="invoice__attrs__item">
                                    <small>Date</small>
                                    <h3>20/06/2015</h3>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="invoice__attrs__item">
                                    <small>Whatever</small>
                                    <h3>472-000</h3>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="invoice__attrs__item">
                                    <small>Grand Total</small>
                                    <h3>$23,980</h3>
                                </div>
                            </div>
                        </div>


                        <table class="table table-bordered invoice__table">
                            <thead>
                                <tr class="text-uppercase">
                                    <th>ITEM DESCRIPTION</th>
                                    <th>UNIT PRICE</th>
                                    <th>QUANTITY</th>
                                    <th >TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 50%">Nullam consectetur dolor nec ullamcorper finibus. Quisque a porta mauris, non venenatis mi. Pellentesque habitant morbi tristique</td>

                                    <td>$450.00</td>
                                    <td>05</td>
                                    <td>$2250.00</td>
                                </tr>

                                <tr>
                                    <td>Pellentesque habitant morbi tristique senectus</td>
                                    <td>$20.00</td>
                                    <td>02</td>
                                    <td>$40.00</td>
                                </tr>

                                <tr>
                                    <td>Maecenas nec faucibus lectus. Ut cursus elit ante, rutrum pretium augue tincidunt ut. Suspendisse ultrices sapien sit amet</td>
                                    <td>$2322.00</td>
                                    <td>01</td>
                                    <td>$2322.00</td>
                                </tr>

                                <tr>
                                    <td>Quisque a porta mauris, non venenatis mi. Pellentesque habitant morbi</td>
                                    <td>$1290.00</td>
                                    <td>12</td>
                                    <td>$15,480.00</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td>$20,092.00</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="invoice__remarks">
                            <h5>REMARKS</h5>
                            <p>Ornare non tortor. Nam quis ipsum vitae dolor porttitor interdum. Curabitur faucibus erat vel ante fermentum lacinia. Integer porttitor laoreet suscipit. Sed cursus cursus massa ut pellentesque. Phasellus vehicula dictum arcu, eu interdum massa bibendum.</p>

                            <h5 class="mt-5">THANK YOU FOR YOUR BUSINESS</h5>
                            <p>Proin ac iaculis metus. Etiam nisi nulla, fermentum blandit consectetur sed, ornare non tortor. Nam quis ipsum vitae dolor porttitor interdum. Curabitur faucibus erat vel ante fermentum lacinia. Integer porttitor laoreet suscipit. Sed cursus cursus massa ut pellentesque. Phasellus vehicula dictum arcu, eu interdum massa bibendum sit amet.</p>
                        </div>

                        <footer class="invoice__footer">
                            <a href="">support@company.com</a>
                            <a href="">00971 452 9900</a>
                            <a href="">www.company.com</a>
                        </footer>
                    </div>

                    <button class="btn btn-danger btn--action btn--fixed " data-ma-action="print"><i class="zmdi zmdi-print"></i></button>
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