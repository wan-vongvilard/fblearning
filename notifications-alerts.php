<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
        <link rel="stylesheet" href="vendors/bower_components/sweetalert2/dist/sweetalert2.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">

        <!-- Demo only -->
        <link rel="stylesheet" href="demo/css/demo.css">
    </head>

    <body data-ma-theme="green">
        <main class="main">
            <?php Include 'topmenu.php';?>
            <?php Include 'mainmenu.php';?>
            <section class="content">
                <div class="content__inner">
                    <header class="content__title">
                        <h1>Notifications and Alerts</h1>

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
                            <h2 class="card-title">Notification</h2>
                            <small class="card-subtitle">Bootstrap Notify helps to turn standard bootstrap alerts into "growl" like notifications.</small>
                        </div>

                        <div class="card-block">
                            <h3 class="card-block__title">Positions</h3>

                            <div class="btn-demo notifications-demo mt-3">
                                <a href="" class="btn btn-secondary" data-type="inverse" data-from="top" data-align="left" data-icon="fa fa-check">Top Left</a>
                                <a href="" class="btn btn-secondary" data-type="inverse" data-from="top" data-align="right" data-icon="fa fa-comments">Top Right</a>
                                <a href="" class="btn btn-secondary" data-type="inverse" data-from="top" data-align="center" data-icon="fa fa-comments">Top Center</a>
                                <a href="" class="btn btn-secondary" data-type="inverse" data-from="bottom" data-align="left">Bottom Left</a>
                                <a href="" class="btn btn-secondary" data-type="inverse" data-from="bottom" data-align="right">Bottom Right</a>
                                <a href="" class="btn btn-secondary" data-type="inverse" data-from="bottom" data-align="center">Bottom Center</a>
                            </div>

                            <br>

                            <h3 class="card-block__title">Types</h3>

                            <div class="btn-demo notifications-demo mt-3">
                                <a href="" class="btn btn-secondary" data-type="inverse">Default</a>
                                <a href="" class="btn btn-info" data-type="info">Info</a>
                                <a href="" class="btn btn-success" data-type="success">Success</a>
                                <a href="" class="btn btn-warning" data-type="warning">Warning</a>
                                <a href="" class="btn btn-danger" data-type="danger">Danger</a>
                            </div>

                            <br>

                            <h3 class="card-block__title">Custom animations</h3>

                            <div class="btn-demo notifications-demo mt-3">
                                <a href="" class="btn btn-secondary" data-type="inverse" data-animation-in="animated fadeIn" data-animation-out="animated fadeOut">Fade In</a>
                                <a href="" class="btn btn-secondary" data-type="inverse" data-animation-in="animated fadeInLeft" data-animation-out="animated fadeOutLeft">Fade In Left</a>
                                <a href="" class="btn btn-secondary" data-type="inverse" data-animation-in="animated fadeInRight" data-animation-out="animated fadeOutRight">Fade In Right</a>
                                <a href="" class="btn btn-secondary" data-type="inverse" data-animation-in="animated fadeInUp" data-animation-out="animated fadeOutUp">Fade In Up</a>
                                <a href="" class="btn btn-secondary" data-type="inverse" data-animation-in="animated fadeInDown" data-animation-out="animated fadeOutDown">Fade In Down</a>
                                <a href="" class="btn btn-secondary" data-type="inverse" data-animation-in="animated bounceIn" data-animation-out="animated bounceOut">Bounce In</a>
                                <a href="" class="btn btn-secondary" data-type="inverse" data-animation-in="animated bounceInLeft" data-animation-out="animated bounceOutLeft">Bounce In Left</a>
                                <a href="" class="btn btn-secondary" data-type="inverse" data-animation-in="animated bounceInRight" data-animation-out="animated bounceOutRight">Bounce In Right</a>
                                <a href="" class="btn btn-secondary" data-type="inverse" data-animation-in="animated bounceInUp" data-animation-out="animated bounceOutUp">Bounce In Up</a>
                                <a href="" class="btn btn-secondary" data-type="inverse" data-animation-in="animated rotateInDownRight" data-animation-out="animated rotateOutUpRight">Fall In Right</a>
                                <a href="" class="btn btn-secondary" data-type="inverse" data-animation-in="animated rotateIn" data-animation-out="animated rotateOut">Rotate In</a>
                                <a href="" class="btn btn-secondary" data-type="inverse" data-animation-in="animated flipInX" data-animation-out="animated flipOutX">Flip In X</a>
                                <a href="" class="btn btn-secondary" data-type="inverse" data-animation-in="animated flipInY" data-animation-out="animated flipOutY">Flip In Y</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Custom Javascript Alerts</h2>
                            <small class="card-subtitle">SweetAlert 2 is beautiful replacement for javascript alert. SweetAlert automatically centers itself on the page and looks great no matter if you're using a desktop computer, mobile or tablet. It's even highly customizeable, as you can see below!</small>
                        </div>

                        <div class="card-block">
                            <h3 class="card-block__title">Basic examples</h3>
                            <p>Alerts can be customized to display custom variants using optional settings.</p>

                            <div class="btn-demo mt-4">
                                <button class="btn btn-primary mb-1" id="sa-basic">Basic Message</button>

                                <button class="btn btn-primary mb-1" id="sa-info">Info Message</button>

                                <button class="btn btn-primary mb-1" id="sa-success">Success Message</button>

                                <button class="btn btn-primary mb-1" id="sa-warning">Warning Message</button>

                                <button class="btn btn-primary mb-1" id="sa-question">Question</button>
                            </div>

                            <br>
                            <br>

                            <h3 class="card-block__title">Advanced examples</h3>

                            <br>

                            <p>A warning message, with a function attached to the "Confirm"-button":</p>
                            <button class="btn btn-primary mb-1" id="sa-funtion">This ain't any normal browser alert</button>

                            <br>
                            <br>

                            <p>Auto closing alert with timer.</p>
                            <button class="btn btn-primary mb-1" id="sa-timer">Show me the timer alert</button>

                            <br>
                            <br>

                            <p>A message with custom Image Header</p>
                            <button class="btn btn-primary mb-1" id="sa-image">Custom headers are cool in an alert</button>

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

        <script src="vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
        <script src="vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>

        <!-- Demo only -->
        <script src="demo/js/demo.js"></script>

        <!-- Demo -->
        <script type="text/javascript">

            /*--------------------------------------
                Bootstrap Notify Notifications
            ---------------------------------------*/
            function notify(from, align, icon, type, animIn, animOut){
                $.notify({
                    icon: icon,
                    title: ' Bootstrap Notify',
                    message: 'Turning standard Bootstrap alerts into awesome notifications',
                    url: ''
                },{
                    element: 'body',
                    type: type,
                    allow_dismiss: true,
                    placement: {
                        from: from,
                        align: align
                    },
                    offset: {
                        x: 20,
                        y: 20
                    },
                    spacing: 10,
                    z_index: 1031,
                    delay: 2500,
                    timer: 1000,
                    url_target: '_blank',
                    mouse_over: false,
                    animate: {
                        enter: animIn,
                        exit: animOut
                    },
                    template:   '<div data-notify="container" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                    '<span data-notify="icon"></span> ' +
                    '<span data-notify="title">{1}</span> ' +
                    '<span data-notify="message">{2}</span>' +
                    '<div class="progress" data-notify="progressbar">' +
                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                    '</div>' +
                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                    '<button type="button" aria-hidden="true" data-notify="dismiss" class="alert--notify__close">Close</button>' +
                    '</div>'
                });
            }

            $('.notifications-demo > .btn').click(function(e){
                e.preventDefault();
                var nFrom = $(this).attr('data-from');
                var nAlign = $(this).attr('data-align');
                var nIcons = $(this).attr('data-icon');
                var nType = $(this).attr('data-type');
                var nAnimIn = $(this).attr('data-animation-in');
                var nAnimOut = $(this).attr('data-animation-out');

                notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
            });


            /*--------------------------------------
                Sweet Alert Dialogs
            ---------------------------------------*/

            // Basic
            $('#sa-basic').click(function(){
                swal({
                    title: "Here's a message!",
                    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-primary'
                })
            });

            // Success Message
            $('#sa-success').click(function(){
                swal({
                    title: 'Good job!',
                    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis',
                    type: 'success',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-primary'
                })
            });

            // Success Message
            $('#sa-info').click(function(){
                swal({
                    title: 'Information!',
                    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis',
                    type: 'info',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-primary'
                })
            });

            // Warning Message
            $('#sa-warning').click(function(){
                swal({
                    title: 'Not a good sign...',
                    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis',
                    type: 'warning',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-primary'
                })
            });

            // Question Message
            $('#sa-question').click(function(){
                swal({
                    title: 'Hmm.. what did you say?',
                    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis',
                    type: 'question',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-primary'
                })
            });

            // Warning Message with function
            $('#sa-funtion').click(function(){
                swal({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this imaginary file!',
                    type: 'warning',
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-danger',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonClass: 'btn btn-secondary'
                }).then(function(){
                    swal({
                        title: 'Are you sure?',
                        text: 'You will not be able to recover this imaginary file!',
                        type: 'success',
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-primary'
                    });
                });
            });

            // Custom Image
            $('#sa-image').click(function(){
                swal({
                    title: 'Sweet!',
                    text: "Here's a custom image.",
                    imageUrl: 'demo/img/thumbs-up.png',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-primary',
                    confirmButtonText: 'Super!'
                });
            });

            // Auto Close Timer
            $('#sa-timer').click(function(){
                swal({
                    title: 'Auto close alert!',
                    text: 'I will close in 2 seconds.',
                    timer: 2000,
                    showConfirmButton: false
                });
            });
        </script>
    </body>
</html>