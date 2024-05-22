<?php


header('access-control-allow-origin:*');
header('Content-Type: application/json'); 
header('Access-Control-Allow-Methods: PUT');
header('access-control-allow-headers: content-type, access-control-allow-headers,authorization, x-request-with');

include('function.php'); 

$requestMethod = $_SERVER["REQUEST_METHOD"];

if ($requestMethod == "PUT") {

        $inputData = json_decode(file_get_contents("php://inputs"),true);

        if(empty($inputData)){

           $updateUsers = updateUsers($_POST, $_GET);
}

    else{

        $updateUsers= updateUsers($inputData, $_GET);
    }

    echo $updateUsers;
}
else
{
    $data=[
        'message'=>$requestMethod. ' method not allowed'
    ];
    echo json_encode($data);

}


?>