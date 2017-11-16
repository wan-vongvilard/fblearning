

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
  tempdata['template'] = "มีงานใหม่";
  jQuery.post(address, tempdata , function(data){
      console.log(data);
  });
}	
	makePost(<?php echo $_SESSION['strFacebookID'];  ?>);
</script>
