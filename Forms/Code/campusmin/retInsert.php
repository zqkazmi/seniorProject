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
$rname=isset($_POST['rname'])?mysqli_real_escape_string($link, $_POST['rname']):null;
$semester=isset($_POST['semester'])?mysqli_real_escape_string($link, $_POST['semester']):null;
$first=isset($_POST['first'])?mysqli_real_escape_string($link, $_POST['first']):null;
$middle=isset($_POST['middle'])?mysqli_real_escape_string($link, $_POST['middle']):null;
$sid=isset($_POST['sid'])?mysqli_real_escape_string($link, $_POST['sid']):null;
$religion=isset($_POST['religion'])?mysqli_real_escape_string($link, $_POST['religion']):null;
$gender=isset($_POST['gender'])?mysqli_real_escape_string($link, $_POST['gender']):null;
$caddr=isset($_POST['caddr'])?mysqli_real_escape_string($link, $_POST['caddr']):null;
$addr_line1=isset($_POST['addr_line1'])?mysqli_real_escape_string($link, $_POST['addr_line1']):null;
$addr_line2=isset($_POST['addr_line2'])?mysqli_real_escape_string($link, $_POST['addr_line2']):"";
$city=isset($_POST['city'])?mysqli_real_escape_string($link, $_POST['city']):null;
$state=isset($_POST['state'])?mysqli_real_escape_string($link, $_POST['state']):null;
$postal=isset($_POST['postal'])?mysqli_real_escape_string($link, $_POST['postal']):null;
$month=isset($_POST['month'])?mysqli_real_escape_string($link, $_POST['month']):null;
$day=isset($_POST['day'])?mysqli_real_escape_string($link, $_POST['day']):null;
$year=isset($_POST['year'])?mysqli_real_escape_string($link, $_POST['year']):null;
$last=isset($_POST['last'])?mysqli_real_escape_string($link, $_POST['last']):null;
$area=isset($_POST['area'])?mysqli_real_escape_string($link, $_POST['area']):null;
$number=isset($_POST['number'])?mysqli_real_escape_string($link, $_POST['number']):null;
$email=isset($_POST['email'])?mysqli_real_escape_string($link, $_POST['email']):null;
$classYear=isset($_POST['classYear'])?mysqli_real_escape_string($link, $_POST['classYear']):null;
$rexp=isset($_POST['rexp'])?mysqli_real_escape_string($link, $_POST['rexp']):null;
$diet=isset($_POST['diet'])?mysqli_real_escape_string($link, $_POST['diet']):null;
$disable=isset($_POST['disable'])?mysqli_real_escape_string($link, $_POST['disable']):"";
$efirst=isset($_POST['efirst'])?mysqli_real_escape_string($link, $_POST['efirst']):null;
$elast=isset($_POST['elast'])?mysqli_real_escape_string($link, $_POST['elast']):null;
$rtou=isset($_POST['rtou'])?mysqli_real_escape_string($link, $_POST['rtou']):null;
$earea=isset($_POST['earea'])?mysqli_real_escape_string($link, $_POST['earea']):null;
$enumber=isset($_POST['enumber'])?mysqli_real_escape_string($link, $_POST['enumber']):null;
$payment=isset($_POST['payment'])?mysqli_real_escape_string($link, $_POST['payment']):null;
$hear=isset($_POST['hear'])?mysqli_real_escape_string($link, $_POST['hear']):null;
$phone="$area$number"; 
$ephone="$earea$enumber"; 
$bdate="$month-$day-$year"; 
$address="$addr_line1 $addr_line2 $city $state $postal"; 
$sql="INSERT INTO retreat VALUES('$rname', '$semester', '$first','$middle','$last','$classYear','$sid','$gender','$email','$phone','$caddr','$bdate','$religion','$rexp','$efirst','$elast','$rtou','$address','$ephone','$payment','$diet','$disable','$hear');"; 
$result=mysqli_query($link, $sql); 
    
    if($result){
       echo "Thank You!<br> Name: $first <br>Phone: $area-$number <br>Email: $email";
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