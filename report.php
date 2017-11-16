<?php
    session_start();
    include 'mysqlconn.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">

        <!-- App styles -->
        <link rel="stylesheet" type="text/css" href="css/app.min.css">
    </head>

    <body data-ma-theme="green">
        <main class="main">
            <?php Include 'topmenu.php';?>
            <?php include 'mainmenu.php';?>
 
    <section class="content">
     <div class="content__inner">
       <header class="content__title">
                <div class="card card-inverse widget-profile col-md-12">
                        <h1>Report</h1>
                </div>

                <div class="col-md-4">
                    <h2 class="card-title">Class</h2>    </div>

                        <div class="card-block">
                                    <div class="todo__labels">
                                          <?php
                $sql_class_id = "SELECT
                                   *,
                                    classes.class_name as name
                                    FROM
                                    students_in_class
                                    LEFT JOIN classes ON students_in_class.class_id = classes.class_id
                                    WHERE students_in_class.facebook_id = '".$_SESSION["strFacebookID"]."' 
                ";
                $qurey_class_id = mysql_query($sql_class_id);
                //$result_score = mysql_fetch_array($qurey_score);
                while($result_class_id = mysql_fetch_array($qurey_class_id)){
            ?>
                                        <a href="report1.php?class_id=<?php echo $result_class_id['class_id']; ?>"><?php echo $result_class_id['name']; ?></a>
                                        <?php } 
                            ?>
                                    </div>
                        </div>
                </div>
                  
            </header>
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