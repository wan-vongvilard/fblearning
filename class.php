<?php
if (!isset($_SESSION)) {
  session_start();
}
include("mysqlconn.php");//อาจาร
$users = "SELECT *
FROM
classes  WHERE facebook_id='".$_SESSION["strFacebookID"]."' AND archivedclass = 0"   ;//
$Query_users = mysql_query($users);

$students_in_class = "SELECT
classes.class_name,
classes.class_id,
classes.description,
classes.passclassroom,
classes.archivedclass,
classes.Max_stdents,
classes.facebook_id AS facebook_class, 
users.facebook_id,
users.user_id,
users.user_name,
users.user_surname,
users.user_schoolname,
students_in_class.student_in_class_id,
students_in_class.archivedclass,
students_in_class.facebook_id,
students_in_class.class_id
FROM students_in_class
LEFT JOIN classes ON students_in_class.class_id = classes.class_id
LEFT JOIN users ON students_in_class.facebook_id = users.facebook_id
 WHERE students_in_class.facebook_id = '".$_SESSION["strFacebookID"]."'  AND students_in_class.archivedclass =0"  ;//

$Query_students = mysql_query($students_in_class);
$num_rows_students= mysql_num_rows($Query_students);
$num_rows_users= mysql_num_rows($Query_users);

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
            <?php include 'mainmenu.php';?>

             <!-- Small --> 
                        <div class="modal fade" id="modal-small" tabindex="1">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title pull-left">Unenrol</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>


            <section class="content">

                                     <div class="row">     
  
