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
                    <h1>Buttons</h1>
                    <small>Use Bootstrap’s custom button styles for actions in forms, dialogs, and more. Includes support for a handful of contextual variations, sizes, states, and more.</small>

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
                        <h2 class="card-title">Basic Examples</h2>
                        <small class="card-subtitle">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</small>
                    </div>

                    <div class="card-block">
                        <div class="btn-demo">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-link">Link</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Outline buttons</h2>
                        <small class="card-subtitle">In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code>.btn-outline-*</code> ones to remove all background images and colors on any button.</small>
                    </div>

                    <div class="card-block">
                        <div class="btn-demo">
                            <button type="button" class="btn btn-outline-primary">Primary</button>
                            <button type="button" class="btn btn-outline-success">Success</button>
                            <button type="button" class="btn btn-outline-info">Info</button>
                            <button type="button" class="btn btn-outline-warning">Warning</button>
                            <button type="button" class="btn btn-outline-danger">Danger</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Icon buttons</h2>
                        <small class="card-subtitle">You can refer the Icons page for the complete list of Font Icons which are inspired by Material Design</small>
                    </div>

                    <div class="card-block">
                        <div class="btn-demo">
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-home"></i> Home</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-search"></i> Search</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-more-vert"></i> More</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-arrow-forward"></i> Forward</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-arrow-back"></i> Back</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-refresh"></i> Sync</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-check"></i> Check</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-close"></i> Check</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-menu"></i> Menu</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-apps"></i> Apps</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-check-all"></i> Done</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-trending-up"></i> Up</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-apps"></i> Get</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-phone"></i> Call</button>

                            <br/>
                            <br/>

                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-home"></i> Home</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-search"></i> Search</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-more-vert"></i> More</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-arrow-forward"></i> Forward</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-arrow-back"></i> Back</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-refresh"></i> Sync</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-check"></i> Check</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-close"></i> Check</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-menu"></i> Menu</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-apps"></i> Apps</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-check-all"></i> Done</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-trending-up"></i> Up</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-apps"></i> Get</button>
                            <button class="btn btn-secondary btn--icon-text"><i class="zmdi zmdi-phone"></i> Call</button>

                            <br/>
                            <br/>

                            <button class="btn btn-primary btn--icon-text"><i class="zmdi zmdi-home"></i> Home</button>
                            <button class="btn btn-info btn--icon-text"><i class="zmdi zmdi-search"></i> Search</button>
                            <button class="btn btn-success btn--icon-text"><i class="zmdi zmdi-more-vert"></i> More</button>
                            <button class="btn btn-warning btn--icon-text"><i class="zmdi zmdi-arrow-forward"></i> Forward</button>
                            <button class="btn btn-danger btn--icon-text"><i class="zmdi zmdi-arrow-back"></i> Back</button>

                            <br/>
                            <br/>
                            <br/>

                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-home"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-search"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-more-vert"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-arrow-forward"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-arrow-back"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-refresh"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-check"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-close"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-menu"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-apps"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-check-all"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-trending-up"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-apps"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-phone"></i></button>

                            <br/>
                            <br/>

                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-home"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-search"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-more-vert"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-arrow-forward"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-arrow-back"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-refresh"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-check"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-close"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-menu"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-apps"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-check-all"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-trending-up"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-apps"></i></button>
                            <button class="btn btn-secondary btn--icon"><i class="zmdi zmdi-phone"></i></button>

                            <br/>
                            <br/>

                            <button class="btn btn-primary btn--icon"><i class="zmdi zmdi-home"></i></button>
                            <button class="btn btn-info btn--icon"><i class="zmdi zmdi-search"></i></button>
                            <button class="btn btn-success btn--icon"><i class="zmdi zmdi-more-vert"></i></button>
                            <button class="btn btn-warning btn--icon"><i class="zmdi zmdi-arrow-forward"></i></button>
                            <button class="btn btn-danger btn--icon"><i class="zmdi zmdi-arrow-back"></i></button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Sizes</h2>
                        <small class="card-subtitle">Fancy larger or smaller buttons? Add <code>.btn-lg</code> or <code>.btn-sm</code> for additional sizes.</small>
                    </div>

                    <div class="card-block">
                        <div class="btn-demo">
                            <button type="button" class="btn btn-primary btn-lg">Large</button>
                            <button type="button" class="btn btn-primary">Default</button>
                            <button type="button" class="btn btn-primary btn-sm">Small</button>
                        </div>

                        <br>

                        <p>Create block level buttons—those that span the full width of a parent—by adding <code>.btn-block</code></p>

                        <button type="button" class="btn btn-primary btn-block">Block level button</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Button State</h2>
                    </div>

                    <div class="card-block">
                        <h3 class="card-block__title">Active state</h3>
                        <p>Buttons will appear pressed (with a darker background, darker border, and inset shadow) when active. There’s no need to add a class to <code>&#x3C;button&#x3E;</code>s as they use a pseudo-class. However, you can still force the same active appearance with <code>.active</code> (and include the aria-pressed="true" attribute) should you need to replicate the state programmatically.</p>

                        <br>

                        <div class="btn-demo">
                            <a href="#" class="btn btn-primary active" role="button" aria-pressed="true">Primary</a>
                            <a href="#" class="btn btn-success active" role="button" aria-pressed="true">Success</a>
                            <a href="#" class="btn btn-info active" role="button" aria-pressed="true">Info</a>
                            <a href="#" class="btn btn-warning active" role="button" aria-pressed="true">Warning</a>
                            <a href="#" class="btn btn-danger active" role="button" aria-pressed="true">Danger</a>
                        </div>

                        <br>
                        <br>

                        <h3 class="card-block__title">Disabled state</h3>
                        <p>Make buttons look inactive by adding the disabled boolean attribute to any <code>&#x3C;button&#x3E;</code> element.</p>

                        <div class="btn-demo">
                            <button type="button" class="btn btn-primary" disabled>Primary</button>
                            <button type="button" class="btn btn-secondary" disabled>Secondary</button>
                            <button type="button" class="btn btn-success" disabled>Success</button>
                            <button type="button" class="btn btn-info" disabled>Info</button>
                            <button type="button" class="btn btn-warning" disabled>Warning</button>
                            <button type="button" class="btn btn-danger" disabled>Danger</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Button group</h2>
                        <small class="card-subtitle">Group a series of buttons together on a single line with the button group</small>
                    </div>

                    <div class="card-block">
                        <h3 class="card-block__title">Basic example</h3>
                        <p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code></p>

                        <div class="btn-demo">
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary">Left</button>
                                <button type="button" class="btn btn-secondary">Middle</button>
                                <button type="button" class="btn btn-secondary">Right</button>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">Left</button>
                                <button type="button" class="btn btn-primary">Middle</button>
                                <button type="button" class="btn btn-primary">Right</button>
                            </div>
                        </div>

                        <br>
                        <br>

                        <h3 class="card-block__title">Button toolbar</h3>
                        <p>Combine sets of button groups into button toolbars for more complex components. Use utility classes as needed to space out groups, buttons, and more.</p>

                        <div class="btn-toolbar">
                            <div class="btn-group mr-1">
                                <button type="button" class="btn btn-secondary">1</button>
                                <button type="button" class="btn btn-secondary">2</button>
                                <button type="button" class="btn btn-secondary">3</button>
                                <button type="button" class="btn btn-secondary">4</button>
                            </div>
                            <div class="btn-group mr-1">
                                <button type="button" class="btn btn-secondary">5</button>
                                <button type="button" class="btn btn-secondary">6</button>
                                <button type="button" class="btn btn-secondary">7</button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary">8</button>
                            </div>
                        </div>

                        <br>

                        <div class="btn-toolbar">
                            <div class="btn-group mr-1">
                                <button type="button" class="btn btn-primary">1</button>
                                <button type="button" class="btn btn-primary">2</button>
                                <button type="button" class="btn btn-primary">3</button>
                                <button type="button" class="btn btn-primary">4</button>
                            </div>
                            <div class="btn-group mr-1">
                                <button type="button" class="btn btn-primary">5</button>
                                <button type="button" class="btn btn-primary">6</button>
                                <button type="button" class="btn btn-primary">7</button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">8</button>
                            </div>
                        </div>

                        <br>
                        <br>

                        <h3 class="card-block__title">Sizing</h3>
                        <p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to each <code>.btn-group</code>, including each one when nesting multiple groups.</p>

                        <div class="btn-group btn-group-lg">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>

                        <br>
                        <br>

                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>

                        <br>
                        <br>

                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Nesting</h2>
                        <small class="card-subtitle">Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.</small>
                    </div>

                    <div class="card-block">
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary">1</button>
                            <button type="button" class="btn btn-secondary">2</button>

                            <div class="btn-group dropdown">
                                <button type="button" data-toggle="dropdown" class="btn btn-secondary">Dropdown</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Button plugin</h2>
                        <small class="card-subtitle">Control button states or create groups of buttons for more components like toolbars.</small>
                    </div>

                    <div class="card-block">
                        <h3 class="card-block__title">Toggle states</h3>
                        <p>Add <code>data-toggle="button"</code> to toggle a button’s <code>active</code> state. If you’re pre-toggling a button, you must manually add the <code>.active</code> class and <code>aria-pressed="true"</code> to the &#x3C;button&#x3E;.</p>

                        <br>

                        <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                            Single toggle
                        </button>

                        <br>
                        <br>
                        <br>

                        <h3 class="card-block__title">Checkbox and radio buttons</h3>
                        <p>Bootstrap’s <code>.button</code> styles can be applied to other elements, such as &#x3C;label&#x3E;s, to provide checkbox or radio style button toggling.</p>

                        <br>

                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn active">
                                <input type="checkbox" checked autocomplete="off"> Checkbox 1 (pre-checked)
                            </label>
                            <label class="btn">
                                <input type="checkbox" autocomplete="off"> Checkbox 2
                            </label>
                            <label class="btn">
                                <input type="checkbox" autocomplete="off"> Checkbox 3
                            </label>
                        </div>

                        <br>
                        <br>

                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn active">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked> Radio 1 (preselected)
                            </label>
                            <label class="btn">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Radio 2
                            </label>
                            <label class="btn">
                                <input type="radio" name="options" id="option3" autocomplete="off"> Radio 3
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

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>
</html>