<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['update_stud_data']))
{
    $roll = $_POST['roll'];
    $namee = $_POST['namee'];
    $branchh = $_POST['branchh'];
    $p = $_POST['p'];
    $c = $_POST['c'];
    $h = $_POST['h'];
    $cs = $_POST['cs'];
    $hs = $_POST['hs'];
    $t = $_POST['t'];

    $query = "UPDATE performancee SET rollno='$roll', name='$namee', branch='$branchh',passout_year='$p',codechef_score='$c',hackerrank_score='$h',codeforce_score='$cs',hackerearth_score='$hs',total_score='$t' WHERE rollno='$roll' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: index.php");
    }
}

?>