<!DOCTYPE html>
<html lang="en">
   
               
<script>
    function myFunction() {
        var x;
        var site = prompt("รหัสเข้าชั้นเรียน", "กรุณาใส่รหัสเข้าชั้นเรียน");
        if (site != null) {
            x = "Welocme at " + site + "! Have a good day";
            document.getElementById("demo").innerHTML = x;
        }
    }
</script>
</head>
<body>
<?php
?>
<button onclick="myFunction()">Prompt Box</button>
<p id="demo"></p>
</body>
</html>

           


        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/tether/dist/js/tether.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>