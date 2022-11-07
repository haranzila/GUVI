<?php
class mydetail
{
    public $name;
    public $age;
    public $email;

}

$myObj=new mydetail();

$myObj->name="Hari";
$myObj->age=22;
$myObj->email="Hari@gmail.com";

$myJSON = json_encode($myObj);

echo $myJSON;
?>