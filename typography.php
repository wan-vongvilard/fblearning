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
                        <h1>Typography</h1>

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
                            <h2 class="card-title">Body Copy</h2>
                        </div>

                        <div class="card-block">
                            <p>Pellentesque lacinia sagittis libero et feugiat. Etiam volutpat adipiscing tortor non
                                luctus. Vivamus venenatis vitae metus et aliquet. Praesent vitae justo purus. In
                                hendrerit lorem nisl, ac lacinia urna aliquet non. Quisque nisi tellus, rhoncus quis est
                                sit amet, lacinia euismod nunc. Aenean nec nibh velit. Fusce quis ante in nisl molestie
                                fringilla. Nunc vitae ante id magna feugiat condimentum. Maecenas sit amet urna
                                massa.</p>

                            <p>Integer eu lectus sollicitudin, hendrerit est ac, sollicitudin nisl. Quisque viverra
                                sodales lectus nec ultrices. Fusce elit dolor, dignissim a nunc id, varius suscipit
                                turpis. Cras porttitor turpis vitae leo accumsan molestie. Morbi vitae luctus leo. Sed
                                nec scelerisque magna, et adipiscing est. Proin lobortis lectus eu sem ullamcorper,
                                commodo malesuada quam fringilla. Curabitur ac nunc dui. Class aptent taciti sociosqu ad
                                litora torquent per conubia nostra, per inceptos himenaeos. Fusce sagittis enim eu est
                                lacinia, ut egestas ligula imperdiet.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Headings</h2>
                            <small class="card-subtitle">All HTML headings, <code>&#x3C;h1&#x3E;</code> through <code>&#x3C;h6&#x3E;</code>, are available.</small>
                        </div>

                        <div class="card-block">
                            <p><code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font styling of a heading but cannot use the associated HTML element.</p>

                            <br>

                            <h1>h1. Bootstrap heading</h1>
                            <br>
                            <h2>h2. Bootstrap heading</h2>
                            <br>
                            <h3>h3. Bootstrap heading</h3>
                            <br>
                            <h4>h4. Bootstrap heading</h4>
                            <br>
                            <h5>h5. Bootstrap heading</h5>
                            <br>
                            <h6>h6. Bootstrap heading</h6>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Display headings</h2>
                            <small class="card-subtitle">Traditional heading elements are designed to work best in the meat of your page content. When you need a heading to stand out, consider using a <b>display heading</b> - a larger, slightly more opinionated heading style.</small>
                        </div>

                        <div class="card-block">
                            <h1 class="display-1">Display 1</h1>
                            <br>
                            <h1 class="display-2">Display 2</h1>
                            <br>
                            <h1 class="display-3">Display 3</h1>
                            <br>
                            <h1 class="display-4">Display 4</h1>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Lead</h2>
                            <small class="card-subtitle">Make a paragraph stand out by adding <code>.lead</code>.</small>
                        </div>

                        <div class="card-block">
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in lacus eu libero interdum posuere a eu ex. In sed ullamcorper urna, vitae varius neque. Sed egestas blandit nibh. Donec dignissim cursus dui, et vestibulum massa pharetra vitae. Etiam porta mi a velit dapibus, non finibus dolor euismod. Pellentesque enim mi, condimentum ac viverra vitae, imperdiet id tellus. Phasellus eu elementum odio. Duis et odio ut est hendrerit consectetur at id ipsum.</p>
                            <p class="lead">Quisque a feugiat elit. Donec turpis turpis, dictum sed risus sed, consequat semper ligula. Quisque magna risus, tristique eu venenatis non, luctus ut leo. Cras auctor, augue et varius elementum, augue sapien maximus turpis, ac sagittis ante lectus quis tellus. Fusce fringilla gravida sollicitudin. Sed orci mi, iaculis a sem non, vehicula congue augue. Cras nibh enim, rhoncus eu fermentum nec, finibus eget ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Inline text elements</h2>
                            <small class="card-subtitle">Styling for common inline HTML5 elements.</small>
                        </div>

                        <div class="card-block">
                            <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                            <p><del>This line of text is meant to be treated as deleted text.</del></p>
                            <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                            <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                            <p><u>This line of text will render as underlined</u></p>
                            <p><small>This line of text is meant to be treated as fine print.</small></p>
                            <p><strong>This line rendered as bold text.</strong></p>
                            <p><em>This line rendered as italicized text.</em></p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Text utilities</h2>
                            <small class="card-subtitle">Change text alignment, transform, style, weight, and color with Bootstrap's text utilities.</small>
                        </div>

                        <div class="card-block">
                            <div class="card-block__title">Text alignment</div>
                            <p>Easily realign text to components with text alignment classes.</p>

                            <br>

                            <p class="text-left">Left aligned text on all viewport sizes.</p>
                            <p class="text-center">Center aligned text on all viewport sizes.</p>
                            <p class="text-right">Right aligned text on all viewport sizes.</p>

                            <p class="text-sm-left">Left aligned text on viewports sized SM (small) or wider.</p>
                            <p class="text-md-left">Left aligned text on viewports sized MD (medium) or wider.</p>
                            <p class="text-lg-left">Left aligned text on viewports sized LG (large) or wider.</p>
                            <p class="text-xl-left">Left aligned text on viewports sized XL (extra-large) or wider.</p>

                            <br>
                            <hr>
                            <br>

                            <div class="card-block__title">Text transform</div>
                            <p>Transform text in components with text capitalization classes.</p>

                            <br>

                            <p class="text-lowercase">Lowercased text.</p>
                            <p class="text-uppercase">Uppercased text.</p>
                            <p class="text-capitalize">CapiTaliZed text.</p>

                            <br>
                            <hr>
                            <br>

                            <div class="card-block__title">Font weight and italics</div>
                            <p>Quickly change the weight (boldness) of text or italicize text.</p>

                            <br>

                            <p class="font-weight-bold">Bold text.</p>
                            <p class="font-weight-normal">Normal weight text.</p>
                            <p class="font-italic">Italic text.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Abbreviations</h2>
                            <small class="card-subtitle">Stylized implementation of HTML’s <code>&#x3C;abbr&#x3E;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations have a default underline from Normalize.css and gain a help cursor to provide additional context on hover and to users of assistive technologies.</small>
                        </div>

                        <div class="card-block">
                            <p>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.</p>

                            <br>

                            <p><abbr title="attribute">attr</abbr></p>
                            <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Blockquotes</h2>
                            <small class="card-subtitle">For quoting blocks of content from another source within your document.</small>
                        </div>

                        <div class="card-block">
                            <blockquote class="blockquote">
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</div>
                            </blockquote>

                            <br>
                            <hr>
                            <br>

                            <div class="card-block__title">Naming a source</div>

                            <br>

                            <blockquote class="blockquote">
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</div>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>

                            <br>
                            <hr>
                            <br>

                            <div class="card-block__title">Reverse layout</div>

                            <br>

                            <blockquote class="blockquote blockquote-reverse">
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</div>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Lists</h2>
                        </div>

                        <div class="card-block">
                            <div class="card-block__title">Custom styled</div>
                            <p>Use below given custom list style classes style the bullets.</p>

                            <br>

                            <div class="row">
                                <div class="col-sm-4">
                                    <ul class="list list--star">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit</li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div>

                                <div class="col-sm-4">
                                    <ul class="list list--check">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit</li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div>

                                <div class="col-sm-4">
                                    <ul class="list list--dot">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit</li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div>
                            </div>

                            <br>
                            <hr>
                            <br>

                            <div class="card-block__title">Unstyled</div>
                            <p>Remove the default <code>list-style</code> and left margin on list items (immediate children only). <b>This only applies to immediate children list items</b>, meaning you will need to add the class for any nested lists as well.</p>

                            <br>

                            <ul class="list-unstyled">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                                <li>Nulla volutpat aliquam velit
                                    <ul>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                    </ul>
                                </li>
                                <li>Faucibus porta lacus fringilla vel</li>
                                <li>Aenean sit amet erat nunc</li>
                                <li>Eget porttitor lorem</li>
                            </ul>

                            <br>
                            <hr>
                            <br>

                            <div class="card-block__title">Inline</div>
                            <p>Remove a list’s bullets and apply some light <code>margin</code> with a combination of two classes, <code>.list-inline</code> and <code>.list-inline-item</code>.</p>

                            <br>

                            <ul class="list-inline">
                                <li class="list-inline-item">Lorem ipsum</li>
                                <li class="list-inline-item">Phasellus iaculis</li>
                                <li class="list-inline-item">Nulla volutpat</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Description list alignment</h2>
                            <small class="card-subtitle">Align terms and descriptions horizontally by using our grid system’s predefined classes (or semantic mixins). For longer terms, you can optionally add a <code>.text-truncate</code> class to truncate the text with an ellipsis.</small>
                        </div>

                        <div class="card-block">
                            <dl class="row">
                                <dt class="col-sm-3">Description lists</dt>
                                <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                                <dt class="col-sm-3">Euismod</dt>
                                <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                <dd class="col-sm-9 offset-sm-3">Donec id elit non mi porta gravida at eget metus.</dd>

                                <dt class="col-sm-3">Malesuada porta</dt>
                                <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                                <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

                                <dt class="col-sm-3">Nesting</dt>
                                <dd class="col-sm-9">
                                    <dl class="row">
                                        <dt class="col-sm-4">Nested definition list</dt>
                                        <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                    </dl>
                                </dd>
                            </dl>

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