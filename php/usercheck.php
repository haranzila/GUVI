<?php
 header("Access-Control-Allow-Origin: *"); 
 $user = $_GET['username'];

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

    $stmt = $conn->prepare("SELECT * FROM userprofile where username=?");
    $stmt->bind_param("s", $n);
    
    $stmt->execute();

  
    $ans=true;

    $result=$stmt->get_result();

    $rowcount=mysqli_num_rows($result);
 
  if($rowcount>0)
      $ans=true;
   else
       $ans=false;
   
   mysqli_free_result($result);
 
 $stmt->close();
  mysqli_close($conn);

   return $ans;

 } 
   
if(check($user))
{

    echo "<br><h4 style=\"color:green;\">USER ALREADY TAKEN</h4>"; 
  
      
}

 ?>