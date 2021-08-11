<html>
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
$sql="INSERT INTO performancee VALUES('$_POST[roll]','$_POST[n]','$_POST[b]','$_POST[p]','$_POST[c]','$_POST[h]','$_POST[cs]','$_POST[hs]','$_POST[t]')"; 
if(mysqli_query($conn,$sql))
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