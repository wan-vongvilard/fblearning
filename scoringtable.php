<?php
session_start();
include 'mysqlconn.php';
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
activities.class_id,
submit_activities.submit_activitie,
submit_activities.details,
submit_activities.datetime,
submit_activities.facebook_id ,
submit_activities.activity_id,
classes.class_id,
classes.class_name,
classes.description,
classes.passclassroom,
classes.archivedclass,
classes.Max_stdents,
classes.facebook_id
FROM
activities
LEFT JOIN submit_activities ON submit_activities.activity_id = activities.activity_id
LEFT JOIN  classes ON classes.class_id = activities.class_id
WHERE submit_activities.facebook_id ='".$_GET["facebook_id"]."' "   ;//
$Query_activities = mysql_query($activities);
$array_activities =mysql_fetch_array($Query_activities)
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
                        <h1>Scoring Table</h1>
                </div>
        </header>
                </div>

                           
            <div class="card">
                <div class="card-header"></div>
                    <div class="card-block">
                        <div class="tab-container tab-container--red">
                            <ul class="nav nav-tabs nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home-2" role="tab">Class Name</a>
                                    <p><?php echo "$array_activities[class_name]"; ?> </p>


                                </li>
                                
                                 <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile-2" role="tab">Activity name</a>
                                    <p> <?php echo "$array_activities[activity_name]"; ?> </p>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile-3" role="tab">Details</a>
                                    <p> <?php echo "$array_activities[details]"; ?> </p>


                                </li>

                                </li>
                                <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#messages-4" role="tab">Facebook_ID</a>
                                <p>  <?php echo $_GET["facebook_id"]; ?> </p>
                                </li>


<form action="addscore.php?activity_id=<?php echo $array_activities['activity_id']; ?>&fb=<?php echo $_GET["facebook_id"]; ?>" method="post">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings-4" role="tab">Score</a>
                          <div class="form-group">
                                <input type="text" class="form-control form-control-sm" placeholder="Input Score" name="score">
                                <i class="form-group__bar"></i>
                            </div>
                            <button type="submit button" class="btn btn-link">Save </button>

</form>
                                </li>
                            </ul>
                        </div>        
                    </div>
                </div>  
            </table>
                                    

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