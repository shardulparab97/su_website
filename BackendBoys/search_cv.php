<?php
require('mysqli_connect.php');
$errors = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if (empty($_POST['first_name'])) {
        $errors[] = 'You forgot to enter first name';
    } else {
        $fn = mysqli_real_escape_string($dbc,trim($_POST['first_name']));
    }

    if (empty($_POST['last_name'])) {
        $errors[] = 'You forgot to enter last name';
    } else {
        $ln = mysqli_real_escape_string($dbc,trim($_POST['last_name']));
    }

    if (empty($errors)) {
//$query = "SELECT id from student_data WHERE first_name LIKE '%$fn%' AND last_name='%$ln%'";
        $query = "SELECT * from student_data WHERE first_name LIKE '%$fn%' OR last_name='%$ln%'";
        $r = @mysqli_query($dbc, $query);
        $bg='#eeeeee';
        //$row=mysqli_fetch_array($r,MYSQLI_ASSOC);
        //echo gettype($row);
        $num=mysqli_num_rows($r);
        if($num>0){
            echo 'These are the users found:';
            echo '<table>';
            while( $row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
                $bg=($bg=='#eeeeee')?'#ffffff':'#eeeeee';
                //mysqli_fetch_row($r) same as mysqli_fetch_array($r,MYSQLI_NUM)
                echo '<tr bgcolor="'.$bg.'">
            
            <td align="left"><a href="show_cv.php?id='.$row['id'].'">Open the CV</a></td>
            <td align="left">' . $row['last_name'] . '</td>
            <td align="left">' . $row['first_name'] . '</td>
            <td align="left">' . $row['branch'] . '</td>
           
            </tr>';
            }
            echo '</table>';
            //session_start();
            //$_SESSION['search_id']=$row[0];
            //echo $_SESSION['search_id'];
            // header('Location:show_cv.php');

        }
        else{
            echo "User not found! Please try again.";
        }
    }
    else {
        echo "The following errors have occured <br>";
        foreach ($errors as $msg) {
            echo $msg . "<br>";}

    }
}
?>


<html>
<form method="post" action="search_cv.php">
    <p>First Name:<input type="text" name="first_name" value="<?php if(isset($_POST['first_name']))
            echo $_POST['first_name'];?>"></p>

    <p>Last Name:<input type="text" name="last_name" value="<?php if(isset($_POST['last_name']))
            echo $_POST['last_name'];?>"></p>
    <input type="submit" name="submit" value="Submit">
</form>
</html>