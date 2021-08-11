<?php

//fetch_data.php

include('connection.php');

$query = "SELECT * FROM delhicapitals ORDER BY S_no";

$statement = $connect->prepare($query);

if($statement->execute())
{
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }

 echo json_encode($data);
}

?>