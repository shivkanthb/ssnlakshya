<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:adindex");
}
?>
<?php
$con=mysqli_connect("localhost","root","root","newtest");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$sql="SELECT * FROM `user`";
$result = mysqli_query($con,$sql);

function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}
$email_from = "rajeshwers93@gmail.com";
$email_subject = "News from lakshya";
$message = $_POST['data'];
$signed = $_POST['sign'];
$email_message .= "News: ".clean_string($message)."\n";
$email_message .= "Signed By: ".clean_string($signed)."\n";
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
while($row = mysqli_fetch_array($result))
  { 
	  @mail($row['email'], $email_subject, $email_message, $headers);  
	  
  }
  
  ?>
  <html>
  <head>
	  <title>News mail</title>
  </head>
  <body>
  </br>
  Mails have been sent to all!
</br>
<script type="text/javascript">
setTimeout(function () {
       window.location.href = "login_success.php"; 
    }, 3000);
</script>
</body>
</html>
	  