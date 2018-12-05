<?php

require_once("../php/Factory.php");
require_once("../php/Application.php");

if (isset($_POST["page"])){
    $page=$_POST["page"];
}else{

    $page="";
}


$application = (new Factory())->createApplication();
$application->run($page);