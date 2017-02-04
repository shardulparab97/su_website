<?php
require ("../mysqli_connect.php");
require ('function_links.php');
switch ($_POST['functionname']){
    case 'show_cv':
        $cv=new CV_Functions();
        $cv->show_cv($dbc,$_POST['arguments']);
        break;

}


?>