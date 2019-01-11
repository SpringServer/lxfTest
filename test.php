<?php
	header("Access-Control-Allow-Origin:http://10.30.29.73:63341");
    header("Access-Control-Allow-Credentials:true");
    header('Access-Control-Allow-Headers:content-type');
// 	$username = array('userName'=>123);
// 	echo json_encode($username);
    $data = file_get_contents("php://input");
    $data = json_decode($data);
    $message = array("message"=>"success");
    //echo $data->userName;
    if($data->userName==456&&$data->passWord==123){
        //  session_start();
        // $_SESSION['userName'] = $data->userName;
        session_start();
        $_SESSION["userName"]=$data->userName;
        echo json_encode($message);
    }else{
        echo 2;
    }
    //$message = array("msg"=>"success");
  
?>