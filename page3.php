<!DOCTYPE html>
<html>
<head>

</head>
<body>

<div style="width: 450px;
  height:  500px;
  border: 5px solid black;
  margin-left: 400px;">

  <h3 style="color: red;">Page 1 [History]</h3>
  <h3 style="color: red;">Conversion Site</h3>
  <p><a href="page1.php">1.Home</a><a href="page2.php">2.Coversion Rate</a><a href="page3.php">3.History</a></p>
<?php
// Store JSON data in a PHP variable
$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
 
var_dump(json_decode($json));

?>
  





</div>


</body>
</html>