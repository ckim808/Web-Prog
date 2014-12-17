<?php include 'head.php'; ?>
<body>
    <?php include 'top_nav.php'; ?>
    <div id="top" class="container">
        <h1>About Us</h1>
        
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
         <INPUT type="submit" name="submit" value="GO!"/>

</form>
        
        
    </div><!-- /.container -->
    <?php include 'import_scripts.php'; ?>
  </body>
</html>
