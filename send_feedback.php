<?php include 'head.php'; ?>
    <body>
        <?php include 'top_nav.php'; ?>
        <div class="container">
            <h1 class="contact_heading">Contact Us</h1>
            <p class="contact">If you have any questions regarding membership, conferences, sponsorship, or anything else, feel free to contact us. You can either email your inquiries to <a href="mailto:sase@stevens.edu">sase@stevens.edu</a> or fill out the form below. </p>
            <form id="feedback" action="send_feedback.php" method="post">
                <B>Name:</B> 
                <input type="text" name="name"> 
                <B>Email:</B> 
                <input type="email" name="email"> <BR> 
                <B>Message:</B> <BR>
                <textarea name="message" form="feedback" rows="10" cols = "65" ></textarea> <BR>
                <input type="submit">
            </form>
			<?php 
				$name = addslashes(strip_tags($_POST["name"]));
				$to = "ckkim808@gmail.com";
				$subject = "SASE Website Inquiry from ".addslashes(strip_tags($_POST["name"]));
				$message = "Message from: ".addslashes(strip_tags($_POST["email"]))."\n\n".addslashes(strip_tags($_POST["message"]));
				$ret = mail($to, $subject, $message); 
				if($ret !== FALSE)
					echo "<p>Feedback sent. We will respond to your email shortly.</p>";
				else
					echo "<p>Could not send email.</p>";
			?>
        </div><!-- /.container -->
        <?php include 'import_scripts.php'; ?> 
  </body>
</html>
