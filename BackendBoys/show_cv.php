<?php
require('mysqli_connect.php');
session_start();
$id=$_GET['id'];
//echo $id;
$query = "SELECT * from student_data WHERE id='$id'";
$r = @mysqli_query($dbc, $query);
echo gettype($r);
while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)) {
echo $row['id'];
    echo $row['first_name'];

}
?>