<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SASE Stevens</title>
        <script type="text/javascript">
			var slideshow_pics = new Array()
			slideshow_pics[0] = new Image()
			slideshow_pics[0].src = "images/sase_logo.jpg"
			slideshow_pics[1] = new Image()
			slideshow_pics[1].src = "images/SASE_wordcloud.jpg"
		</script>
    </head>
	<body>
		<?php include "top_nav.php"; ?>
        <nav id="left_nav">
        	<h1>Useful Links</h1>
            <ul>
            	<li><a href="http://www.saseconnect.org/" target="_blank">SASE National</a></li>
                <li><a href="http://saseconnect.org/conference/" target="_blank">2014 Conference</a></li>
                <h2>Other Chapters</h2>
                	<ul>
                    	<li><a href="http://sase.binghamtonsa.org/" target="_blank">SASE Binghamton</a></li>
                    </ul>
            </ul>
        </nav>
        <img src="images/sase_logo.jpg" id="slideshow" width=300 height=200/>
        <script type="text/javascript">
			var step=0
			function change_image() {
				if (!document.images)
					return
				document.getElementById('slideshow').src = slideshow_pics[step].src
				if(step<1)
					step++
				else
					step=0
				setTimeout("change_image()", 2500)
			}
			change_image()
		</script> 
    </body>
</html>
