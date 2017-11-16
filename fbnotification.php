<?php session_start(); 
$students_in_class="SELECT
students_in_class.student_in_class_id,
students_in_class.archivedclass,
students_in_class.facebook_id,
students_in_class.class_id
FROM
students_in_class
WHERE class_id = '".$_SESSION["class_id"]. "'";
$Query_students = mysql_query($students_in_class);
?>
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
			version    : 'v2.11' // use graph api version 2.11
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
	var notimsg = "<?php echo $session['activity_name']; ?>";
  tempdata['access_token'] = 1176505742478583 + "|" + 'ql3peyeVxI678_-wXoOr_QwslCw';
  tempdata['href'] = "";
  tempdata['template'] = notimsg;
  jQuery.post(address, tempdata , function(data){
      console.log(data);

	});
}	
<?php while ($array_students =mysql_fetch_array($Query_students)) {?>
	makePost(<?php echo $array_students['facebook_id'];  ?>);
<?php } ?>

</script>


</body>
</html>