<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
        $sql = "select *from admin where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);    
        if($count == 1)
		{  
            
            include 'main1.php';
                        
        }  
        else
        {  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  