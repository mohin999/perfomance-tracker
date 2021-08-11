a<html>
<body>
<?php      
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}     
$roll = $_POST['roll'];
    $namee = $_POST['n'];
    $branchh = $_POST['b'];
    $p = $_POST['p'];
    $c = $_POST['c'];
    $h = $_POST['h'];
    $cs = $_POST['cs'];
    $hs = $_POST['hs'];
    $t = $_POST['t'];
$query = "UPDATE performancee SET rollno='$roll', name='$namee', branch='$branchh',passout_year='$p',codechef_score='$c',hackerrank_score='$h',codeforce_score='$cs',hackerearth_score='$hs',total_score='$t' WHERE rollno='$roll' ";
if(mysqli_query($conn,$query))
  {
  echo " record added" ;
  }
else
{
echo "error";
}
mysqli_close($conn);
?>

</body>
</html>