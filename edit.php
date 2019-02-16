<?php 
include"c.php";
$view = $_GET['edit'];
$sql = "select * from user where id='$view'";
$ret = $db->query($sql);
while($row = $ret->fetchArray(SQLITE3_ASSOC)){
 $name = $row['name'];	
 $mobile = $row['mobile'];
 $mobile2 = $row['mobile2'];
 $email = $row['email'];
 $work = $row['work'];
 $address = $row['address'];
 $note = $row['note'];
 $id = $row['id'];

 ?>
 
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

<div id="mshow"><br>
<a href="show.php">Go Back</a>
<div class="mcontentshow">
 
<table align="center" width="350">
<form action="edit.php?edit=<?php echo $view;?>" method="post">

<tr> <td width="350" align="center">
Name: <br>
 <input required type="text" name="name" value="<?php echo $name;?>"></tr> </td>
 <tr> <td  align="center">
 Mobile: <br>
  <input required type="text" name="mobile" value="<?php echo $mobile;?>"></tr> </td>
  <tr> <td  align="center">
  Another Mobile: <br>
   <input type="text" name="mobile2" value="<?php echo $mobile2;?>"></tr> </td>
   <tr> <td  align="center">
   Email:  <br>
      <input required type="text" name="email" value=" <?php echo $email;?>  "></tr> </td>
	  <tr> <td  align="center">
	  Work:  <br>
          <input required type="text" name="work" value="<?php echo $work;?> "></tr> </td>
		  <tr> <td  align="center">
		  Address:  <br>
	       <input required type="text" name="address" value="<?php echo $address;?>"></tr> </td>
		   <tr> <td  align="center">
		   Personal Note: <br>
	          <textarea name="note" rows="10" cols="20" > <?php echo $note;?> </textarea></tr> </td>
 <tr> <td  align="center">
 <input type="submit" name="update" value="Update"></tr> </td>
 </form>
 </table>

 
 </div> </div>
<footer> 
Yamin Hossain Shohan | Copyright @ 2019 | Open Source
</footer>

</body>
</html>



<?php
if(isset($_POST['update'])){
	
//set ID name
$id= $_GET['edit'];

$name = $_POST['name'];	
$mobile = $_POST['mobile'];
$mobile2 = $_POST['mobile2'];
$email = $_POST['email'];
$work = $_POST['work'];
$address = $_POST['address'];
$note = $_POST['note'];	


$update= "update user set name='$name',mobile='$mobile',mobile2='$mobile2',email='$email',work='$work',address='$address',note='$note' where id='$id'";

$run = $db->query($update);
if($run){
echo"<script>alert('Successfully Updated')</script>";	
}

else
	
{
	echo"something wrong";
}
	
}}
 ;?>