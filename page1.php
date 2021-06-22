<!DOCTYPE html>
<html>
<head>

</head>
<body>

<div style="width: 450px;
  height:  500px;
  border: 5px solid black;
  margin-left: 400px;">

  <h3 style="color: red;">Page 1 [Home]</h3>
  <h3 style="color: red;">Conversion Site</h3>
  <p><a href="page1.php">1.Home</a><a href="page2.php">2.Conversion Rate</a><a href="page3.php">3.History</a></p>
 
  <p>
  <label>Converter</label>
  <input id="inputFeet" name="inputE" type="number" placeholder="Feet" oninput="LengthConverter(this.value)" onchange="LengthConverter(this.value)">
</p>

Result: <div id="outputInches" style="border: 1px solid black;height: 20px;width: 150px;margin: 0px;"<p><span id="outputInches"></span></p></div>
<script>
function LengthConverter(valNum) {
  document.getElementById("outputInches").innerHTML=valNum*12;
}
</script>


<?php
$existing_data = read();


$feet="inputFeet";
$res="outputInches";
$arr1 = array("Feet"=>$feet, "Result"=> $res);
$result = write(json_encode($arr1));

$existing_data_decode[] = json_decode($existing_data);
array_push($existing_data_decode, array("Feet"=>$feet,"Inches"=>$res);
write("");
$result = write(json_encode($existing_data_decode));





function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
}

 function write($content) {
$fileName = "data.txt";
$resource = fopen($fileName, "w");
$fw = fwrite($resource, $content);
fclose($resource);
return $fw;
}
?>


<?php
$readData = read();
$arr1 = explode("\n", $readData);

 echo "<ol>";
for($i = 0; $i < count($arr1) - 1; $i++) {
$decode = json_decode($arr1[$i]);
echo "<li>" . $decode->firstname . " - " . $decode->lastname . "</li>";
}
echo "</ol>";

 function read() {
$fileName = "data.txt";
$fileSize = filesize($fileName);
$fr = "";
if($fileSize > 0) {
$resource = fopen($fileName, "r");
$fr = fread($resource, $fileSize);
fclose($resource);
return $fr;
}
}
?>

</div>


</body>
</html>

