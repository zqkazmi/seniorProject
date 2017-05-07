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
$fname=isset($_POST['fname'])?mysqli_real_escape_string($link, $_POST['fname']):null;
$mname=isset($_POST['mname'])?mysqli_real_escape_string($link, $_POST['mname']):null;
$addr_line1=isset($_POST['addr_line1'])?mysqli_real_escape_string($link, $_POST['addr_line1']):null;
$addr_line2=isset($_POST['addr_line2'])?mysqli_real_escape_string($link, $_POST['addr_line2']):"";
$city=isset($_POST['city'])?mysqli_real_escape_string($link, $_POST['city']):null;
$state=isset($_POST['state'])?mysqli_real_escape_string($link, $_POST['state']):null;
$postal=isset($_POST['postal'])?mysqli_real_escape_string($link, $_POST['postal']):null;
$lname=isset($_POST['lname'])?mysqli_real_escape_string($link, $_POST['lname']):null;
$area=isset($_POST['area'])?mysqli_real_escape_string($link, $_POST['area']):null;
$number=isset($_POST['number'])?mysqli_real_escape_string($link, $_POST['number']):null;
$email=isset($_POST['email'])?mysqli_real_escape_string($link, $_POST['email']):null;
$classYear=isset($_POST['classYear'])?mysqli_real_escape_string($link, $_POST['classYear']):null;
$cexp=isset($_POST['cexp'])?mysqli_real_escape_string($link, $_POST['cexp']):null;
$vp=isset($_POST['vp'])?mysqli_real_escape_string($link, $_POST['vp']):null;
$instrument=isset($_POST['instrument'])?mysqli_real_escape_string($link, $_POST['instrument']):"";
$rmusic=isset($_POST['rmusic'])?mysqli_real_escape_string($link, $_POST['rmusic']):null;
$cantor=isset($_POST['cantor'])?mysqli_real_escape_string($link, $_POST['cantor']):null;
$folderNo=isset($_POST['folderNo'])?mysqli_real_escape_string($link, $_POST['folderNo']):null;
$phone="$area$number"; 
$address="$addr_line1 $addr_line2 $city $state $postal"; 
$sql="INSERT INTO choir VALUES('$fname','$mname', '$lname', '$address', '$classYear','$phone', '$email', '$cexp', '$vp','$instrument', '$rmusic','$cantor','$folderNo');";
$result=mysqli_query($link, $sql); 
    if($result){
       echo "Thank You!<br> Name: $fname <br>Phone: $area-$number <br>Email: $email";
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