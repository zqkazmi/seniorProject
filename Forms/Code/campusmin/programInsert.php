<!DOCTYPE html>
<html>
<body>
    
<?php
  
$serve="localhost"; 
$user="root"; 
$pass=""; 
$dbname="campmin"; 
    
$link=mysqli_connect($serve, $user, $pass, $dbname); 
    if(!$link)
        die("Can't Connect to Database"); 
    
#Wedding Information
$month=isset($_POST['month'])?mysqli_real_escape_string($link, $_POST['month']):null;
$day=isset($_POST['day'])?mysqli_real_escape_string($link, $_POST['day']):null;
$year=isset($_POST['year'])?mysqli_real_escape_string($link, $_POST['year']):null;

$hour=isset($_POST['hour'])?mysqli_real_escape_string($link, $_POST['hour']):null;
$minute=isset($_POST['minute'])?mysqli_real_escape_string($link, $_POST['minute']):null;
$ampm=isset($_POST['ampm'])?mysqli_real_escape_string($link, $_POST['ampm']):null;
$date="$month-$day-$year"; 

$time="$hour:$minute $ampm"; 

$eName=isset($_POST['eName'])?mysqli_real_escape_string($link, $_POST['eName']):null;
$attendance=isset($_POST['attendance'])?mysqli_real_escape_string($link, $_POST['attendance']):null;
$eventType=isset($_POST['eventType'])?mysqli_real_escape_string($link, $_POST['eventType']):null;
$location=isset($_POST['location'])?mysqli_real_escape_string($link, $_POST['location']):null;
$semester=isset($_POST['semester'])?mysqli_real_escape_string($link, $_POST['semester']):null;
$sql="INSERT INTO program VALUES('$eName', '$date','$time','$location','$semester',$attendance,'$eventType');";
$result=mysqli_query($link, $sql); 
    if($result){
       echo "Thank You!<br> Name: $eName<br>Event Type:$eventType <br>Semester: $semester";
    }else {
         echo "Error: ".$sql ."<br>" . mysqli_error($link); 
    }
    mysqli_close($link); 
?>
    <div id="body">
	<img src="images/thankyou" class="figure">
	</div>

</body>
</html>