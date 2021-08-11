<html>
<style>
table{
	
	margin:150px 150px;
	
}
td{
	padding:20px;
	background-color:#f2e4b6;
	
}
th{
	background-color:#b36a32;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
body{
	
	 
	 background-size:cover;
	background-position:center;
	
	 
}
</style>
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

$result = mysqli_query($conn,"SELECT * FROM oj");

echo "<table border='1'>
<tr>
<th>OJ name</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['OJ name'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>

</body>
</html>