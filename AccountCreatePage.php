<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="Utils/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Utils/signin.css" rel="stylesheet">

    <link href="Utils\facebox.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="Utils\faceplant.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="myStylesheet.css" rel="stylesheet" type="text/css" />
    <link href="Utils/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="Utils/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="Utils\jquery.js" type="text/javascript"></script>
    <script src="Utils\facebox.js" type="text/javascript"></script>
    <script src="Utils/bootstrap.min.js"></script>

    <script>

    function ajax_post(loc,sqlName,dispLoc)
    {
    var hr = new XMLHttpRequest();
    var url = "createCheck.php";

    var dataLoc = document.getElementById(loc).value;


    var vars = "data="+dataLoc+"&loc="+sqlName;

    hr.open("POST", url, true);
   
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById(dispLoc).innerHTML = return_data;
        }
    }

    hr.send(vars); // Actually execute the request

    }
</script>


<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

  </head>

  <body>


    <div class="container">

      <form class="form-signup" role="form" action="createAccount.php" method="post">

        <label for="username">Name</label>
        <INPUT type="text" name="name" placeholder="Name" class="form-control" required>
            <br>
            <label for="inputEmail">Email Address</label>
            <input type="email" name ="email" id="inputEmail" onblur="ajax_post('inputEmail','email','dispLoc')"class="form-control" placeholder="Email address" required autofocus >
            <div id="dispLoc"><b></b></div>
            <br>
            <br>
            <label for="password" >Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <br>
            <label for="securityQuestion" >Security Question</label>
            <br>
            <br>
            <select name="securityQuestion">
             <option value="What is the name of your best friend?">What is the name of your best friend?</option>
             <option value="What is the name of your best friend?">What is the name of your pet?</option>
             <option value="What city were you born in?">What city were you born in?</option>
         </select>
         <br>
         <br>
         <label for="securityAns" class="sr-only">Security Answer</label>
         <input type="text" name="securityAns" class="form-control" placeholder="Answer" required>
         <br>

         <INPUT type="submit" name="submit" value="GO!"/>

</form>

</div> <!-- /container -->

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
