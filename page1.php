<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php 
$data = "";
$ERR = "";
$flag = false;
$successfulMessage = "";
$errorMessage = "";
if($_SERVER['REQUEST_METHOD'] === "POST") {
  $feet = $_POST['feet'];
  
  if(empty($feet)) {
    $ERR = "Feet can not be empty!";
    $flag = true;
  }
  if(!$flag) {
    $data = $feet*12;
    $result = write($feet . "," . $data . "\n");
    
    if($result) {
    $successfulMessage = "Successfully Saved!";
    }
    else {
    $errorMessage = "Error while saving!";
    }
    }
    }

    
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



$readData = read();
$arr1 = explode("\n", $readData);

 
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





<div style="width: 450px;
  height:  500px;
  border: 5px solid black;
  margin-left: 400px;">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
  <h3 style="color: red;">Page 1 [Home]</h3>
  <h3 style="color: red;">Page 1 [Conversion Rate]</h3>
  <h3 style="color: red;">Conversion Site</h3>
<p><a style="margin-left:30px;" href="page1.php">1.Home</a><a style="margin-left:10px;" href="page2.php">2.Conversion Rate</a><a style="margin-left:10px;" href="page3.php">3.History</a></p>
<select  style="margin-left:30px;" id="cars" name="cars">
    <option value="feettoinch">Feet to inch</option>
   
  </select>
  <br><br>
  <label style="margin-left:30px;" for="feet">Value:</label>
  <input type="text" name="feet" id="feet"><br>
  <label for="feet"style="position: fixed;margin-left:30px;">Result:</label>
  <div style="width: 180px;
  height:  20px;
  border: 1px solid black;margin-left:80px;"><?php echo $data?></div>
  
<br><br>
  <input style="margin-left:30px;margin-left:10px;" type="submit" name="submit" value="Submit">
  <span style="color: green;"><?php echo $successfulMessage; ?></span>
<span style="color: red;"><?php echo $errorMessage; ?></span>
</form>
</div>

</body>
</html>

