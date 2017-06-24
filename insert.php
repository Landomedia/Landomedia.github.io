<!DOCTYPE HTML>
<html>
<head>
  <title>Data</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
  <?php
  $nm=$_GET["nm"];
  $email=$_GET["email"];
  $instagram=$_GET["instagram"];
  $loc=$_GET["loc"];
  $count=$_GET["count"];
  mysql_connect("localhost","root","")
  mysql_select_db("testing")
  mysql_query("insert into test values('$nm','$email','$instagram','$loc','$count')")



  ?>
</body>
</html>
