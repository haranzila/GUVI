<?php
 require_once '../vendor/autoload.php';

 $redis=new Predis\Client();

 echo $redis->ping();


 /*$redis->connect('127.0.0.1',6379);

 echo "connection to server sucessful";

 echo "Server is running ".$redis->ping();*/

 $redis->set("SONA","GOLD");

 echo "Stored string in redis:: " .$redis->get("SONA"); 








?>
