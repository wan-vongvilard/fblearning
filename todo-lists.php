<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
        <link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">

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
                        <h1>Todo Lists</h1>
                        <small>Donec idelit nonmi porta gravida at eget metus</small>

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

                    <div class="row todo">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="toolbar toolbar--inner">
                                    <div class="toolbar__label">29 Total todo lists</div>

                                    <div class="actions">
                                        <i class="actions__item zmdi zmdi-search" data-ma-action="toolbar-search-open"></i>
                                        <div class="dropdown actions__item">
                                            <i class="zmdi zmdi-sort" data-toggle="dropdown"></i>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="" class="dropdown-item">Newest to Oldest</a>
                                                <a href="" class="dropdown-item">Oldest to Newest</a>
                                                <a href="" class="dropdown-item">Completed first</a>
                                            </div>
                                        </div>
                                        <a href="" class="actions__item zmdi zmdi-help-outline"></a>
                                        <a href="" class="actions__item zmdi zmdi-settings"></a>
                                    </div>

                                    <div class="toolbar__search">
                                        <input type="text" placeholder="Search...">

                                        <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-ma-action="toolbar-search-close"></i>
                                    </div>
                                </div>

                                <div class="listview listview--bordered">
                                    <div class="listview__item">
                                        <label class="custom-control custom-control--char todo__item">
                                            <input class="custom-control-input" type="checkbox">
                                            <span class="custom-control--char__helper"><i class="bg-amber">F</i></span>
                                            <div class="todo__info">
                                                <span>Fivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</span>
                                                <small>Today at 8.30 AM</small>
                                            </div>

                                            <div class="listview__attrs">
                                                <span>#Messages</span>
                                                <span>!!!</span>
                                            </div>
                                        </label>

                                        <div class="actions listview__actions">
                                            <div class="dropdown actions__item">
                                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="">Mark as completed</a>
                                                    <a class="dropdown-item" href="">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="listview__item">
                                        <label class="custom-control custom-control--char todo__item">
                                            <input class="custom-control-input" type="checkbox">
                                            <span class="custom-control--char__helper"><i class="bg-light-blue">N</i></span>
                                            <div class="todo__info">
                                                <span>Nullam id dolor id nibh ultricies vehicula ut id elit</span>
                                                <small>Today at 12.30 PM</small>
                                            </div>

                                            <div class="listview__attrs">
                                                <span>#Clients</span>
                                                <span>!!</span>
                                            </div>
                                        </label>

                                        <div class="actions listview__actions">
                                            <div class="dropdown actions__item">
                                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="">Mark as completed</a>
                                                    <a class="dropdown-item" href="">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="listview__item">
                                        <label class="custom-control custom-control--char todo__item">
                                            <input class="custom-control-input" type="checkbox">
                                            <span class="custom-control--char__helper"><i class="bg-purple">C</i></span>
                                            <div class="todo__info">
                                                <span>Cras mattis consectetur purus sit amet fermentum</span>
                                                <small>Tomorrow at 10.30 AM</small>
                                            </div>

                                            <div class="listview__attrs">
                                                <span>#Clients</span>
                                                <span>!!</span>
                                            </div>
                                        </label>

                                        <div class="actions listview__actions">
                                            <div class="dropdown actions__item">
                                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="">Mark as completed</a>
                                                    <a class="dropdown-item" href="">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="listview__item">
                                        <label class="custom-control custom-control--char todo__item">
                                            <input class="custom-control-input" type="checkbox">
                                            <span class="custom-control--char__helper"><i class="bg-light-green">M</i></span>
                                            <div class="todo__info">
                                                <span>Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum</span>
                                                <small>Tomorrow at 05.10 PM</small>
                                            </div>

                                            <div class="listview__attrs">
                                                <span>#Marketing</span>
                                                <span>!!!</span>
                                            </div>
                                        </label>

                                        <div class="actions listview__actions">
                                            <div class="dropdown actions__item">
                                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="">Mark as completed</a>
                                                    <a class="dropdown-item" href="">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="listview__item">
                                        <label class="custom-control custom-control--char todo__item">
                                            <input class="custom-control-input" type="checkbox">
                                            <span class="custom-control--char__helper"><i class="bg-lime">I</i></span>
                                            <div class="todo__info">
                                                <span>Integer posuere erat a ante venenatis dapibus posuere velit aliquet</span>
                                                <small>05/08/2017 at 08.00 AM</small>
                                            </div>

                                            <div class="listview__attrs">
                                                <span>#Server</span>
                                                <span>!</span>
                                            </div>
                                        </label>

                                        <div class="actions listview__actions">
                                            <div class="dropdown actions__item">
                                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="">Mark as completed</a>
                                                    <a class="dropdown-item" href="">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="listview__item">
                                        <label class="custom-control custom-control--char todo__item">
                                            <input class="custom-control-input" type="checkbox">
                                            <span class="custom-control--char__helper"><i class="bg-teal">D</i></span>
                                            <div class="todo__info">
                                                <span>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et</span>
                                                <small>10/08/2016 at 09.20 AM</small>
                                            </div>

                                            <div class="listview__attrs">
                                                <span>#Server</span>
                                                <span>!!!</span>
                                            </div>
                                        </label>

                                        <div class="actions listview__actions">
                                            <div class="dropdown actions__item">
                                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="">Mark as completed</a>
                                                    <a class="dropdown-item" href="">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="listview__item">
                                        <label class="custom-control custom-control--char todo__item">
                                            <input class="custom-control-input" type="checkbox">
                                            <span class="custom-control--char__helper"><i class="bg-red">P</i></span>
                                            <div class="todo__info">
                                                <span>Praesent commodo cursus magnavel scelerisque nisl consectetur</span>
                                                <small>10/08/2016 at 04.00 AM</small>
                                            </div>

                                            <div class="listview__attrs">
                                                <span>#Server</span>
                                                <span>!!!</span>
                                            </div>
                                        </label>

                                        <div class="actions listview__actions">
                                            <div class="dropdown actions__item">
                                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="">Mark as completed</a>
                                                    <a class="dropdown-item" href="">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="listview__item">
                                        <label class="custom-control custom-control--char todo__item">
                                            <input class="custom-control-input" type="checkbox">
                                            <span class="custom-control--char__helper"><i class="bg-cyan">A</i></span>
                                            <div class="todo__info">
                                                <span>Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</span>
                                                <small>15/08/2016 at 10.22 PM</small>
                                            </div>

                                            <div class="listview__attrs">
                                                <span>#Messages</span>
                                                <span>!!!</span>
                                            </div>
                                        </label>

                                        <div class="actions listview__actions">
                                            <div class="dropdown actions__item">
                                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="">Mark as completed</a>
                                                    <a class="dropdown-item" href="">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="todos.html" class="view-more">View More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title">Labels</h2>
                                    <small class="card-subtitle">Etiam porta malesuada magna mollis</small>
                                </div>

                                <div class="card-block">
                                    <div class="todo__labels">
                                        <a href="">#Messages</a>
                                        <a href="">#Clients</a>
                                        <a href="">#Server</a>
                                        <a href="">#Marketing</a>
                                        <a href="">#Work related</a>
                                        <a href="">#Website</a>
                                        <a href="">#Uncategorized</a>
                                        <a href="">#Collegues</a>
                                        <a href="">#Hosting</a>
                                        <a href="">#Design</a>
                                        <a href="">#To be addressed</a>
                                        <a href="">#Others</a>
                                    </div>
                                </div>

                                <div class="card-footer card-footer--highlight">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="New Label">
                                        <i class="form-group__bar"></i>
                                    </div>

                                    <a href="" class="btn btn-primary">Create Label</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- New label modal -->
                    <div class="modal fade" id="modal-new-todo" tabindex="-1">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">New Todo List</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="What do you want to do?">
                                    </div>

                                    <div class="form-group select2-parent">
                                        <select class="select2">
                                            <option>Select a Label</option>
                                            <option>#Messages</option>
                                            <option>#Clients</option>
                                            <option>#Server</option>
                                            <option>#Marketing</option>
                                            <option>#Work Related</option>
                                            <option>#Website</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-0">
                                        <label>Set Priority</label>

                                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                                            <label class="btn active">
                                                <input type="radio" name="options" id="option1" autocomplete="off" checked> !
                                            </label>
                                            <label class="btn">
                                                <input type="radio" name="options" id="option2" autocomplete="off"> !!
                                            </label>
                                            <label class="btn">
                                                <input type="radio" name="options" id="option3" autocomplete="off"> !!!
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link">Save</button>
                                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-danger btn--action btn--fixed zmdi zmdi-plus" data-toggle="modal" data-target="#modal-new-todo"></button>
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
        <script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>
</html>