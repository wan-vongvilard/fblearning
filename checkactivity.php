<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript">
		window.fbAsyncInit = function() {
		  FB.init({
			appId      : '1176505742478583', // หาได้จากการ สร้าง AppID ใน developer Facebook เดี๋ยวจะเขียนในบทความต่อไป
			cookie     : true,  // enable cookies to allow the server to access 
								// the session
			xfbml      : true,  // parse social plugins on this page
			version    : 'v2.8' // use graph api version 2.5
		  });
		};
		  (function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "https://connect.facebook.net/en_US/all.js";
			fjs.parentNode.insertBefore(js, fjs);
		  }(document, 'script', 'facebook-jssdk'));

</script>


</head>
<body>


<script>
function notification1()
{
	///แจ้งเตือนไปที่เฟส
	FB.api(
	  '/1857072247642359/notifications',
	  'POST',
	  {"href":"message","template":"ข้อความที่ต้องการเด้งขึ้น","access_token":"1176505742478583|ql3peyeVxI678_-wXoOr_QwslCw"},
	  function(response) {
		  // Insert your code here
	  }
	);
}	
function makePost(personid){
  var address = "https://graph.facebook.com/" + personid + "/notifications";
  var tempdata = {};
  tempdata['access_token'] = 1176505742478583 + "|" + 'ql3peyeVxI678_-wXoOr_QwslCw';
  tempdata['href'] = "";
  tempdata['template'] = "check you new messages";
  jQuery.post(address, tempdata , function(data){
      console.log(data);
  });
}	
	makePost(100001076065599);
</script>
<?php
session_start();
//INSERT INTO `classes`(`class_id`, `passclassroom`, `class_name`) VALUES (1,2,3)
include("mysqlconn.php") ;


		$sql_insert ="INSERT INTO `activies`(`activity_name`, `activity_data`, `activity_type_id`, `students_id`) VALUES ('".$_POST["activity_name1"]. "','".$_POST["activity_data1"]. "','".$_POST["activity_type_id1"]. "','".$_SESSION['cstudents']."')";
	 	$sql2 = mysql_query($sql_insert);

		if(!$sql2){

				echo "yes";
				//header("location:dashboard.php");

			}
		else{
				echo "no";

				header("location:stream.php");
			}
	

mysql_close();
?>

</body>
</html>