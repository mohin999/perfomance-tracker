<html>
<center>
<p>Hackerearth DETAILS</p>
</center>
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
	 background-image:url(iplpic.png);
	 
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

$result = mysqli_query($conn,"SELECT * FROM performancee ORDER BY hackerearth_ score ");

echo "<table border='1'>
<tr>
<th>rollno</th>
<th>name</th>
<th>branch</th>
<th>passout_year</th>
<th>hackerearth_ score</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['rollno'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['passout_year'] . "</td>";
echo "<td>" . $row['hackerearth_ score'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
</body>
</html>