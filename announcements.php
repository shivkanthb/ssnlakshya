<html>
<title>Bulletin display</title>
<head>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<style type="text/css">
body {
        padding-top: 60px;
        padding-bottom: 40px;
		margin-right:50px;
		margin-left:50px;
      }
      .jumbotron {
          margin: 80px 0;
          text-align: center;
        }
        .jumbotron h1 {
          font-size: 70px;
          line-height: 1;
        }
        .jumbotron .lead {
          font-size: 24px;
          line-height: 1.25;
        }
        .jumbotron .btn {
          font-size: 21px;
          padding: 14px 24px;
        }
	  
</style>
</head>
<body>
	 <div class="jumbotron">
<h1>Bulletin Board</h1>
<p class="lead">SSN Lakshya</p>
</div>

</br></br></br>
<?php
$con=mysqli_connect("localhost","root","","newtest");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$sql="SELECT * FROM `database` ORDER BY id DESC";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result))
  { ?>
	  <div class="hero-unit">
		  <?
	  
  echo $row['id'] . ". </br></br>" . $row['data'] . "</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ->" . $row['sign'] . "  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        " . $row['datetime'];
  echo "</br></br>"; 
  ?>
</div>
<?
  }
echo "</table>";

mysqli_close($con);
?>
</br></br>
<a class="btn btn-primary btn-large" href="home.html">
      Back to homepage
    </a>
</body>
</html>