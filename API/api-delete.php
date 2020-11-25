<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type,Access-Control-Allow-Methods,  Authorization, X-Requested-With');

$data=json_decode(file_get_contents("php://input"),true);

$user_id= $data['uid'];

include('connection.php');
$sql = "DELETE  from feedback where feedback_id={$user_id}";
$result = mysqli_query($conn, $sql);

if(mysqli_query($conn, $sql)){
    echo json_encode(array('message' => 'Record Deleted.','status'=>true));
}
else{
    echo json_encode(array('message' => 'Record Not Deleted.','status'=>false));
} 