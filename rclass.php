<html>
<head>
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>

<h3>classroom</h3>

<div class="container " >
  <form action="checkclass.php" method="post">

    <label for="Cid">class_id</label>
    <input type="text"  name="cid" placeholder="Your class_id">

    <label for="cname">name class</label>
    <input type="text"  name="cname" placeholder="Your class name ..">

    <label for="pclass">pass</label>
    <input type="text"  name="pclass" placeholder="Your pass">

<!--
    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
-->
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>