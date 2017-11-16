        
            <aside class="sidebar">
                <div class="scrollbar-inner ">
                    <div class="user">
                    <!--
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                            <div>
                                <div class="user__name">Malinda Hollaway</div>
                                <div class="user__email">malinda-h@gmail.com</div>
                            </div>
                        </div>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">View Profile</a>
                            <a class="dropdown-item" href="">Settings</a>
                            <a class="dropdown-item" href="">Logout</a>
                        </div>
                    </div>-->
                    <ul class="navigation">
                        <li><a href="dashboard.php"><i class="zmdi zmdi-menu"></i>Dashboard</a></li>

                         <li><a href="class.php"><i class="zmdi zmdi-home"></i>Class</a></li>

                        <li><a href="work.php"><i class="zmdi zmdi-assignment"></i>Work</a></li>

                        <li><a href="report.php"><i class="zmdi zmdi-print"></i>Report</a></li>

                        <li><a href="archivedclasses.php"><i class="zmdi zmdi-archive"></i>Archived Classes</a></li>


                         <li><a href="settings.php"><i class="zmdi zmdi-settings"></i>Settings</a></li>

                 </ul>
                 </div>
                 </div>
<!-- 
                        <li class="navigation__sub">
                            <a href=""><i class="zmdi zmdi-view-week"></i> Variants</a>

                            <ul>
                                <li><a href="hidden-sidebar.php">Hidden Sidebar</a></li>
                                <li><a href="boxed-layout.php">Boxed Layout</a></li>
                                <li><a href="hidden-sidebar-boxed-layout.php">Boxed Layout with Hidden Sidebar</a></li>
                                <li><a href="top-navigation.php">Top Navigation</a></li>
                            </ul>
                        </li>

                        <li><a href="typography.php"><i class="zmdi zmdi-format-underlined"></i>Typography</a></li>

                        <li><a href="widgets.php"><i class="zmdi zmdi-widgets"></i>Widgets</a></li>

                        <li class="navigation__sub">
                            <a href=""><i class="zmdi zmdi-view-list"></i>Tables</a>

                            <ul>
                                <li><a href="html-table.php">HTML Table</a></li>
                                <li><a href="data-table.php">Data Table</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub">
                            <a href=""><i class="zmdi zmdi-collection-text"></i> Forms</a>

                            <ul>
                                <li><a href="form-elements.php">Basic Form Elements</a></li>
                                <li><a href="form-components.php">Form Components</a></li>
                                <li><a href="form-validation.php">Form Validation</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub">
                            <a href=""><i class="zmdi zmdi-swap-alt"></i> User Interface</a>

                            <ul>
                                <li><a href="colors.php">Colors</a></li>
                                <li><a href="css-animations.php">CSS Animations</a></li>
                                <li><a href="buttons.php">Buttons</a></li>
                                <li><a href="icons.php">Icons</a></li>
                                <li><a href="listview.php">Listview</a></li>
                                <li><a href="toolbars.php">Toolbars</a></li>
                                <li><a href="cards.php">Cards</a></li>
                                <li><a href="alerts.php">Alerts</a></li>
                                <li><a href="badges.php">Badges</a></li>
                                <li><a href="breadcrumbs.php">Bredcrumbs</a></li>
                                <li><a href="jumbotron.php">Jumbotron</a></li>
                                <li><a href="navs.php">Navs</a></li>
                                <li><a href="pagination.php">Pagination</a></li>
                                <li><a href="progress.php">Progress</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub navigation__sub--active navigation__sub--toggled">
                            <a href=""><i class="zmdi zmdi-group-work"></i> Javascript Components</a>

                            <ul class="navigation__sub">
                                <li><a href="carousel.php">Carousel</a></li>
                                <li><a href="collapse.php">Collapse</a></li>
                                <li class="navigation__active"><a href="dropdowns.php">Dropdowns</a></li>
                                <li><a href="modals.php">Modals</a></li>
                                <li><a href="popover.php">Popover</a></li>
                                <li><a href="tabs.php">Tabs</a></li>
                                <li><a href="tooltips.php">Tooltips</a></li>
                                <li><a href="notifications-alerts.php">Notifications & Alerts</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub">
                            <a href=""><i class="zmdi zmdi-trending-up"></i> Charts</a>

                            <ul>
                                <li><a href="flot-charts.php">Flot</a></li>
                                <li><a href="other-charts.php">Other Charts</a></li>
                            </ul>
                        </li>

                        <li><a href="photo-gallery.php"><i class="zmdi zmdi-image"></i> Photo Gallery</a></li>

                        <li class="navigation__sub">
                            <a href=""><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>

                            <ul>
                                <li><a href="profile-about.php">Profile</a></li>
                                <li><a href="messages.php">Messages</a></li>
                                <li><a href="contacts.php">Contacts</a></li>
                                <li><a href="groups.php">Groups</a></li>
                                <li><a href="invoice.php">Invoice</a></li>
                                <li><a href="todo-lists.php">Todo Lists</a></li>
                                <li><a href="notes.php">Notes</a></li>
                                <li><a href="lockscreen.php">Lockscreen</a></li>
                                <li><a href="404.php">404</a></li>
                                <li><a href="empty.php">Empty Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>

            <aside class="chat">
                <div class="chat__header">
                    <h2 class="chat__title">Chat <small>Currently 20 contacts online</small></h2>

                    <div class="chat__search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                </div>

                <div class="listview listview--hover chat__buddies scrollbar-inner">
                    <a class="listview__item chat__available">
                        <img src="demo/img/profile-pics/7.jpg" class="listview__img" alt="">

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>hey, how are you doing.</p>
                        </div>
                    </a>

                    <a class="listview__item chat__available">
                        <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>hmm...</p>
                        </div>
                    </a>

                    <a class="listview__item chat__away">
                        <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>all good</p>
                        </div>
                    </a>

                    <a class="listview__item">
                        <img src="demo/img/profile-pics/8.jpg" class="listview__img" alt="">

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>morbi leo risus portaac consectetur vestibulum at eros.</p>
                        </div>
                    </a>

                    <a class="listview__item">
                        <img src="demo/img/profile-pics/6.jpg" class="listview__img" alt="">

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>fusce dapibus</p>
                        </div>
                    </a>

                    <a class="listview__item chat__busy">
                        <img src="demo/img/profile-pics/9.jpg" class="listview__img" alt="">

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>cras mattis consectetur purus sit amet fermentum.</p>
                        </div>
                    </a>
                </div>
-->
                <!--
                <a href="messages.php" class="btn btn--action btn--fixed btn-danger"><i class="zmdi zmdi-plus"></i></a>
                -->
            </aside>