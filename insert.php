<html>
<title>Bulletin display</title>
<head>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","newtest");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
date_default_timezone_set('Asia/Calcutta');
  $datetime=date('Y-m-d h-i-s'); 

$sql="INSERT INTO `database` (`id`, `data`, `sign`, `datetime`) VALUES (NULL, '$_POST[data]', '$_POST[sign]', '$datetime')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>
<div class="hero-unit">
</br></br></br>
Do you want to add another record?
<a href="login_success.php">YES!</a>
</br></br>
Do you want to see the display board?
<a href="announcements.php">YES!</a>
</div>
</body>
</html>