
<?php
include('connection.php');

if(isset($_POST['submit']))
{
	
	
$comments = $_POST['feed'];
$result = $mysqli->query("INSERT INTO `feedback` (`feedback`) VALUES ('$comments')");

	if($result)
	{
		header('Location: index.php');
	}
	else
		echo mysqli_error();
}
else
	echo 'Not Submitted';
?>


