<DOCTYPE HTML>
<html> 
<head><title> My Data Entry Book</title>
<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<script type="text/javascript">
window.onload = function() {
	disableSelection(document.body)
}
function disableSelection(target){
if (typeof target.onselectstart!="undefined")
	target.onselectstart=function(){return false}
else if (typeof target.style.MozUserSelect!="undefined")
	target.style.MozUserSelect="none"
else
	target.onmousedown=function() {return false}
target.style.cursor = "default"
}
</script>




<div id="top"> <h3>My Data Entry Book</h3> 
</div>

<div id="m">
<div class="mcontent">
<table align="right" style="margin-right:35px;">
<form action="index.php" method="post">
<div id="imgh">
<a href="show.php"> <img src="img.png" width="250px"> </a>
</div>
<tr> <td align="center">
Name: <br>
 <input required type="text" name="name" placeholder="Full Name"></tr> </td>
 <tr> <td  align="center">
 Mobile: <br>
  <input required type="text" name="mobile" placeholder="Mobile Number"></tr> </td>
  <tr> <td  align="center">
  Another Mobile: <br>
   <input type="text" name="mobile2" placeholder="Another Mobile Number"></tr> </td>
   <tr> <td  align="center">
   Email:  <br>
      <input type="text" name="email" placeholder="Your Email Address"></tr> </td>
	  <tr> <td  align="center">
	  Work:  <br>
          <input type="text" name="work" placeholder="Work Information"></tr> </td>
		  <tr> <td  align="center">
		  Address:  <br>
	       <input type="text" name="address" placeholder="Address"></tr> </td>
		   <tr> <td  align="center">
		   Personal Note: <br>
	          <textarea name="note" rows="10" cols="20" ></textarea></tr> </td>
 <tr> <td  align="center">
 <input type="submit" name="submit" value="Submit"></tr> </td>
 </form>
 </table>
 </div>  <br> <br> </div>


</body>

<footer> 
Yamin Hossain Shohan | Copyright @ 2019 | Open Source
</footer>
</html>


<?php
include"c.php";
if(isset($_POST['submit'])){
$name = $_POST['name'];	
$mobile = $_POST['mobile'];
$mobile2 = $_POST['mobile2'];
$email = $_POST['email'];
$work = $_POST['work'];
$address = $_POST['address'];
$note = $_POST['note'];	


$sql= "insert into user (name,mobile,mobile2,email,work,address,note) values ('$name','$mobile','$mobile2','$email','$work','$address','$note')";

if($db->query($sql)) {
	echo"<script>alert('Submit Successfully')</script>";
}
else{echo"something wrong";}
	
}
 ;?>