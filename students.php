<?php
require_once('connect_db.php');

$connect = mysqli_connect(HOST, USER, PASS, DB) or die("Can not connect");

$content = [];

$name = $_GET['name'];

$query = "SELECT * FROM student WHERE name LIKE '%$name%'";

if($result = mysqli_query($connect,$query)){
    while($row = mysqli_fetch_assoc($result)){
        $content[] = $row;
    }
}
header('Content-type: application/json');
echo json_encode($content);

?>