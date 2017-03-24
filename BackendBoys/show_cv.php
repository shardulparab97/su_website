<?php
require('mysqli_connect.php');
session_start();
$id=$_GET['id'];
//echo $id;
$query = "SELECT * from student_data WHERE id='$id'";
$r = @mysqli_query($dbc, $query);
//echo gettype($r);
while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)) {
    echo 'ID:'.$row['id'].'<br>';
    echo 'First Name:'.$row['first_name'].'<br>';
    echo 'Last Name:'.$row['last_name'].'<br>';
    echo 'Branch:'.$row['branch'].'<br>';
    echo 'Objective:'.$row['objective'].'<br>';
    echo 'Clubs:'.$row['clubs'].'<br>';
    echo 'Departments: '.$row['departments'].'<br>';

    echo '<a href="pdfstuff.php?id='.$row['id'].'"><button>Download the CV as pdf</button></a>';
}


?>


