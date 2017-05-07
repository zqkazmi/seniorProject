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
$last=isset($_POST['last'])?mysqli_real_escape_string($link, $_POST['last']):null;
$area=isset($_POST['area'])?mysqli_real_escape_string($link, $_POST['area']):null;
$number=isset($_POST['number'])?mysqli_real_escape_string($link, $_POST['number']):null; 
$email=isset($_POST['email'])?mysqli_real_escape_string($link, $_POST['email']):null; 
$religion=isset($_POST['religion'])?mysqli_real_escape_string($link, $_POST['religion']):null;
$gender=isset($_POST['gender'])?mysqli_real_escape_string($link, $_POST['gender']):null;
$lector=isset($_POST['lector'])?mysqli_real_escape_string($link, $_POST['lector']):"";
$eucharistic=isset($_POST['eucharistic'])?mysqli_real_escape_string($link, $_POST['eucharistic']):"";
$hospitality=isset($_POST['hospitality'])?mysqli_real_escape_string($link, $_POST['hospitality']):"";
$singer=isset($_POST['singer'])?mysqli_real_escape_string($link, $_POST['singer']):"";
$instrument=isset($_POST['instrument'])?mysqli_real_escape_string($link, $_POST['instrument']):"";
$amdg=isset($_POST['amdg'])?mysqli_real_escape_string($link, $_POST['amdg']):"";
$kairos=isset($_POST['kairos'])?mysqli_real_escape_string($link, $_POST['kairos']):"";
$menRet=isset($_POST['menRet'])?mysqli_real_escape_string($link, $_POST['menRet']):"";
$ignite=isset($_POST['ignite'])?mysqli_real_escape_string($link, $_POST['ignite']):"";
$spirit=isset($_POST['spirit'])?mysqli_real_escape_string($link, $_POST['spirit']):"";
$women=isset($_POST['women'])?mysqli_real_escape_string($link, $_POST['women']):"";
$rcia=isset($_POST['rcia'])?mysqli_real_escape_string($link, $_POST['rcia']):"";
$crs=isset($_POST['crs'])?mysqli_real_escape_string($link, $_POST['crs']):"";
$fir=isset($_POST['fir'])?mysqli_real_escape_string($link, $_POST['fir']):"";
$cohort=isset($_POST['cohort'])?mysqli_real_escape_string($link, $_POST['cohort']):"";
$interfaith=isset($_POST['interfaith'])?mysqli_real_escape_string($link, $_POST['interfaith']):"";
$teach=isset($_POST['teach'])?mysqli_real_escape_string($link, $_POST['teach']):"";
$koinonia=isset($_POST['koinonia'])?mysqli_real_escape_string($link, $_POST['koinonia']):"";
$prayer=isset($_POST['prayer'])?mysqli_real_escape_string($link, $_POST['prayer']):"";
$social=isset($_POST['social'])?mysqli_real_escape_string($link, $_POST['social']):"";
$soup=isset($_POST['soup'])?mysqli_real_escape_string($link, $_POST['soup']):"";
$tea=isset($_POST['tea'])?mysqli_real_escape_string($link, $_POST['tea']):"";
$stalp=isset($_POST['stalp'])?mysqli_real_escape_string($link, $_POST['stalp']):"";
$ifyc=isset($_POST['ifyc'])?mysqli_real_escape_string($link, $_POST['ifyc']):"";
$ignatian=isset($_POST['ignatian'])?mysqli_real_escape_string($link, $_POST['ignatian']):"";
$isn=isset($_POST['isn'])?mysqli_real_escape_string($link, $_POST['isn']):"";
$crcl=isset($_POST['crcl'])?mysqli_real_escape_string($link, $_POST['crcl']):"";
$evensong=isset($_POST['evensong'])?mysqli_real_escape_string($link, $_POST['evensong']):"";
$interfaithl=isset($_POST['interfaithl'])?mysqli_real_escape_string($link, $_POST['interfaithl']):"";
$walking=isset($_POST['walking'])?mysqli_real_escape_string($link, $_POST['walking']):"";
$small=isset($_POST['small'])?mysqli_real_escape_string($link, $_POST['small']):"";
$retreatL=isset($_POST['retreatL'])?mysqli_real_escape_string($link, $_POST['retreatL']):"";
$retreatT=isset($_POST['retreatT'])?mysqli_real_escape_string($link, $_POST['retreatT']):"";
$student=isset($_POST['student'])?mysqli_real_escape_string($link, $_POST['student']):"";
$notes=isset($_POST['notes'])?mysqli_real_escape_string($link, $_POST['notes']):"";
$phone="$area$number"; 
$interest="$lector $eucharistic$hospitality$singer$instrument$amdg$kairos$menRet $ignite$spirit$women$rcia$crs$fir$cohort$interfaith$teach$koinonia$prayer$social$soup$tea$stalp$ifyc$ignatian$isn$crcl$evensong$interfaithl$walking$small$retreatL$retreatT$student"; 
$sql="INSERT INTO attendee VALUES('$first','$last', '$phone', '$email', '$interest', '$gender','$religion','$notes');";
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