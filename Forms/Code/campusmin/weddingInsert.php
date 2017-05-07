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
$wmonth=isset($_POST['wmonth'])?mysqli_real_escape_string($link, $_POST['wmonth']):null;
$wday=isset($_POST['wday'])?mysqli_real_escape_string($link, $_POST['wday']):null;
$wyear=isset($_POST['wyear'])?mysqli_real_escape_string($link, $_POST['wyear']):null;
$rmonth=isset($_POST['rmonth'])?mysqli_real_escape_string($link, $_POST['rmonth']):null;
$rday=isset($_POST['rday'])?mysqli_real_escape_string($link, $_POST['rday']):null;
$ryear=isset($_POST['ryear'])?mysqli_real_escape_string($link, $_POST['ryear']):null;
$whour=isset($_POST['whour'])?mysqli_real_escape_string($link, $_POST['whour']):null;
$wminute=isset($_POST['wminute'])?mysqli_real_escape_string($link, $_POST['wminute']):null;
$wam=isset($_POST['wam'])?mysqli_real_escape_string($link, $_POST['wam']):null;
$rhour=isset($_POST['rhour'])?mysqli_real_escape_string($link, $_POST['rhour']):null;
$rminute=isset($_POST['rminute'])?mysqli_real_escape_string($link, $_POST['rminute']):null;
$ram=isset($_POST['ram'])?mysqli_real_escape_string($link, $_POST['ram']):null;
$wdate="$wmonth-$wday-$wyear"; 
$rdate="$rmonth-$rday-$ryear"; 
$wtime="$whour:$wminute $wam"; 
$rtime="$rhour:$rminute $ram";
#Groom Information 
$gfirst=isset($_POST['gfirst'])?mysqli_real_escape_string($link, $_POST['gfirst']):null;
$gmiddle=isset($_POST['gmiddle'])?mysqli_real_escape_string($link, $_POST['gmiddle']):null;
$glast=isset($_POST['glast'])?mysqli_real_escape_string($link, $_POST['glast']):null;
$gaddr_line1=isset($_POST['gaddr_line1'])?mysqli_real_escape_string($link, $_POST['gaddr_line1']):null;
$gaddr_line2=isset($_POST['gaddr_line2'])?mysqli_real_escape_string($link, $_POST['gaddr_line2']):"";
$gcity=isset($_POST['gcity'])?mysqli_real_escape_string($link, $_POST['gcity']):null;
$gstate=isset($_POST['gstate'])?mysqli_real_escape_string($link, $_POST['gstate']):null;
$gpostal=isset($_POST['gpostal'])?mysqli_real_escape_string($link, $_POST['gpostal']):null;
$gcountry=isset($_POST['gcountry'])?mysqli_real_escape_string($link, $_POST['gcountry']):null;
$garea=isset($_POST['garea'])?mysqli_real_escape_string($link, $_POST['garea']):null;
$gnumber=isset($_POST['gnumber'])?mysqli_real_escape_string($link, $_POST['gnumber']):null;
$gemail=isset($_POST['gemail'])?mysqli_real_escape_string($link, $_POST['gemail']):null;
$greligion=isset($_POST['greligion'])?mysqli_real_escape_string($link, $_POST['greligion']):null;
$gaffil=isset($_POST['gaffil'])?mysqli_real_escape_string($link, $_POST['gaffil']):null;
$gchurch=isset($_POST['gchurch'])?mysqli_real_escape_string($link, $_POST['gchurch']):null;
$gcaddr_line1=isset($_POST['gaddr_line1'])?mysqli_real_escape_string($link, $_POST['gaddr_line1']):null;
$gcaddr_line2=isset($_POST['gaddr_line2'])?mysqli_real_escape_string($link, $_POST['gaddr_line2']):"";
$gccity=isset($_POST['gcity'])?mysqli_real_escape_string($link, $_POST['gcity']):null;
$gcstate=isset($_POST['gstate'])?mysqli_real_escape_string($link, $_POST['gstate']):null;
$gcpostal=isset($_POST['gpostal'])?mysqli_real_escape_string($link, $_POST['gpostal']):null;
$gccountry=isset($_POST['gcountry'])?mysqli_real_escape_string($link, $_POST['gcountry']):null;
$gaddress="$gaddr_line1 $gaddr_line2 $gcity, $gpostal, $gcountry"; 
$gphone="$garea$gnumber"; 
$gcaddress="$gcaddr_line1 $gcaddr_line2 $gccity, $gcpostal, $gccountry";
#Bride Informationon
$bfirst=isset($_POST['bfirst'])?mysqli_real_escape_string($link, $_POST['bfirst']):null;
$blast=isset($_POST['blast'])?mysqli_real_escape_string($link, $_POST['blast']):null;
$baddr_line1=isset($_POST['baddr_line1'])?mysqli_real_escape_string($link, $_POST['baddr_line1']):"";
$baddr_line2=isset($_POST['baddr_line2'])?mysqli_real_escape_string($link, $_POST['baddr_line2']):"";
$bcity=isset($_POST['bcity'])?mysqli_real_escape_string($link, $_POST['bcity']):null;
$bstate=isset($_POST['bstate'])?mysqli_real_escape_string($link, $_POST['bstate']):null;
$bpostal=isset($_POST['bpostal'])?mysqli_real_escape_string($link, $_POST['bpostal']):null;
$bcountry=isset($_POST['bcountry'])?mysqli_real_escape_string($link, $_POST['bcountry']):null;
$barea=isset($_POST['barea'])?mysqli_real_escape_string($link, $_POST['barea']):null;
$bnumber=isset($_POST['bnumber'])?mysqli_real_escape_string($link, $_POST['bnumber']):null;
$bemail=isset($_POST['bemail'])?mysqli_real_escape_string($link, $_POST['bemail']):null;
$breligion=isset($_POST['breligion'])?mysqli_real_escape_string($link, $_POST['breligion']):null;
$bloyolaClass=isset($_POST['bloyolaClass'])?mysqli_real_escape_string($link, $_POST['bloyolaClass']):null;
$bchurch=isset($_POST['bchurch'])?mysqli_real_escape_string($link, $_POST['bchurch']):null;
$bcaddr_line1=isset($_POST['baddr_line1'])?mysqli_real_escape_string($link, $_POST['baddr_line1']):null;
$bcaddr_line2=isset($_POST['baddr_line2'])?mysqli_real_escape_string($link, $_POST['baddr_line2']):"";
$bccity=isset($_POST['bcity'])?mysqli_real_escape_string($link, $_POST['bcity']):null;
$bcstate=isset($_POST['bstate'])?mysqli_real_escape_string($link, $_POST['bstate']):null;
$bcpostal=isset($_POST['bpostal'])?mysqli_real_escape_string($link, $_POST['bpostal']):null;
$bpcountry=isset($_POST['gcountry'])?mysqli_real_escape_string($link, $_POST['gcountry']):null;
$baddress="$baddr_line1 $baddr_line2 $bcity, $bpostal, $bcountry"; 
$bphone="$barea$bnumber"; 
$bcaddress="$bcaddr_line1 $bcaddr_line2 $bccity, $bcpostal, $bpcountry";
#Church Information 
$ofirst=isset($_POST['ofirst'])?mysqli_real_escape_string($link, $_POST['ofirst']):null;
$plast=isset($_POST['plast'])?mysqli_real_escape_string($link, $_POST['plast']):null;
$paddr_line1=isset($_POST['paddr_line1'])?mysqli_real_escape_string($link, $_POST['paddr_line1']):"";
$paddr_line2=isset($_POST['paddr_line2'])?mysqli_real_escape_string($link, $_POST['paddr_line2']):"";
$pcity=isset($_POST['pcity'])?mysqli_real_escape_string($link, $_POST['pcity']):null;
$pstate=isset($_POST['pstate'])?mysqli_real_escape_string($link, $_POST['pstate']):null;
$cpostal=isset($_POST['cpostal'])?mysqli_real_escape_string($link, $_POST['cpostal']):null;
$pcountry=isset($_POST['pcountry'])?mysqli_real_escape_string($link, $_POST['pcountry']):null;
$parea=isset($_POST['parea'])?mysqli_real_escape_string($link, $_POST['parea']):null;
$pnumber=isset($_POST['pnumber'])?mysqli_real_escape_string($link, $_POST['pnumber']):null;
$pemail=isset($_POST['pemail'])?mysqli_real_escape_string($link, $_POST['pemail']):null;
$pname=isset($_POST['pname'])?mysqli_real_escape_string($link, $_POST['pname']):null;
$ctype=isset($_POST['ctype'])?mysqli_real_escape_string($link, $_POST['ctype']):null;
$paddress="$paddr_line1 $paddr_line2 $pcity, $cpostal, $pcountry"; 
$cphone="$parea$pnumber"; 
$sql="INSERT INTO wedding VALUES('$wdate','$wtime','$rdate', '$rtime','$gfirst', '$glast', '$greligion', '$gaddress', '$gphone','$gemail', '$gaffil','$gchurch','$gcaddress','$bfirst', '$blast', '$breligion', '$baddress', '$bphone','$bemail', '$bloyolaClass','$bchurch','$bcaddress', '$ofirst', '$plast', '$pname','$paddress','$cphone', '$pemail','$ctype');";
$result=mysqli_query($link, $sql); 
    if($result){
       echo "Thank You!<br> Name: $gfirst <br>Phone: $garea-$gnumber <br>Email: $gemail";
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