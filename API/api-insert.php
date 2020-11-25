<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type,Access-Control-Allow-Methods,  Authorization, X-Requested-With');

$data=json_decode(file_get_contents("php://input"),true);

$email= $data['email'];
$name= $data['uname'];
$feedback= $data['feedback'];

include('connection.php');
$sql = "INSERT into feedback(email,name,feedback) values('{$email}','{$name}','{$feedback}')";

if(mysqli_query($conn, $sql)){
    echo json_encode(array('message' => 'Record Inserted.','status'=>true));
}
else{
    echo json_encode(array('message' => 'Record Not Inserted.','status'=>false));
}