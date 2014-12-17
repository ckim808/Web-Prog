<?php

echo(' Sorry, your user level is not high enough to access this page. You are being redirected to your last location.  

	<script type="text/javascript">
		<!--
		function Redirect()
		{
			history.go(-2);
		}

		document.write("You will be redirected to main page in 10 sec.");
		setTimeout("history.go(-1)", 3000);
//-->
	</script>
	'
	);

?>