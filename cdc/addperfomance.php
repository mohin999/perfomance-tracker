<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
  	background-image:url(ipllogo2.jpg);
	background-repeat: no-repeat, repeat;
	background-size: cover;
}

* {
  box-sizing: border-box;
}


.container {
  padding: 16px;
  background-color: none;
  opacity: 0.9;
  
}
h1,p{
	  text-align:center;
	  color: #80ffff;
  }

input[type=text], input[type=password] {
  width:20%;
  padding: 15px;
  margin: 10px 600px;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
label{
margin: 30px 600px;
color: #e6f2ff;
}

/* Overwrite default styles of hr */


/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 5px 600px;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
 
  text-align: center;
}
</style>
</head>
<body>

<form action="adminaddinsert.php" method="post">
  <div class="container">
    <h1>Add Student perforamnce</h1>
    <p >Please fill </p>
    
    <label for="rollno"><b>Roll_no:</b></label>
    <input type="text" placeholder="Enter username" name="roll"  required>

     <label for="name"><b>Name:</b></label>
    <input type="text" placeholder="Enter Name" name="n"  required>

         <label for="branch"><b>Branch:</b></label>
    <input type="text" placeholder="Enter branch" name="b"  required><br>

   

        <label for="year"><b>passout_Year:</b></label>
    <input type="text" placeholder="Enter passout year" name="p"  required>

        <label for="code"><b>codechef_score:</b></label>
    <input type="text" placeholder="Enter score" name="c"  required>
     

         <label for="hacker"><b>hackerrank_score:</b></label>
    <input type="text" placeholder="Enter score" name="h"  required>

     <label for="codeforce"><b>codeforce_score:</b></label>
    <input type="text" placeholder="Enter score" name="cs"  required>

       <label for="hackerearth"><b>hackerearth_score:</b></label>
        <input type="text" placeholder="Enter score" name="hs"  required>

           <label for="Total score"><b>total_score:</b></label>
        <input type="text" placeholder="Enter Total Score" name="t"  required>

       


    
    
    

    <button type="submit" class="registerbtn">ADD</button>
  </div>
  
 
</form>

</body>
</html>
