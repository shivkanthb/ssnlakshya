<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:adindex");
}
?>
<html>
<title>My Admin</title>
<head>
<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body>
<div class="hero-unit">
	
<p class="lead"></p> <div class="span2 pull-right"><a href="logout.php" class="btn btn-large btn-success">Log out</a></div></br>
<div class="row-fluid">
	<h1>ADMIN PANEL</h1></br></br></br></br>
	<div class="span5">
  <p class="lead">Post to Bulletin board</p>
  <p>
  </br></br>
<form action="insert.php" method="post" class="input-large search-query">
Message: <textarea rows="10" cols="40" name="data"></textarea>
Signed by: <input type="text" name="sign">
<input type="submit" class="btn btn-primary btn-large">
</form>
</p>
</br></br>
<a class="btn btn-primary btn-large" href="announcements.php">
      Click here to check out the bulletin!
    </a>
</div>
<div class="span5">
</br</br>
<p class="lead">Message to all members</p></br></br>
<form action="sendmails.php" method="post" class="input-large search-query">
Message: <textarea rows="10" cols="40" name="data"></textarea>
Signed by: <input type="text" name="sign">
<input type="submit" class="btn btn-primary btn-large">
</form>
</p>
</div>
</br></br>
	</div>
	
</body>
</html>