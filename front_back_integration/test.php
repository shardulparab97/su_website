<?php

class test{
    function yolo(){
        echo "SU WEBSITE";
    }
}
switch ($_POST['functionname']){
    case 'yolo':
        $t=new test();
        $t->yolo();
        break;

}


?>