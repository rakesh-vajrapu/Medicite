<?php
$con = mysqli_connect('localhost','root','','manoj');
$username=$_GET['name'];
$password=$_GET['password'];
function validation($username,$password,$con){
$sql = "SELECT * FROM `user_details` WHERE username='$username' and password='$password'";
$rs = mysqli_query($con, $sql);
if (mysqli_num_rows($rs) > 0) {
  return 1;
}
return 0;
}
$result=validation($username,$password,$con);
if($result==1){
echo'<div style="font-size:26px;
background-color:#8D918D;
height:20%;
width:50%;
border-radius:10px;
padding:15px;
margin:auto;
justify-contents:space-between">
<center>Successfully Login
<br>
Click here to insert the data
<br>
<a href="record.html">
<button style="background-color:green;
border:none;
color:white;
padding:15px 32px;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:16px;
cursor:pointer">Add new Record</button></a></center>
</div>';
}
else{
echo'<div style="font-size:26px;
background-color:#8D918D;
height:20%;
width:50%;
border-radius:10px;
padding:15px;
margin:auto;
justify-contents:space-between"><center>Invalid Username or Password
<p style="font-size:100px">&#128577;</p></center>
</div>';
}

?>
