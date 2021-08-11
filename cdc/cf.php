<html>
<style>
table{
	
	margin:150px 150px;
	
}
td{
	padding:20px;
	
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
$dbname = "performancetrack";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}  

$result = mysqli_query($conn,"SELECT * FROM performancee ORDER BY codeforce_score DESC ");

echo "<table border='1'>
<tr>
<th>rollno</th>
<th>name</th>
<th>branch</th>
<th>passout_year</th>
<th>codeforce_score</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['rollno'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['passout_year'] . "</td>";
echo "<td>" . $row['codeforce_score'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>

</body>
</html>