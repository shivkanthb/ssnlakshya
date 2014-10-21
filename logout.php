<?php 
session_start();
session_destroy();
?>
<html>
<head></head>
<body>
	Logout successful!
	
	<script type="text/javascript">
	setTimeout(function () {
	       window.location.href = "index.html"; 
	    }, 2000);
	</script>
</body>
</html>