<!DOCTYPE html>
<html>
<body>
    <div class="form-all">
<ul class="form-section page-section">
      
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Retreats
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              Your results are displayed below. 
            </div>
          </div>
        </div>
      </li>
<?php
    
$serve="localhost"; 
$user="root"; 
$pass=""; 
$dbname="campmin"; 
    
$link=mysqli_connect($serve, $user, $pass, $dbname); 
    if(!$link)
        die("Can't Connect to Database"); 
$tname=isset($_POST['tname'])?mysqli_real_escape_string($link, $_POST['tname']):null;
$oname=isset($_POST['oname'])?mysqli_real_escape_string($link, $_POST['oname']):null;
$value=isset($_POST['value'])?mysqli_real_escape_string($link, $_POST['value']):null;
$search=isset($_POST['search'])?mysqli_real_escape_string($link, $_POST['search']):null;  
    if($oname==='None'){
          $sql="SELECT * FROM {$tname} ";
        echo "$oname"; 
    }else{
        $sql="SELECT * FROM {$tname} WHERE {$oname}{$search}'{$value}'";
    }
        
$result=mysqli_query($link, $sql); 
    
 
if (!$result) {
    die("Query to show fields from table failed");
} 

$fields_num = mysqli_field_count($link);

echo "<table border='1'><tr>";
for($i=0; $i<$fields_num; $i++)
{
    $field = mysqli_fetch_field($result);
    echo "<td>{$field->name}</td>";
}
echo "</tr>\n";
while($row = mysqli_fetch_row($result))
{
    echo "<tr>";
     foreach($row as $cell) 
        echo "<td>$cell</td>";

    echo "</tr>\n";
}
mysqli_free_result($result);

?>
<button onclick="Return()">Return</button>
<button onClick="download()">Download</button>
<script>
function Return() {
    window.history.back();
}
</script>


</body>
</html>