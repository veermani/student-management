<?php
if($_POST['submit']=='submit'){
include('../edmin/newcon.php');
include('PHPMailer.class.php');
		   
			
			$to=$_POST['email'];
			$password=$_POST['passw'];
			$query="SELECT * from `student_table` where `email`='$to'";
			$data=$con->query($query);
			$num_rows=mysqli_num_rows($data);
			if($num_rows>0){
				// $password=rand(1000,10000);
				$body="hi
				<br><br> Here id your new password".$password;
			$from = "ssardar385@gmail.com";
			$mail = new PHPMailer();
			$mail->IsSMTP(true); // SMTP
			$mail->set('X-MSMail-Priority', 'Normal');
			$mail->addCustomHeader("X-Priority: 3");
			$mail->SMTPAuth = true;  // SMTP authentication
			$mail->IsHTML(true);
			$mail->Mailer = "smtp";
			$mail->Host = "ssl://smtp.gmail.com";
			$mail->Port = 465;
			$mail->Username = "ssardar385@gmail.com";
			$mail->Password = "7739476398";
			$mail->SetFrom($from, 'Phpclass');
			$mail->Subject = 'Your new password';
			$mail->MsgHTML($body);
			$address = $to;
			$mail->AddAddress($address, $to);
			$mail->AddReplyTo('ssardar385@gmail.com', 'Phpclass');
	
			if (!$mail->Send())
			{
			  echo  "Oops! Something went wrong. Please try again";
			 }  
			else
			   {
			  echo "Your new password has been sent to your email.";
			  $query="UPDATE `student_table` SET `pass`='$password' WHERE `email`='$to'";
			  mysqli_query($con,$query);
			   }
			}
			else{
				echo "not a registered user";
			}
		}
		else{
			header("location:../edmin/other-login.php");
		}
		   
?>