<?php
//$post_data = json_decode(file_get_contents('php://input'), true);
// the directory "data" must be writable by the server
//$name = $post_data['filename'].".csv";
//$data = $post_data['filedata'];
$name = "data/".$_POST['filename'].".csv";
$data = $_POST['filedata'];
// write the file to disk
echo "Welcome ". $name ."!"; // Success Message
file_put_contents($name, $data);
?>
