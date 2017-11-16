 <?php 
session_start();
if (isset($_POST["surnname"], $_POST["username"],$_POST["shoolname"])) {
    include("mysqlconn.php") ;
        $sql_up ="UPDATE `users` SET 
        `user_name`= '". $_POST["username"]."' ,
        `user_surname` = '". $_POST["surnname"]. "',
        `user_schoolname`= '". $_POST["shoolname"]. "'
        'WHERE facebook_id = '".$_SESSION["strFacebookID"]."'";
        $sql2 = mysql_query($sql_up);
        if(!$sql2){
                echo $sql_up;
                echo "yes";
                header("location:dashboard.php");

            }
        else{
                echo $sql_up;
                echo "no";
                header("location:dashboard.php");
            }


    mysql_close();
}
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
            
 <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Profile</h2>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="register.php" method="post">
                                <div class="form-group">
                                    <label for="username">username</label>
                                    <input type="username" class="form-control" name="username" 
                                     value="<?php echo "$_SESSION['strFacebookName']"; ?>" >
                                </div>
                                <div class="form-group">
                                    <label for="surnname">surnname</label>
                                    <input type="surnname" class="form-control" 
                                    name="surnname" value="">
                                </div>                            
                                <br>
                               <button type="submit" class="btn btn-default"> Save </button>
                        </form> 
                        
                    </div>
                </div>
            </div>


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