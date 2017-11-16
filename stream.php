<?php session_start();                                                   
include("mysqlconn.php");
$_SESSION["cstudents"]=$_GET["cstudents_id"];
$_SESSION["class_id"]=$_GET["classid"];
if(!$_SESSION["cstudents"]==0){
$select_activities = "SELECT
*
FROM
activities 
LEFT JOIN classes ON activities.class_id = classes.class_id
LEFT JOIN students_in_class ON activities.facebook_id = students_in_class.student_in_class_id
WHERE activities.class_id =  '".$_GET["classid"]."'
order by activities.activity_id ASC  " ;//WHERE user_id
}else{
$select_activities = "SELECT
*
FROM
activities
LEFT JOIN classes ON activities.class_id = classes.class_id

WHERE activities.class_id =  '".$_GET["classid"]."'
order by activities.activity_id ASC 
  " ;
}

$mysqlquery_activies = mysql_query($select_activities);

$gg = mysql_num_rows($mysqlquery_activies);
echo $gg;
isset($_POST["commein"]){
   include("mysqlconn.php") ;
    $sql_insert ="INSERT INTO `comments`(`commein_id`, `commein`, `activie_id`, `facebook_id`) VALUES (null,'".$_POST["commein"]. "','".$_GET["activity_id"]."','".$_SESSION["strFacebookID"]."') " ;
    $classid=$_GET['classid'];
    $cstudents_id=$_GET["cstudents_id"];
 $sql1 = mysql_query($sql_insert);
    echo  $classid;
    echo $cstudents_id;
 if(!$sql1){
  header("location:stream.php?classid=".$classid."&cstudents_id=".$cstudents_id."");

    }
    else{
  header("location:stream.php?classid=".$classid."&cstudents_id=".$cstudents_id."");

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
        <link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">
        <link rel="stylesheet" href="vendors/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css">
        <link rel="stylesheet" href="vendors/bower_components/flatpickr/dist/flatpickr.min.css" />        

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">
    </head>

    <body data-ma-theme="green">
        <main class="main">
            <?php Include 'topmenu.php';?>
            <?php Include 'mainmenu.php';?>
            <section class="content">

                    <header class="content__title">
                           <div class="card card-inverse widget-profile col-md-12">
                        <h1>Stream</h1>

                        <div class="actions">
                            <a href="checkwork.php?classid=<?php echo $_GET["classid"]; ?>&cstudents_id=<?php echo $_GET["cstudents_id"];?>" class="actions__item zmdi zmdi-check-square"></a>
                            
                            <a href="classmates.php?classid=<?php echo $_GET["classid"]; ?>&cstudents_id=<?php echo $_GET["cstudents_id"];?>" class="actions__item zmdi zmdi-accounts"></a>
                            <a href="about.php?classid=<?php echo $array_students['class_id']; ?>&cstudents_id=0" class="actions__item zmdi zmdi-alert-circle-o"></a>
                        </div>
                    </header>

                    <div class="row todo">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="toolbar toolbar--inner">
                                    <div class="toolbar__label"><?php echo $gg; ?> total activites</div>

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
                                <?php while ($array_activies =mysql_fetch_array($mysqlquery_activies)) { ?>
                                    <div class="listview__item">
                                        <label class="custom-control custom-control--char todo__item">
                                            <input class="custom-control-input" type="checkbox">
                                            <span class="custom-control--char__helper"><i class="bg-amber <?php if ($array_activies[activity_type_id] == 1) { echo "zmdi zmdi-assignment";} else  {echo "zmdi zmdi-home";} ?>"></i></span>
                                            <div class="todo__info">
                                                <span><?php echo "$array_activies[activity_name]";//ขาดตัวสิ้นสุด ?></span>
                                                <small><?php echo "$array_activies[activity_data] ";//ขาดตัวสิ้นสุด ?></small>
                                            </div>

                                            <div class="listview__attrs">
                                                <span><?php echo "$array_activies[activity_dataTime]"; ?></span>
                                            </div>
                                        </label>

                                        <div class="actions listview__actions">
                                            <div class="dropdown actions__item">
                                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                                <div class="dropdown-menu dropdown-menu-right"><?php if($_GET["cstudents_id"]==0){?>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#Edit" >Edit</a>
                                                    <a class="dropdown-item" href="det_act.php?activity_id=<?php echo $array_activies["activity_id"]; ?>&activity_id=<?php echo $array_activies['activity_id']; ?>&classid=<?php echo $_GET["classid"]; ?>&cstudents_id=<?php echo $_GET["cstudents_id"];?>" data-demo-action="delete-listing"onclick="return confirm('Confirm Delete')">Delete</a>
                                                     <?php } if($array_activies[activity_type_id]==2){?>
                                                     <a class="dropdown-item" href="list_flie.php?activityid=<?php echo $array_activies[activity_id]; ?>">
                                            Send a job</a><?php }?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form role="form1" action="stream.php?activity_id=<?php echo $array_activies['activity_id']; ?>&classid=<?php echo $_GET["classid"]; ?>&cstudents_id=<?php echo $_GET["cstudents_id"];?>" method="post">
                                        <div class="messages__reply">
                                            <textarea class="messages__reply__text" name="commein" placeholder="Type a message..."></textarea>
                                            <button class="btn btn-success btn--icon messages__reply__btn"><i class="zmdi zmdi-mail-send"></i></button>                                           
                                        </div>
                                    </form>  
<?php
$select_comments ="SELECT
*,
comments.facebook_id as fb
FROM
comments
LEFT  JOIN activities ON comments.activie_id = activities.activity_id
WHERE activities.class_id = '".$_GET["classid"]."' 
and  activities.activity_id = '".$array_activies[activity_id]."'
order by activities.activity_id ASC

";
$mysqlquery_comments = mysql_query($select_comments);
 while ($array_comments =mysql_fetch_array($mysqlquery_comments)) {
?>
                        <div class="messages__content">
                                <div class="messages__item">
                                    <img src=<?php echo  "https://graph.facebook.com/".$array_comments['fb']."/picture?type=large" ;?> class="listview__img" alt="">

                                    <div class="messages__details">
                                        <p> <?php echo "$array_comments[commein]  ";//ขาดตัวสิ้นสุด ?></p>
                                    </div>
                                </div>
                            </div>

<?php }?>
<div class="modal fade note-view" id="Edit" data-backdrop="static" data-keyboard="false">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title pull-left">Edit Class</h5>
                                        </div>
                                        <div class="modal-body">
                                        <form role="form" action="edit_act.php?activity_id=<?php echo $array_activies["activity_id"]; ?>&activity_id=<?php echo $array_activies['activity_id']; ?>&classid=<?php echo $_GET["classid"]; ?>&cstudents_id=<?php echo $_GET["cstudents_id"];?>" method="post" >
                                    <div class="form-group">


                                        <h2 class="card-block__title">Activity name</h2>
                                        <div class="form-group">
                                            <textarea name="activity_name1"  class="form-control textarea-autosize" value=<?php echo "$array_activies[activity_name]"; ?>></textarea>
                                            <i class="form-group__bar"></i>
                                        </div>


                                        <h2 class="card-block__title">Activity description</h2>
                                        <div class="form-group">
                                            <textarea name="activity_data1"  class="form-control textarea-autosize" value=<?php echo "$array_activies[activity_data]"; ?>></textarea>
                                            <i class="form-group__bar"></i>
                                        </div>                                        


                                        <div class="clearfix mb-2"></div>
                                        <label class="custom-control custom-radio ">
                                            <input type="radio" name="activity_type_id1" class="custom-control-input" value="1" checked>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description"> Announcement</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="activity_type_id1" class="custom-control-input" value="2">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description"> Assignment</span>
                                        </label>


                                        <br>
                                        <br>
                                        <br>
                                         <h2 class="card-block__title">Create score</h2>
                                        <div class="form-group">
                                            <textarea name="activity_score"  class="form-control textarea-autosize" value=<?php echo "$array_activies[max_score]"; ?>></textarea>
                                            <i class="form-group__bar"></i>
                                        </div> 
                                    
                                        <div class="card">
                                            <div class="card-block">

                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label>Due</label>

                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control datetime-picker" value=<?php echo "$array_activies[activity_end_date]"; ?> id="dd" name="dd">
                                                                <i class="form-group__bar"></i>
                                                            </div>
                                                        </div>
                                                    </div>                                                                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                
                            </div>

                        <div class="modal-footer modal-footer--bordered">
                            <button type="submit button" class="btn btn-link" >Save</button>
                            <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                        </div>
                        </form>
                                    </div>
                                </div>
                            </div>
                                <?php  } ?>



 
                                    </div>

                                    <a href="stream.php?classid=<?php echo $_GET["classid"]; ?>&cstudents_id=<?php echo $_GET["cstudents_id"];?>" class="view-more">View More</a>
                                </div>
                            </div>
                        </div>



               
<?php while ($array_activies =mysql_fetch_array($mysqlquery_activies)) {
?>
                    <div class="card-block">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header">
                                    <div class="toolbar">
                                        <img src=<?php echo  "https://graph.facebook.com/".$array_activies['classes.facbeook_id']."/picture?type=large" ;?> class="listview__img" alt="">
                                        <div class="toolbar__label">พัฒนะ วรรณวิไล Created 21 Apr.21 Apr. (Edited 21 Apr.)</div>
                                    </div>
                                </div>
                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Copy link</a>
                                            <a class="dropdown-item" href="list_flie.php?activityid=<?php echo $array_activies[activity_id]; ?>">
                                            Send a job</a>
                                            

                                        </div>
                                    </div>
                                </div>

                                <div class="card-block__title">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header">
                                                <label class="custom-control custom-control--char todo__item">
                                                    <div class="row">
                                                        <div class="todo__info">

                                                            <i class="form-group__bar"></i>
                                                        </div>
                                                    </div>

                                                        <span><?php echo "$array_activies[activity_name] $array_activies[activity_data] ";//ขาดตัวสิ้นสุด ?>

                                                        <p><?php echo " $array_activies[activity_data] $ ";//ขาดตัวสิ้นสุด ?></p>
                                                        <br>
                                                        </span>
                                                </label>
                                            </div> 
                                        </div>
                                    </div>  
                                    


 <form role="form1" action="addcomments.php?activity_id=<?php echo $array_activies['activity_id']; ?>&classid=<?php echo $_GET["classid"]; ?>&cstudents_id=<?php echo $_GET["cstudents_id"];?>" method="post">
                            <div class="messages__reply">
                                <textarea class="messages__reply__text" name="commein" placeholder="Type a message..."></textarea>
                                <button class="btn btn-success btn--icon messages__reply__btn"><i class="zmdi zmdi-mail-send"></i></button>
                            </div>
                                    
</form>
                                    </div>
                                </div>
                            </div>
                        </div>
                   <?php } ?>
                <div class="modal fade note-view" id="add-note" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">                      
                            <div class="modal-body">
                                <form role="form" action="addactivity.php?classid=<?php echo $_GET["classid"]; ?>" method="post" >
                                    <div class="form-group">


                                        <h2 class="card-block__title">Activity name</h2>
                                        <div class="form-group">
                                            <textarea name="activity_name1"  class="form-control textarea-autosize" placeholder="Please enter Activity name . . ."></textarea>
                                            <i class="form-group__bar"></i>
                                        </div>


                                        <h2 class="card-block__title">Activity description</h2>
                                        <div class="form-group">
                                            <textarea name="activity_data1"  class="form-control textarea-autosize" placeholder="Please enter Activity description . . ."></textarea>
                                            <i class="form-group__bar"></i>
                                        </div>                                        


                                        <div class="clearfix mb-2"></div>
                                        <label class="custom-control custom-radio ">
                                            <input type="radio" name="activity_type_id1" class="custom-control-input" value="1" checked>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description"> Announcement</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="activity_type_id1" class="custom-control-input" value="2">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description"> Assignment</span>
                                        </label>


                                        <br>
                                        <br>
                                        <br>
                                         <h2 class="card-block__title">Create score</h2>
                                        <div class="form-group">
                                            <textarea name="activity_score"  class="form-control textarea-autosize" placeholder="Please enter score . . ."></textarea>
                                            <i class="form-group__bar"></i>
                                        </div> 
                                    
                                        <div class="card">
                                            <div class="card-block">

                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label>Due</label>

                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control datetime-picker" placeholder="Pick a date & time" id="dd" name="dd">
                                                                <i class="form-group__bar"></i>
                                                            </div>
                                                        </div>
                                                    </div>                                                                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                
                            </div>

                        <div class="modal-footer modal-footer--bordered">
                            <button type="submit button" class="btn btn-link" >Save</button>
                            <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

<?php  if($_GET["cstudents_id"]==0){?>
      <button class="btn btn-danger btn--action btn--fixed zmdi zmdi-plus" data-toggle="modal" data-target="#add-note"></button>
<?php } ?>
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
        <script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>
        <script src="vendors/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
        <script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>        
        <script src="vendors/bower_components/flatpickr/dist/flatpickr.min.js"></script>        
        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>
</html>