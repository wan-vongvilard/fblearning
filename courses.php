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
            <?php include 'mainmenu.php';?>
   <section class="content">
                <div class="content__inner">
           
             <!-- Small --> 
                        <div class="card">
                        <div class="card-header"></div>
                            
                        
                        <div class="card-block">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="stream.php">Stream</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="classmates.php">Classmates</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                            </ul>

                            <br>
                            <br>

                        <div class="modal fade" id="modal-small" tabindex="1">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title pull-left">Unenrol</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <br>
                       
                      

            <section class="content">
                 <div class="content__inner">
                    <div class="row price-table price-table--basic">

<!--<?php
                                include("mysqlconn.php");
                                $strSQL = "SELECT * FROM classes INNER JOIN users ON classes.facebook_id = users.facebook_id  " ;//WHERE user_id
                                $objQuery = mysql_query($strSQL);
                                while ($row =mysql_fetch_array($objQuery)) {?>
                        <div class="col-md-4">
                            <div class="price-table__item">
                                <header class="price-table__header bg-light-blue">
                                <div class="actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Edit</a>
                                            <a class="dropdown-item" href="" data-demo-action="delete-listing">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <a href="classroom.php?classid=<?php echo $row['class_id']; ?>&classname=aaa">enter</a>
                                    <div class="price-table__title"><?php echo  "$row[class_name]<br>" ?></div>
                                    <div class="price-table__desc"></div><small><?php echo  "$row[user_name]<br>" ?></small>
                                </header>
                                <a href="" class="price-table__action bg-light-blue">..</a>
                            </div>
                        </div>
                    <?php } ?> 
                    -->              
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
    
        <div class="dropdown actions__item">
            <a href="" class="btn btn--action btn--fixed btn-danger"><i class="zmdi zmdi-plus"></i></a>                     
             <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="">Join class</a>
                <a class="dropdown-item" href="" data-demo-action="delete-listing">Create class</a>
                </div>
        </div>
</html>