<?php include 'head.php'; ?>
    <body>  
        <?php include 'top_nav.php'; ?>
         <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Welcome to SASE at Stevens!</h1>
            <p></p>
          </div>
        </div>
        </div>
        </div>
        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Example headline.</h1>
                  <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Another example headline.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>One more for good measure.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- /.carousel -->

          <!-- START THE FEATURETTES -->

        <div class="container">  
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
        <?php include 'import_scripts.php'; ?>
  </body>
</html>