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
                        <h1>Form Elements</h1>

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
                            <h2 class="card-title">Textual inputs</h2>
                            <small class="card-subtitle">Basic Textual inputs with different sizes by height and column.</small>
                        </div>

                        <div class="card-block">
                            <h3 class="card-block__title">Control sizing</h3>

                            <br>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" placeholder="Input Small">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Input Default">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Input Large">
                                <i class="form-group__bar"></i>
                            </div>

                            <br>

                            <h3 class="card-block__title">Column sizing</h3>

                            <br>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-sm-4">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-sm-4">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-sm-4">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-sm-3">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-sm-3">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-sm-3">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-sm-3">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-sm-6">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="col-sm-6">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div>

                            <br/>

                            <h3 class="card-block__title">Floating Label - Floating animation for label when Input field is active.</h3>

                            <div class="form-group form-group--float">
                                <input type="text" class="form-control form-control-sm">
                                <label>Input Small</label>
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group form-group--float">
                                <input type="text" class="form-control">
                                <label>Input Default</label>
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group form-group--float">
                                <input type="text" class="form-control form-control-lg">
                                <label>Input Large</label>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Textarea</h2>
                            <small class="card-subtitle">Form control which supports multiple lines of text. Change 'rows' attribute as necessary.</small>
                        </div>

                        <div class="card-block">
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Let us type some lorem ipsum...."></textarea>
                                <i class="form-group__bar"></i>
                            </div>

                            <br>

                            <h3 class="card-block__title">Height Auto Growing</h3>

                            <br>

                            <div class="form-group">
                                <textarea class="form-control textarea-autosize" placeholder="Start pressing Enter to see growing..."></textarea>
                                <i class="form-group__bar"></i>
                            </div>

                            <br>

                            <h3 class="card-block__title">Disabled State</h3>

                            <div class="form-group">
                                <textarea class="form-control" disabled>This is disabled</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Select</h2>
                            <small class="card-subtitle">Use the default option, or add multiple to show multiple options at once.</small>
                        </div>

                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="card-block__title">Basic Example</h3>
                                    <br>

                                    <div class="form-group form-group--select">
                                        <div class="select">
                                            <select class="form-control">
                                                <option>Select an Option</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <h3 class="card-block__title">Disabled Stat</h3>
                                    <br>

                                    <div class="form-group form-group--select">
                                        <div class="select">
                                            <select class="form-control" disabled>
                                                <option>Select an Option</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Checkbox and Radio</h2>
                            <small class="card-subtitle">Default checkboxes and radios are improved upon with the help of <code>.form-check</code>, a single class for both input types that improves the layout and behavior of their HTML elements. Checkboxes are for selecting one or several options in a list, while radios are for selecting one option from many.</small>
                        </div>

                        <div class="card-block">
                            <h3 class="card-block__title">Default (stacked)</h3>
                            <p>By default, any number of checkboxes and radios that are immediate sibling will be vertically stacked and appropriately spaced with <code>.form-check</code>.</p>

                            <br>

                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Option one is this and that-be sure to include why it's great</span>
                            </label>

                            <div class="clearfix mb-2"></div>

                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" disabled>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Option two is disabled</span>
                            </label>

                            <br/>
                            <br/>

                            <label class="custom-control custom-radio">
                                <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Toggle this custom radio</span>
                            </label>

                            <div class="clearfix mb-2"></div>

                            <label class="custom-control custom-radio">
                                <input type="radio" name="radio" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Or toggle this other custom radio</span>
                            </label>

                            <div class="clearfix mb-2"></div>

                            <label class="custom-control custom-radio">
                                <input type="radio" name="radio" class="custom-control-input" disabled>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">This one is disabled</span>
                            </label>

                            <br/>
                            <br/>

                            <h3 class="card-block__title">Inline Checkboxes and Radios</h3>

                            <br>

                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">One</span>
                            </label>

                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Two</span>
                            </label>

                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Three</span>
                            </label>

                            <div class="clearfix mb-2"></div>

                            <label class="custom-control custom-radio">
                                <input type="radio" name="radio-inline" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">One</span>
                            </label>

                            <label class="custom-control custom-radio">
                                <input type="radio" name="radio-inline" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Two</span>
                            </label>

                            <label class="custom-control custom-radio">
                                <input type="radio" name="radio-inline" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Three</span>
                            </label>
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

        <script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>
</html>