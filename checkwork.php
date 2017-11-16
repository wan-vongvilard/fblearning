<?php
if (!isset($_SESSION)) {
  session_start();
}
include("mysqlconn.php");//อาจาร
$activities = "SELECT
activities.activity_id,
activities.activity_name,
activities.activity_data,
activities.activity_std_num,
activities.activity_dataTime,
activities.activity_end_date,
activities.activity_type_id,
activities.facebook_id,
activities.max_score,
activities.class_id
FROM
activities
WHERE activities.facebook_id = '".$_SESSION["strFacebookID"]."' 
and activities.class_id = '".$_GET["classid"]."'
"   ;//
$Query_activities = mysql_query($activities);

 ?>
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
                        <div class="card card-inverse widget-profile col-md-12">
                        <h1>Checkwork</h1>
                    </header>

                    <div class="invoice">
                        <div class="invoice__header">
                            
                        </div>

                        <div class="row invoice__address">

<?php $i=0; while ($array_activities =mysql_fetch_array($Query_activities)) {$i++; 
 if(($i%2) == 1){
    ?>

                            <div class="col-6">
                                <div class="text-right">
                                    <div class="jumbotron">

                                <h1 class="display-3">Activity <?php echo $i; ?> </h1>
                                <p class="lead">name :<?php echo "$array_activities[activity_name]"; ?></p>

                                <hr class="my-4">

                                <p> </p>


                                <a class="btn btn-primary btn-lg" href="checkwork1.php?activity_id=<?php echo $array_activities['activity_id']; ?>" role="button">View</a>
                            </div>

                            <br>

                                </div>
                            </div>
<?php }?>
<?php if(($i%2) == 0){ ?>
                            <div class="col-6">
                                <div class="text-left">
                                     <div class="jumbotron">
                                <h1 class="display-3">Activity 2 </h1>
                                <p class="lead">name : <?php echo "$array_activities[activity_name]"; ?></p>

                                <hr class="my-4">

                                <p></p>
                                <a class="btn btn-primary btn-lg" href="checkwork1.php?activity_id=<?php echo $array_activities['activity_id']; ?>" role="button">View</a>
                            </div>

                            <br>

                                </div>
                            </div>
<?php }?> 
<?php }?>
                        </div>
                       
                    </div>

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