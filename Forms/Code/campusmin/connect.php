<!DOCTYPE html>
<html>
<body>
<?php
    

    $fname=$_POST['first']; 
    $lname=$_POST['last']; 
    $area=$_POST['area']; 
    $number=$_POST['number']; 
    $ministry=$_POST['lector']; 
    $email=$_POST['email']; 
    $lector=$_POST['lector']; 
    $euch=$_POST['eucharistic']; 
    
    echo "$fname and $lname <br> Phone number $area-$number involved in $email and $lector + $euch"; 
?>
</body>
</html>

