<?php

require ('../mysqli_connect.php');
$q="SELECT nid,time,uploader_user,contact_user,contact_number,notice_body,notice_expiry_date FROM beta_notices ORDER BY time desc";
$r=@mysqli_query($dbc,$q);
$num=mysqli_num_rows($r);
if($num>0){
    while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
        $arr=array('nid' => $row['nid'], 'time'=> $row['time'],'uploader_user' => $row['uploader_user'], 'contact_user' => $row['contact_user'],'contact_number'=> $row['contact_number'],'notice_body'
        => $row['notice_body'],'notice_expiry_date' => $row['notice_expiry_date']);
        $returnarr=json_encode($arr);
        echo $returnarr;
        echo '<br>';
    }
}
mysqli_free_result($r);

?>