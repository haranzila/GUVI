<html>
<?php

   extract($_POST);

   if(!isset($age))
   {

?>

<body style="background-color:yellow;">
    <center>
    <form method="post" action="redisstore.php" >

      <h1>
      <?php
      echo "<h1> Accessed for localStorage and writing to redis</h1>";
        ?>
       </h1>
        <div>
        <label> Name </label>
        <input type="text" name="uname" id="uname"/> 
         </div>
         <div>
         <label> Age </label>
        <input type="text" name="age" id="age"/>
</label>
</div>
        <div>
        <label> DOB </label>
        <input type="text" name="dob" id="dob"/>
</div>
        <div>
        <label> Contact </label>
        <input type="text" name="contact" id="contact"/>
</div>

<div>
      <input type="submit" value="Writinging into Redis"/>

</div>



    <form>
   </center>
    
        
</body>

<style>
    .body {
  background-color: powderblue;
}
h1 {
  color: blue;
}
p {
  color: red;
}
</style>


<?php
   }
   else
   {
    echo "<h1> Sending the Session Data to redis server </h1>";

    require_once '../vendor/autoload.php';

    $redis=new Predis\Client();
   
    echo "<h1>". $redis->ping().", connected to backend redis server </h1>";


   $redis->set("username",$uname);

   echo "<h1> username stored in redis:: " .$redis->get("username")."</h1>"; 
   
   $redis->set("dob",$dob);

   echo "<h1> DOB stored in redis:: " .$redis->get("dob")."</h1>"; 
      
   $redis->set("age",$age);

   echo "<h1> Age stored in redis:: " .$redis->get("age")."</h1>"; 
      

   $redis->set("contact",$contact);

   echo "<h1> Contact stored in redis:: " .$redis->get("contact")."</h1>"; 
      



   }

?>



<script>
    let uname=localStorage.getItem("username");
    console.log(uname)
    let password=localStorage.getItem("password");
    let age=localStorage.getItem("age");
    let dob=localStorage.getItem("dob");
    let contact=localStorage.getItem("contact")
    
    document.getElementById('uname').value=uname;
    document.getElementById('age').value=age;
    document.getElementById('dob').value=dob;
    document.getElementById('contact').value=contact;

</script>

</html>