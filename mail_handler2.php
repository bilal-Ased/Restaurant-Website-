<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$time=$_POST['time'];
		$person=$_POST['person'];
		$day=$_POST['day'];
		$msg=$_POST['msg'];

		$to='jayj95733@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Time :".$time."\n"."Person :".$person."\n"."Day :".$day."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$name;

		if(mail($to, $subject, $message, $headers)){
			echo "<script>alert('Thank you for  contacting us will get back to you shortly');</script>"; 	
		}
		else{
			echo "Something went wrong!";
		}
	}
?>