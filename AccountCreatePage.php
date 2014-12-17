<?php include 'head.php'; ?>
    <?php include 'top_nav.php'; ?>
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
            <label for="password" >Password</label>
            <input type="password" pattern="^(?=.+\d).{4,8}$" name="password" class="form-control" placeholder="Password" required>
            <br>
            <INPUT type="submit" name="submit" value="GO!"/>

        </form>

    </div> 

    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
