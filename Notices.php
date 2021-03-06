<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SU Web</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        .username{
            font-size: 16px;
            text-align: center;
            position: relative;
            top:14px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img alt="Brand" src="./images/logo.jpg" height="25" width="25"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="Grievances.php">Grievances</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mess<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">RTI<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="Notices.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notices<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="Notices.html">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CrowdFunding<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Freelancer<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user'];?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </li>
                <li><a href="index.php">Log Out</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="row">
    <div class="col-md-2 col-sm-3 col-xs-4">
        <br><br><br><br>
        <ul class="list-group">
            <li class="list-group-item"><button class="btn btn-primary btn-block">Option 1</button></li>
            <li class="list-group-item"><button class="btn btn-primary btn-block">Option 1</button></li>
            <li class="list-group-item"><button class="btn btn-block btn-primary">Option 1</button></li>
            <li class="list-group-item"><button class="btn btn-block btn-primary">Option 1</button></li>
        </ul>
    </div>
    <div class="col-md-7 col-md-push-1" id="complain">
        <br><br><br>

    </div>
</div>
<script>

var myObj, i, j, x = "";
myObj = {

    "notices": [
        { "ID":354343624,"club_Department":"DOSM","Heading":"DOSM induction","Body":"Text for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievance grievanceText for grievance grievanceText for grievance","uploader":"Manas Bansal","Contact":[{"Name":"Manas Bansal","Phone":"773987349"},{"Name":"Nitish Reddy","Phone":"4948779598"}]},
        { "ID":354343624,"club_Department":"DOSM","Heading":"DOSM induction","Body":"Text for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievance grievanceText for grievance grievanceText for grievance","uploader":"Manas Bansal","Contact":[{"Name":"Manas Bansal","Phone":"773987349"},{"Name":"Nitish Reddy","Phone":"4948779598"}]},
        { "ID":354343624,"club_Department":"DOSM","Heading":"DOSM induction","Body":"Text for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievance grievanceText for grievance grievanceText for grievance","uploader":"Manas Bansal","Contact":[{"Name":"Manas Bansal","Phone":"773987349"},{"Name":"Nitish Reddy","Phone":"4948779598"}]},
        { "ID":354343624,"club_Department":"DOSM","Heading":"DOSM induction","Body":"Text for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievance grievanceText for grievance grievanceText for grievance","uploader":"Manas Bansal","Contact":[{"Name":"Manas Bansal","Phone":"773987349"},{"Name":"Nitish Reddy","Phone":"4948779598"}]},
        { "ID":354343624,"club_Department":"DOSM","Heading":"DOSM induction","Body":"Text for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievance grievanceText for grievance grievanceText for grievance","uploader":"Manas Bansal","Contact":[{"Name":"Manas Bansal","Phone":"773987349"},{"Name":"Nitish Reddy","Phone":"4948779598"}]}
    ]
}

for (i in myObj.notices) {
    x="";
    x += "<h3>" +"<u>"+ myObj.notices[i].Heading +"</u>"+"</h3>";
      x +="<h4>"+"<u>"+ myObj.notices[i].club_Department+"</u>"+"</h4>" ;
        x +="<h4>"+"<u>Uploader:</u>"+ myObj.notices[i].uploader+"</h4>" ;
          x += myObj.notices[i].Body+ "<br>";
    for (j in myObj.notices[i].Contact) {

        x += "<h5>"+ "contact :-"+myObj.notices[i].Contact[j].Name+"</h5>" ;
          x += "<h5>"+"Ph :-"+ myObj.notices[i].Contact[j].Phone+"</h5>"
    }


      var div1=document.createElement('div');
      div1.innerHTML=x;
      div1.setAttribute("class","bg-danger")
      //document.getElementById("demo").innerHTML = x;
      document.getElementById("complain").appendChild(div1);
}


</script>




<!-- Latest compiled and minified CSS -->

</body>
</html>
