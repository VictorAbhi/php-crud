<?php
$connection = mysqli_connect('localhost','root','','learnphp' );
$id = $_GET['id'];
echo $id;

$del_query = "DELETE FROM students WHERE id=$id";

$resp = mysqli_query($connection, $del_query);

if ($resp) {
    header('Location:index.php');
}

?>
