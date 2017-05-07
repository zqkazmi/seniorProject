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
$first=isset($_POST['first'])?mysqli_real_escape_string($link, $_POST['first']):null;
$mname=isset($_POST['mname'])?mysqli_real_escape_string($link, $_POST['mname']):null;
$last=isset($_POST['last'])?mysqli_real_escape_string($link, $_POST['last']):null;
$area=isset($_POST['area'])?mysqli_real_escape_string($link, $_POST['area']):null;
$number=isset($_POST['number'])?mysqli_real_escape_string($link, $_POST['number']):null;
$email=isset($_POST['email'])?mysqli_real_escape_string($link, $_POST['email']):null;
$retreats=isset($_POST['retreats'])?mysqli_real_escape_string($link, $_POST['retreats']):" " ;
$wedding=isset($_POST['wedding'])?mysqli_real_escape_string($link, $_POST['wedding']):" ";
$Choir=isset($_POST['Choir'])?mysqli_real_escape_string($link, $_POST['Choir']):"";
$notes=isset($_POST['notes'])?mysqli_real_escape_string($link, $_POST['notes']):"";
$interested="$retreats $wedding $Choir"; 
$phone="$area$number"; 

$sql="INSERT INTO interested VALUES('$first','$mname', '$last', '$phone', '$email', '$interested', '$notes');";
$result=mysqli_query($link, $sql); 
    if($result){
       echo "Thank You!<br> Name: $first <br>Phone: $area-$number <br>Email: $email <br>Interested in $interested";
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

