<?php
    session_start();
    include 'mysqlconn.php';

    $sql_score = "SELECT * FROM scores 
    LEFT JOIN activities ON activities.activity_id = scores.activity_ac_id
    WHERE scores.facebook_id = '".$_SESSION["strFacebookID"]."' 
    and activities.class_id = '".$_GET['class_id']."'
    GROUP BY facebook_id ORDER BY facebook_id DESC";
    $qurey_score = mysql_query($sql_score);
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

                    <div class="data" >
                        <form action="report.php" method="POST">

                   <h2><?php echo $_GET['class_name']; ?></h2>


            <div class="card">
                <div class="card-header"></div>
                    <div class="card-block">
                        <div class="tab-container tab-container--red">
                            <ul class="nav nav-tabs nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home-2" role="tab">Student Name</a>
                                    <?php
                //$result_score = mysql_fetch_array($qurey_score);
                while($result_score = mysql_fetch_array($qurey_score)){
            ?>
                            <p><?php echo $result_score['facebook_id']; ?></p>
                            <br>
                            
                            <?php } 
                            ?>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#messages-3" role="tab">Score</a>
                                <?php
                //$result_score = mysql_fetch_array($qurey_score);
                while($result_score = mysql_fetch_array($qurey_score)){
            ?>
                            <p><?php
                                   echo $result_score['score_date'];
                                    ?>
                                </p>
                            <br>
                            <?php } 
                            ?>
                                </li>

            
                       </ul>
                   </div>
               </div>
           </div>
       </form>
   </div>
</header>


                     <button class="btn btn-danger btn--action btn--fixed " data-ma-action="print"><i class="zmdi zmdi-print"></i></button>
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