<?php
//require ('../mysqli_connect.php');
class CV_Functions{
    public $id="";
    public $username="";
    public $phone="";
    public $highlights="";
    public $email="";
    public $about="";
    public $official="";
    public $freelancer="";

    function search_cv(){}
    function show_cv($dbc,$username){
        $str="";
        $q="SELECT * FROM cv_data WHERE username='$username'";
        $r=mysqli_query($dbc,$q);
        while ($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
            $this->username=$row['username'];
            $this->highlights=$row['highlights'];
            $this->email=$row['email'];
            $this->about=$row['about'];
            $this->official=$row['official'];
            $this->freelancer=$row['freelancer'];
        }
        $str=json_encode($this);
        echo $str;
    }

    function branch_check($id){

    }
}
//$cv=new CV_Functions();
//$cv->show_cv($dbc,'sj');
?>