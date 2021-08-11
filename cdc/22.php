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

$result = mysqli_query($conn,("SELECT * FROM `performancee` WHERE passout_year=2022 ORDER BY total_score DESC "));

echo "<table border='1'>
<tr>
<th>rollno</th>
<th>name</th>
<th>branch</th>
<th>passout_year</th>
<th>codechef_score</th>
<th>hackerrank_score</th>
<th>codeforce_score</th>
<th>hackerearth_score</th>
<th>total_score</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['rollno'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['passout_year'] . "</td>";
echo "<td>" . $row['codechef_score'] . "</td>";
echo "<td>" . $row['hackerrank_score'] . "</td>";
echo "<td>" . $row['codeforce_score'] . "</td>";
echo "<td>" . $row['hackerearth_ score'] . "</td>";
echo "<td>" . $row['total_score'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>

</body>
</html>