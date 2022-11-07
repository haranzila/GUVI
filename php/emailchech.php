<?php
 header("Access-Control-Allow-Origin: *"); 
 $user = $_GET['email'];
 
function check($n)
 {
    


  $servername = "localhost";
  $usname = "root";
  $pass= "";
  $dbname = "guvi";
  $conn = new mysqli($servername, $usname, $pass, $dbname);
  // Check connection
   if ($conn->connect_error) 
    {
          die("Connection failed: " . $conn->connect_error);

    }


    $sql = "SELECT * FROM userprofile where email='$n'";
    // echo $sql;
    $ans=true;

    if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
 // printf("Result set has %d rows.\n",$rowcount);
  // Free result set

  if($rowcount>0)
      $ans=true;
   else
       $ans=false;
   
   mysqli_free_result($result);
  }
  mysqli_close($conn);

   return $ans;

 } 
   
if(check($user))
{

    echo "<p style=\"color:red;\">Email id Already taken ! please try someother name!</p>"; 
  
      
}
else
{
    echo "<p style=\"color:green;\">Valid email id!</p>"; 
}

?>