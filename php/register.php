<html>
<body style="background-color:yellow;">
<?php

    extract($_POST)
?>
<h1> <center> Welcome <?php echo $_POST["username"]; ?> </center> </h1><br/>

<?php
   $servername = "localhost";
   $uname = "root";
   $pass= "";
   $dbname = "guvi";

   // Create connection
$conn = new mysqli($servername, $uname, $pass, $dbname);
// Check connection
if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO userprofile (username,email,passw) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);

$stmt->execute();

  echo "<h1><center> <style=\"color:green\";> Signup sucessful </center></h1>";
  echo "<h2><center> Click <a href=\"http://localhost/SA/login.html\">here</a> to Sign in </center></h2>";
$stmt->close();
$conn->close();
   
?>
 


</body>
</html>