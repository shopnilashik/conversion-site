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
  <p><a style="margin-left:30px;" href="page1.php">1.Home</a><a style="margin-left:10px;" href="page2.php">2.Conversion Rate</a><a style="margin-left:10px;" href="page3.php">3.History</a></p>
  <?php
$readData = read();
$arr1 = explode("\n", $readData);

echo "<ol>";
for($i = 0; $i < count($arr1) - 1; $i++) {
$arr2 = explode(",", $arr1[$i]);
echo "<li>" . "Feet: " . $arr2[0] . " Inches: " . $arr2[1]. "</li>";
}
echo "</ol>";

 function read() {
$fileName = "data.txt";
$resource = fopen($fileName, "r");
$fr = fread($resource, filesize($fileName));
fclose($resource);
return $fr;
}
?>



</div>


</body>
</html>