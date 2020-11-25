<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods:PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type,Access-Control-Allow-Methods,  Authorization, X-Requested-With');

$data=json_decode(file_get_contents("php://input"),true);

$id= $data['uid'];
$email= $data['email'];
$name= $data['uname'];
$feedback= $data['feedback'];

include('connection.php');
$sql = "UPDATE feedback SET email='{$email}', name= '{$name}',feedback ='{$feedback}' where feedback_id={$id}";

if(mysqli_query($conn, $sql)){
    echo json_encode(array('message' => 'Record Updated.','status'=>true));
}
else{
    echo json_encode(array('message' => 'Record Not Updated.','status'=>false));
} 