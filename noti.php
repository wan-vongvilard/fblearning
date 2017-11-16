<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <script type="text/javascript">
		window.fbAsyncInit = function() {
		  FB.init({
			appId      : '1176505742478583', // หาได้จากการ สร้าง AppID ใน developer Facebook เดี๋ยวจะเขียนในบทความต่อไป
			cookie     : true,  // enable cookies to allow the server to access 
								// the session
			xfbml      : true,  // parse social plugins on this page
			version    : 'v2.6' // use graph api version 2.5
		  });
		};
		  (function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		  }(document, 'script', 'facebook-jssdk'));
</script>

 <script>
                function notification()
			{
					///แจ้งเตือนไปที่เฟส
					FB.api(
					  '/1434753123237209/notifications',
					  'POST',
					  {"href":"message","template":"ข้อความที่ต้องการเด้งขึ้น","access_token":"1176505742478583|ql3peyeVxI678_-wXoOr_QwslCw"},
					  function(response) {
						  // Insert your code here
					  }
					);
			}
</script>
</head>
<body>

</body>
</html>