<?php
header("Access-Control-Allow-Origin:http://10.30.29.73:63341");
header("Access-Control-Allow-Credentials:true");
header('Access-Control-Allow-Headers:content-type');
session_start();
if(isset($_SESSION["userName"])){
    echo $_SESSION["userName"];
}else{
	echo 1;	
}