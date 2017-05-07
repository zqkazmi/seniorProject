
<?php

$serve="localhost"; 
$user="root"; 
$pass=""; 
$dbname="campmin"; 
   
$link=mysqli_connect($serve, $user, $pass, $dbname); 
    if(!$link)
        die("Can't Connect to Database"); 
$username=isset($_POST['username'])?mysqli_real_escape_string($link, $_POST['username']):null;
$password=isset($_POST['password'])?mysqli_real_escape_string($link, $_POST['password']):null; 
$url="http://localhost/campusmin/index2.html"; 
$sql="SELECT 'user', 'password' FROM employee WHERE user='$username' AND password='$password';"; 
$result=mysqli_query($link, $sql); 

$fields_num = mysqli_field_count($link);

echo "<table border='1'><tr>";
for($i=0; $i<$fields_num; $i++)
{
    $field = mysqli_fetch_field($result);
}
echo "</tr>\n";
if($row = mysqli_fetch_row($result))
{
    echo "<script>window.location = '$url'</script>";
}
else{
    echo "<script>alert('Invalid information')</script>"; 
    $url="http://localhost/campusmin/login.html";
    echo "<script>window.location = '$url'</script>";
}

mysqli_free_result($result);
?>
