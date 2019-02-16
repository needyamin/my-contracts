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
<a href="show.php">Back Home</a>
<div class="mcontentshow">




<?php
include"c.php";
$del = @$_GET['del'];
$sql ="delete from user where id='$del'";
$ret = $db->query($sql);
if($ret){
	echo"<h1>Contact Has been Deleted......</h1>";
	//echo"<script>window.open('show.php?deleted=Post Has been Deleted......','_self')</script>";};

} ;?>
 
 
 
  </div> </div>
<footer> 
Yamin Hossain Shohan | Copyright @ 2019 | Open Source
</footer>

</body>
</html>