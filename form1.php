<?php
// database connection code
$con = mysqli_connect('localhost','root','','manoj');

// get the post records
$tc = $_GET['tcode'];
$tm = $_GET['manufacture'];
$te = $_GET['expire'];
$tname = $_GET['name'];
$tp = $_GET['uses'];
function search($c,$con){
$sql = "SELECT * FROM `tablet_details` WHERE tcode='$c'";
$rs = mysqli_query($con, $sql);
if (mysqli_num_rows($rs) == 0) {
  return 1;
}
return 0;
}
function insert($a,$b,$c,$d,$e,$con){
if($c>$b){
return 0;
}
// database insert SQL code
$sql = "INSERT INTO tablet_details VALUES ('$a', '$b','$c','$d','$e')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	return 1;
}
}
function insertchecking($a,$b){
if ($b==1){
  if($a==1){
  echo "<h3><center> Data is Successfully Recorded </center></h3>";
}
else{
  echo "<h3><center> You entered <font color='red'>Invalid Data</font></center></h3>";
  echo "<h3><center><font color='red'>Invalid Data upon Manfacture and Expire Date</font></center></h3>";
}
}
else{
  echo "<h3><center> You entered <font color='red'>Invalid Data</font></center></h3>";
  echo "<h3><center><font color='red'>Key is already exists</font></center></h3>";
}
}
$check=search($tc,$con);
$result=insert($tc,$te,$tm,$tname,$tp,$con);
insertchecking($result,$check);
?>