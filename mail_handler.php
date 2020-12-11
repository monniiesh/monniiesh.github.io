<?php
	if(isset($_POST['send'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$information=$_POST['information'];

		$to='monniiesh22@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Mail From Portofolio';
		$message="Name :".$name."\n"."Information :"."\n\n".$information;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
