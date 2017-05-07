<!DOCTYPE html>
<html>
<body>
    
<?php
    
    
$fname=isset($_POST['fname'])?mysqli_real_escape_string($link, $_POST['fname']):null 
$mname=isset($_POST['mname'])?mysqli_real_escape_string($link, $_POST['mname']):null 
$lname=isset($_POST['lname'])?mysqli_real_escape_string($link, $_POST['lname']):null 
$area=isset($_POST['area'])?mysqli_real_escape_string($link, $_POST['area']):null 
$number=isset($_POST['number'])?mysqli_real_escape_string($link, $_POST['number']):null 
$email=isset($_POST['email'])?mysqli_real_escape_string($link, $_POST['email']):null $retreats=isset($_POST['retreats'])?mysqli_real_escape_string($link, $_POST['retreats']):" " 
$wedding=isset($_POST['wedding'])?mysqli_real_escape_string($link, $_POST['wedding']):" "
$choir=isset($_POST['choir'])?mysqli_real_escape_string($link, $_POST['choir']):""
$notes=isset($_POST['notes'])?mysqli_real_escape_string($link, $_POST['notes']):""
    
       

    echo "Thank You!<br> Name: $fname $mname $lname";
?>
    <div id="body">
	<img src="images/thankyou" class="figure">
	</div>

</body>
</html>

