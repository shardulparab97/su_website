<?php
/**
 * Created by PhpStorm.
 * User: shardul
 * Date: 3/24/2017
 * Time: 6:53 PM
 */
//session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    require('../mysqli_connect.php');
    $errors=array();
    $heading=mysqli_real_escape_string($dbc,trim($_POST['heading']));
    $body=mysqli_real_escape_string($dbc,trim($_POST['body']));
    $contact_name=mysqli_real_escape_string($dbc,trim($_POST['contact_name']));
    $contact_number=mysqli_real_escape_string($dbc,trim($_POST['contact_number']));
    $expiry_date=mysqli_real_escape_string($dbc,trim($_POST['expiry_date']));
    $uploader_user=NULL;
    $body_array=array('heading' => $heading,'body'=> $body);
    $notice_body=json_encode($body_array);
   // $notice_body.=json_encode($body);
   // echo $notice_body;
        $query="INSERT INTO beta_notices (uploader_user,contact_user,contact_number,notice_body,notice_expiry_date) VALUES ('$uploader_user','$contact_name','$contact_number','$notice_body','$expiry_date')";
        $r = @mysqli_query($dbc, $query);
        if($r){
            echo '<h1>Your notice has been uploaded.Go to view notices to see the notices</h1>';
        }
    else{
        echo '<h1>Unable to post your notice at this time.Please try later</h1>';
        echo '<p>' . mysqli_error($dbc) ;
        
    }
    mysqli_close($dbc);
    exit();
}
?>

<form method="post" action="upload_notice.php">
    Enter heading: <input type="text" name="heading"><br>
    Enter body: <input type="text" name="body"><br>
    Enter contact Name: <input type="text" name="contact_name"><br>
    Enter Contact Number:<input type="text" name="contact_number"> <br>
    Enter notice Expiry Date(optional): <input type="date" name="expiry_date"><br>
    <input type="submit" value="Submit notice">
</form>
