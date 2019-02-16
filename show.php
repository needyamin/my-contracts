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

<form action="search.php" method="GET"> <input type="text" size="25%" name="search" placeholder="Search.."> <input type="submit" name="submit" value="Search"> 
</div>


<div id="mshow"><br>
<a href="index.php">Back Home</a>
<div class="mcontentshow">


<?php 
include"c.php";
$sql="select * from user order by 1 DESC";
$i=1;
$view = @$_GET['edit'];
$del = @$_GET['del'];
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
	

;?>

<table style="border:2px solid black;" align="center" width="400">
<tr> <td > No: <?php echo $i++;?> <div style="float:right;"> <a href="edit.php?edit=<?php echo $id;?>"><small> Edit </small> </a> | <a href="del.php?del=<?php echo $id;?>"><small> Delete</small> </a> </div>  </td> </tr>
<tr> <td > Name: <?php echo $name;?> </td></tr>
<tr> <td >Mobile: 0<?php echo $mobile;?>  </td></tr>
<tr> <td > Mobile: <?php echo $mobile2;?>   </td></tr>
<tr> <td >Email: <?php echo $email;?>   </td></tr>
<tr> <td >Work: <?php echo $work;?>   </td></tr>
<tr> <td >Address: <?php echo $address;?>  </td></tr>
<tr> <td >Note: <?php echo $note;?>  </td></tr> <br>
</table><br>


 
 <?php } ;?>
 </div> </div>
<footer> 
Yamin Hossain Shohan | Copyright @ 2019 | Open Source
</footer>

</body>
</html>


 
