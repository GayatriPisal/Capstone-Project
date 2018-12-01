<?php
$servername = 'aa1lfewpz57tgbp.cxyxhcvs48cj.us-east-2.rds.amazonaws.com';
$user = 'masterDB';
$pass = 'yashika0504';
$dbname = 'ebdb';
$conn = new mysqli($servername, $user, $pass, $dbname) or die("Could not connect: ");
$rs = @mysqli_select_db($conn, $dbname) or die("Sorry - cannot find the database"); 
if(mysqli_connect_errno($conn))
{
		echo "Failed to connect";
}
?>																