<?php
$i =0;if($num_rows_users > '0'){ ?> 
 <div class="card card-inverse widget-profile col-md-12">

                        <h1>Teacher</h1>
</div>
                 <?php }
                                while ($array_users =mysql_fetch_array($Query_users)) { $i++;?>

                            <div class="card card-inverse widget-profile col-md-4">
                            <div class="card-header">
                            <a href="stream.php?classid=<?php echo $array_users['class_id']; ?>&cstudents_id=0">
                            <img src="https://graph.facebook.com/<?php echo $array_users['facebook_id']; ?>/picture?type=large" class="widget-profile__img" alt="">
                                </a>

                                <h2 class="card-title"><?php echo "$array_users[class_name]<br>"; ?></h2>

                                <div class="actions actions--inverse">
                                    <div class="actions__item">
                                        <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#Edit" >Edit</a>
                                            <a class="dropdown-item" href="uparchivedclasses.php?classid=<?php echo $array_users['class_id']; ?> ?>&archivedclass=1" ">Move</a>
                                            <a class="dropdown-item" href="detclass.php?classid=<?php echo $array_users['class_id']; ?>&cstudents_id=<?php echo $array_users['facebook_id']; ?>" data-demo-action="delete-listing"onclick="return confirm('Confirm Delete')">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-profile__list">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="avatar-char"><i class="zmdi zmdi-assignment"></i></div>
                                    </div>
                                    <div class="media-body">
                                        <strong>Latest work</strong>
                                        <small>Home</small>
                                    </div>
                                </div>
                            </div>
                        </div>              
                                </a>
                           
 <div class="modal fade note-view" id="Edit" data-backdrop="static" data-keyboard="false">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title pull-left">Edit Class</h5>
                                        </div>
                                        <div class="modal-body">
                                           <form action="edit_class.php?classid=<?php echo $array_users['class_id']; ?>" method="post" id="form2">
                                            <div class="form-group">
                                            </div>
                                            <label for="classname">Edit Class name</label>
                                            <input  class="form-control required"  type="text"  name="classname" value=<?php echo "$array_users[class_name]"; ?> >
                                            <div class="form-group">
                                            <br>
                                            <label for="descr">Edit Description</label>
                                            <input  class="form-control required"  type="text"  name="descr" value=<?php echo "$array_users[description]"; ?> >
                                            </div>
                                            <div class="form-group">
                                            <label for="pass">Edit Class password</label>
                                            <input  class="form-control required"  type="text"  name="pass" value=<?php echo "$array_users[passclassroom]"; ?> >
                                            </div> 
                                        </div>
                                            <div class="modal-footer">
                                                <button type="submit button" class="btn btn-link">Save </button>
                                                <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                                            </div>
                                            </form>
                                    </div>
                                </div>
                            </div>


                           
                    <?php }if($num_rows_students > '0'){ ?> 
 <div class="card card-inverse widget-profile col-md-12">

                        <h1>student</h1>
</div>
                 <?php }
                      while ($array_students =mysql_fetch_array($Query_students)) {$i++;?>
    
                    <div class="card card-inverse widget-profile col-md-4">
                            <div class="card-header">
                            <a href="stream.php?classid=<?php echo $array_students['class_id']; ?>&cstudents_id=<?php echo $array_students['student_in_class_id']; ?>">
                            <img src="https://graph.facebook.com/<?php echo $array_students['facebook_class']; ?>/picture?type=large" class="widget-profile__img" alt="">
                                </a>

                                <h2 class="card-title"><?php echo "$array_students[class_name]<br>"; ?></h2>

                                <div class="actions actions--inverse">
                                    <div class="actions__item">
                                        <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                                       <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="detjoinclass.php?classid=<?php echo $array_students['class_id']; ?>&cstudents_id=<?php echo $array_students['student_in_class_id']; ?>" data-demo-action="delete-listing" onclick="return confirm('ยืนยันการลบ')">Delete</a>
                                             <a class="dropdown-item" href="uparchivedclassstudents.php?classid=<?php echo $array_students['class_id']; ?>&facebook_id=<?php echo $array_students['facebook_id']; ?>&archivedclass=1" ">Move</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="widget-profile__list">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="avatar-char"><i class="zmdi zmdi-assignment"></i></div>
                                    </div>
                                    <div class="media-body">
                                        <strong>Latest work</strong>
                                        <small>Home</small>
                                    </div>
                                </div>
                            </div>
                        </div>              
                                </a>

                    
                    <?php } 
                    if ($i == 0) { ?>
                        <div class="error__inner">
                <h2>don't see you existing classes</h2>
                <h2>or crete or join your first class!</h2>
                <p></p>
                    </div>
                    <?php }
                    ?> 
                        
                    </div>
                    
                    <br>
                    <br>
                </div>
 <div class="modal fade note-view" id="add-note" data-backdrop="static" data-keyboard="false">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title pull-left">New Class</h5>
                                        </div>
                                        <div class="modal-body">
                                           <form action="addclass.php" method="post" id="form2">
                                            <div class="form-group">
                                            </div>
                                            <label for="cname">Class name</label>
                                            <input  class="form-control required"  type="text"  name="cname" placeholder="Your class name .." title="กรุณาป้อนข้อมูล">
                                            <div class="form-group">
                                            <br>
                                            <label for="description">Description</label>
                                            <input  class="form-control required"  type="text"  name="description" placeholder="Your description" title="กรุณาป้อนข้อมูล">
                                            </div>
                                            <div class="form-group">
                                            <label for="pclass">Class password</label>
                                            <input  class="form-control required"  type="text"  name="pclass" placeholder="Your pass" title="กรุณาป้อนข้อมูล">
                                            </div> 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit button" class="btn btn-link">Save </button>
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div>
 <div class="modal fade note-view" id="add-note2" data-backdrop="static" data-keyboard="false">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title pull-left">Join in class</h5>
                                        </div>
                                        <div class="modal-body">
                                           <form action="addstudentsclass.php" method="post" id="form3">
                                            <div class="form-group">
                                            </div>
                                            <label for="pclass">Class password</label>
                                            <input  class="form-control required"  type="text"  name="pclass" placeholder="Your class name .." title="กรุณาป้อนข้อมูล">
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit button" class="btn btn-link">Save </button>
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div>
  

      <div class="actions btn-danger btn--action btn--fixed" align="right">
       <div class="dropup actions__item">
                                        <i class="zmdi zmdi-plus" data-toggle="dropdown"></i>

                                        <div class="dropdown-menu dropdown-menu-left">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#add-note" >create class</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#add-note2">join class</a>
                                        </div>
                                    </div>
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