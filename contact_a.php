<?php 
include 'config.php';
if (isset($_POST['send'])) {
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$sql = $conn->prepare("INSERT INTO contact(fullname, email, subject, message) VALUES(?,?,?,?)");
	$sql->bind_param('ssss', $fullname, $email, $subject, $message);
	$sql->execute();
	if($sql) {
		echo "<script type=text/javascript>alert('we will get you soon back thank you for yout feedback');
		window.location.href='index.php';</script>";
	}
	else {
		echo "<script type=text/javascript> alert('Some thing went wrong...');
		window.location.href='index.php'; </script>";
	}
}
?>