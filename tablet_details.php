<?php
$con = mysqli_connect('localhost','root','','manoj');
$f=$_GET["search"];
function search($c,$con){
$sql = "SELECT * FROM `tablet_details` WHERE tcode='$c'";
$rs = mysqli_query($con, $sql);
if (mysqli_num_rows($rs) > 0) {
  return 1;
}
return 0;
}
function displaying($c,$con){
$sql = "SELECT * FROM `tablet_details` WHERE tcode='$c'";
$rs = mysqli_query($con, $sql);
 while($row = mysqli_fetch_assoc($rs)) {
    echo '<center><h3>Name:'.$row["name"].'</h3></center>';
    echo '<center><h3>Date of Manufacture:'.$row["manufacture"].'</h3></center>';
    echo '<center><h3>Date of Expire:'.$row["expire"].'</h3></center>';
    echo '<center><h3>Uses:'.$row["uses"].'</h3></center>';
  }
} 
$result=search($f,$con);
if($result==1){
displaying($f,$con);
}
else{
echo "<center><h3>Invalid Tablet Code</h3></center>";
}
?>