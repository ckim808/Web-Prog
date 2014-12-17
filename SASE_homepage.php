<link href="myStylesheet.css" rel="stylesheet" type="text/css" />
<?php include 'head.php'; ?>
    <body>  
        <?php include 'top_nav.php'; ?>
         <div id="top" class="container">
        <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <div class="container well well-main">
            <h1 class="text-center">Welcome to SASE at Stevens!</h1>
          </div>
        </div>
        </div>
        </div>
          <!-- START THE FEATURETTES -->

        <div class="row">
            <div class="col-sm-5 col-sm-offset-3 col-md-6 col-md-offset-2 main">  
            <hr class="featurette-divider">

              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">Come to our GBM on Thursday! <span class="text-muted">BC 210 @ 9PM.</span></h2>
                  <p class="lead">We will discuss upcoming fundraisers, as well as events that we have planned for next semester. Bring friends as well!</p>
                </div>
                <div class="col-md-5">
                  <img class="featurette-image img-responsive" src="images/flask.png" alt="SASE flask">
                </div>
              </div>

              <hr class="featurette-divider">

              <div class="row featurette">
                <div class="col-md-5">
                  <img class="featurette-image img-responsive" src="images/sase_NE.jpg" alt="NE coordinators">
                </div>
                <div class="col-md-7">
                  <h2 class="featurette-heading">Are you excited for Regional Conference 2015?</h2>
                  <p class="lead">The SASE Northeast Regional Conference will be held at Boston University this Spring 2015! We are proud to announce that SASE Stevens will be cohosts with Boston University for this event! Click <a href="http://saseneregion.weebly.com/2015-regional-conference.html"> here </a> to find out more. </p>
                </div>
              </div>

              <hr class="featurette-divider">

              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">Scavenger Hunt with CCNY and NYU! <span class="text-muted">Rockefeller Center 11/22 12PM</span></h2>
                  <p class="lead">We will have a scavenger hunt at Rockefeller Center <b>this</b> Saturday at 12PM. See the Facebook event <a href="https://www.facebook.com/events/390814677737374/">here</a> for more info. Come out and connect with the other chapters including our sister chapter, CCNY! </p>
                </div>
                <div class="col-md-5">
                  <img class="featurette-image img-responsive" src="images/ccny.jpg" alt="CCNY logo">
                </div>
              </div>

              <hr class="featurette-divider">

              <!-- /END THE FEATURETTES -->

            </div><!-- /.container -->
            <div id="main_polls" class="col-sm-4 col-md-3">
                <?php 
                    // connect to database
                    include("databaseClassMySQLi.php");
                    $db = new database();
                    $db->connect();	

                    // get the polls that are already in the database
                    $query = "SELECT * FROM poll";
                    $res = $db->send_sql($query);
                    
                    $polls = array();
                    while($row = $res->fetch_assoc()) 
				    {
                        $poll = array();
                        unset($pollid, $pollname, $polldesc, $poll);
                        $poll["id"] = $row["id_poll"];
				        $poll["pollname"] = $row["pollName"];
				        if(array_key_exists("pollDesc", $row))
				            $poll["polldesc"] = $row["pollDesc"];
                        $polls[] = $poll;
                    }
                    foreach($polls as $elem) {
                        $query = "SELECT * FROM poll_option WHERE id_poll=".$elem["id"];
                        $res = $db->send_sql($query);
                        echo '
                            <div class="panel panel-primary">
                                <div class="panel-heading">'.$elem["pollname"].'</div>
                                    <form id="voting" action="vote.php" method="POST">';
                        while($row = $res->fetch_assoc()) 
				        {
                           echo '<input type="radio" name="choice" value="'.$row["id_pollOption"].'" checked required >'.$row["optionText"].'<br>';  
                        }
                        echo '
                        <br><INPUT type="submit" name="submit" value="Vote"/>';
                        echo '</form></div><br>';
                    }
                    
                ?>
            </div>
        </div>
        <?php include 'import_scripts.php'; ?>
  </body>
</html>