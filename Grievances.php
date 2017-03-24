<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grievances</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
                    <a href="#" class="droProfilepdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notices<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user']; ?><span class="caret"></span></a>
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
        <div class="col-md-7 col-md-offset-1" id="complain">
            <h3 class="text-center">Grievance Timeline</h3>
            <form class="form-inline">
                <div class="form-group">

                    <div class="input-group col-md-push-8">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                        <input type="text" class="form-control" placeholder="Search Grievances Here!">
                        <span class="input-group-btn"><button class="btn btn-warning" type="submit">Go!</button></span>
                    </div>
                </div>
            </form>

        </div>
        <div class="col-md-3">
            <form>
                <div class="form-group">
                    <label for="grievance-input"><h4>ISSUE</h4></label>
                    <textarea rows="7" type="text" class="form-control" id="grievance-input" placeholder="Enter Grievance here, you can use tags like #mess or #room to make it contextual....."></textarea>
                    <br>
                    <div class="btn btn-success btn-lg btn-block">Submit!</div>

        </div>
    </div>
    <script>

    var myObj, i, j, x = "";
    myObj = {

        "grieveance": [
            { "ID":354343624,"Hastags":["#mess","#food"],"Heading":"Food is Bad","Body":"Text for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievance grievanceText for grievance grievanceText for grievance"},
            { "ID":354343624,"Hastags":["#mess","#food"],"Heading":"Food is Bad","Body":"Text for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievance grievanceText for grievance grievanceText for grievance" },
            { "ID":354343624,"Hastags":["#mess","#food"],"Heading":"Food is Bad","Body":"Text for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievance grievanceText for grievance grievanceText for grievance"},
            { "ID":354343624,"Hastags":["#mess","#food"],"Heading":"Food is Bad","Body":"Text for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievance grievanceText for grievance grievanceText for grievance"},
            { "ID":354343624,"Hastags":["#mess","#food"],"Heading":"Food is Bad","Body":"Text for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievanceText for grievance grievanceText for grievance grievanceText for grievance"}
        ]
    }

    for (i in myObj.grieveance) {
      x="";
        x += "<h3>" + myObj.grieveance[i].Heading + "</h3>";
          x += myObj.grieveance[i].Body+ "<br>";
        for (j in myObj.grieveance[i].Hastags) {
            x += "<a href='#'>"+ myObj.grieveance[i].Hastags[j] +"</a>"+" "+" ";
        }


          var div1=document.createElement('div');
          div1.innerHTML=x;
          div1.setAttribute("class","bg-danger")
          //document.getElementById("demo").innerHTML = x;
          document.getElementById("complain").appendChild(div1);
    }


    </script>



</body>
</html>
