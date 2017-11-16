<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="vendors/bower_components/trumbowyg/dist/ui/trumbowyg.min.css">
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
                        <h1>Notes</h1>
                        <small>Vestibulum id ligula porta felis euismod semperonec id elit non mi porta gravida</small>

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
                        <div class="toolbar__label"><span class="hidden-xs-down">Total</span> 35 Notes</div>

                        <div class="actions">
                            <i class="actions__item zmdi zmdi-search" data-ma-action="toolbar-search-open"></i>
                            <a href="" class="actions__item zmdi zmdi-time"></a>
                            <div class="dropdown actions__item">
                                <i class="zmdi zmdi-sort" data-toggle="dropdown"></i>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="" class="dropdown-item">Last Modified</a>
                                    <a href="" class="dropdown-item">Name</a>
                                    <a href="" class="dropdown-item">Size</a>
                                </div>
                            </div>
                            <a href="" class="actions__item zmdi zmdi-help-outline"></a>
                        </div>

                        <div class="toolbar__search">
                            <input type="text" placeholder="Search...">
                            <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-ma-action="toolbar-search-close"></i>
                        </div>
                    </div>

                    <div class="row notes">
                        <div class="col-sm-4 col-md-3 notes__item">
                            <a href="#edit-note" data-toggle="modal">
                                <div class="notes__title">
                                    Maecenas faucibus mollis
                                </div>
                                <div class="notes__body">
                                    Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Sed posuere consectetur est at lobortis. Sed posuere consectetur est at lobortis.
                                </div>
                            </a>
                            <div class="notes__actions" data-demo-action="delete-listing">
                                <i class="zmdi zmdi-delete"></i>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-3 notes__item notes__item--blue">
                            <a href="#edit-note" data-toggle="modal">
                                <div class="notes__title">Donec id elit non mi porta</div>
                                <div class="notes__body">
                                    Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis.
                                </div>
                            </a>
                            <div class="notes__actions" data-demo-action="delete-listing">
                                <i class="zmdi zmdi-delete"></i>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-3 notes__item notes__item--amber">
                            <a href="#edit-note" data-toggle="modal">
                                <div class="notes__title">Inceptos</div>

                                <div class="notes__body">
                                    Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                                </div>
                            </a>
                            <div class="notes__actions" data-demo-action="delete-listing">
                                <i class="zmdi zmdi-delete"></i>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-3 notes__item">
                            <a href="#edit-note" data-toggle="modal">
                                <div class="notes__body">
                                    Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue.
                                </div>
                            </a>
                            <div class="notes__actions" data-demo-action="delete-listing">
                                <i class="zmdi zmdi-delete"></i>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-3 notes__item">
                            <a href="#edit-note" data-toggle="modal">
                                <div class="notes__body">
                                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam quis risus eget urna mollis ornare vel eu leo.
                                </div>
                            </a>
                            <div class="notes__actions" data-demo-action="delete-listing">
                                <i class="zmdi zmdi-delete"></i>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-3 notes__item">
                            <a href="#edit-note" data-toggle="modal">
                                <div class="notes__body">
                                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna.
                                </div>
                            </a>
                            <div class="notes__actions" data-demo-action="delete-listing">
                                <i class="zmdi zmdi-delete"></i>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-3 notes__item notes__item--red">
                            <a href="#edit-note" data-toggle="modal">
                                <div class="notes__title">Justo Bibendum</div>
                                <div class="notes__body">
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                </div>
                            </a>
                            <div class="notes__actions" data-demo-action="delete-listing">
                                <i class="zmdi zmdi-delete"></i>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-3 notes__item">
                            <a href="#edit-note" data-toggle="modal">
                                <div class="notes__title">Sed posuere consectetur est at lobortis</div>
                                <div class="notes__body">
                                    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam id dolor id nibh ultricies vehicula ut id elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod.
                                </div>
                            </a>
                            <div class="notes__actions" data-demo-action="delete-listing">
                                <i class="zmdi zmdi-delete"></i>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-3 notes__item notes__item--cyan">
                            <a href="#edit-note" data-toggle="modal">
                                <div class="notes__title">Aenean Nibh</div>
                                <div class="notes__body">
                                    Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                </div>
                            </a>
                            <div class="notes__actions" data-demo-action="delete-listing">
                                <i class="zmdi zmdi-delete"></i>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-3 notes__item">
                            <a href="#edit-note" data-toggle="modal">
                                <div class="notes__title">Amet Condimentum Nullam</div>
                                <div class="notes__body">
                                    Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                </div>
                            </a>
                            <div class="notes__actions" data-demo-action="delete-listing">
                                <i class="zmdi zmdi-delete"></i>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-3 notes__item">
                            <a href="#edit-note" data-toggle="modal">
                                <div class="notes__body">
                                    Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </div>
                            </a>
                            <div class="notes__actions" data-demo-action="delete-listing">
                                <i class="zmdi zmdi-delete"></i>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-3 notes__item">
                            <a href="#edit-note" data-toggle="modal">
                                <div class="notes__body">
                                    Risus id dolor id nibh ultricies vehicula ut id elit.
                                </div>
                            </a>
                            <div class="notes__actions" data-demo-action="delete-listing">
                                <i class="zmdi zmdi-delete"></i>
                            </div>
                        </div>
                    </div>

                    <div class="load-more">
                        <a href=""><i class="zmdi zmdi-refresh-alt"></i> Load more notes</a>
                    </div>
                </div>

                <!-- New note modal -->
                <div class="modal fade note-view" id="edit-note" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="note-view__field">
                                <input type="text" class="form-control" placeholder="Note Title" value="Morbi leo risus porta consectetur vestibulum eros">
                            </div>

                            <div class="note-view__field note-view__field--color">
                                <div class="note-view__label hidden-xs-down">Color</div>

                                <div class="btn-group btn-group--colors" data-toggle="buttons">
                                    <label class="btn active"><input type="radio" name="notes-color" autocomplete="off" checked></label>
                                    <label class="btn bg-light-blue"><input type="radio" name="notes-color" autocomplete="off"></label>
                                    <label class="btn bg-teal"><input type="radio" name="notes-color" autocomplete="off"></label>
                                    <label class="btn bg-red"><input type="radio" name="notes-color" autocomplete="off"></label>
                                    <label class="btn bg-purple"><input type="radio" name="notes-color" autocomplete="off"></label>
                                    <label class="btn bg-amber"><input type="radio" name="notes-color" autocomplete="off"></label>
                                    <label class="btn bg-cyan"><input type="radio" name="notes-color" autocomplete="off"></label>
                                </div>
                            </div>


                            <textarea class="wysiwyg-editor">
                                Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </textarea>

                            <div class="modal-footer modal-footer--bordered">
                                <button type="button" class="btn btn-link" data-dismiss="modal">Dismiss</button>
                                <button type="button" class="btn btn-link">Update</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- View note -->
                <div class="modal fade note-view" id="add-note" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="note-view__field">
                                <input type="text" class="form-control" placeholder="Note Title">
                            </div>

                            <div class="note-view__field note-view__field--color">
                                <div class="note-view__label hidden-xs-down">Color</div>

                                <div class="btn-group btn-group--colors" data-toggle="buttons">
                                    <label class="btn active"><input type="radio" name="notes-color" autocomplete="off" checked></label>
                                    <label class="btn bg-light-blue"><input type="radio" name="notes-color" autocomplete="off"></label>
                                    <label class="btn bg-teal"><input type="radio" name="notes-color" autocomplete="off"></label>
                                    <label class="btn bg-red"><input type="radio" name="notes-color" autocomplete="off"></label>
                                    <label class="btn bg-purple"><input type="radio" name="notes-color" autocomplete="off"></label>
                                    <label class="btn bg-amber"><input type="radio" name="notes-color" autocomplete="off"></label>
                                    <label class="btn bg-cyan"><input type="radio" name="notes-color" autocomplete="off"></label>
                                </div>
                            </div>


                            <textarea class="wysiwyg-editor" placeholder="Your note goes here..."></textarea>

                            <div class="modal-footer modal-footer--bordered">
                                <button type="button" class="btn btn-link" data-dismiss="modal">Dismiss</button>
                                <button type="button" class="btn btn-link">Update</button>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn btn-danger btn--action btn--fixed zmdi zmdi-plus" data-toggle="modal" data-target="#add-note"></button>

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

        <script src="vendors/bower_components/Clamp.js/clamp.js"></script>
        <script src="vendors/bower_components/trumbowyg/dist/trumbowyg.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>
</html>