<?php
	session_start();
if($_POST['submit']=='submit'){


	include('../newcon.php');
	include('PHPMailer.class.php');
if(isset($_SESSION['user_id'])){
	$id=$_SESSION['user_id'];
	$query="SELECT `email`,`student_name` FROM `student_table` where `std_roll_no`='$id' ";
	$data=$con->query($query);
	$row=$data->fetch_array();
	if ($row) {
		$rt=$row['email'];
		$ty=$row['student_name'];
	}
                                    

// include('../edmin/newcon.php');
		   
			
			 $to=$_POST['email'];
			 $explode_of_emails=explode(",",$to);
			//  $num_of_emails=sizeof($explodeOfEmail);
			 $mess=$_POST['ram'];
			  $pass=$_POST['pass'];
			  $sub=$_POST['sub'];
			//  echo $rt;
			// $query="SELECT * from `student_table` where `email`='$to'";
			// $data=$con->query($query);
			// $num_rows=mysqli_num_rows($data);

			if($rt){
				// $password=rand(1000,10000);
				$body=$mess	;
			$from = $rt;
			$mail = new PHPMailer();
			$mail->IsSMTP(true); // SMTP
			$mail->set('X-MSMail-Priority', 'Normal');
			$mail->addCustomHeader("X-Priority: 3");
			$mail->SMTPAuth = true;  // SMTP authentication
			$mail->IsHTML(true);
			$mail->Mailer = "smtp";
			$mail->Host = "ssl://smtp.gmail.com";
			$mail->Port = 465;
			$mail->Username = $rt;
			$mail->Password = $pass;
			$mail->SetFrom($from, $ty);
			$mail->Subject = $sub;
			$mail->MsgHTML($body);
			$address = $to;
			foreach ($explode_of_emails as $email_add) {
				# code...
				// $mail->AddAddress($address);
				$mail->AddAddress($email_add);
				// $mail->AddBCC($email_add);
			}
			$mail->AddReplyTo($rt, $ty);
	
			if (!$mail->Send())
			{
			  echo  "Oops! Something went wrong. Please try again";
			 }  
			else
			   {
			  $yu= "Your  message has been sent.";
			  header("location:../form.php?k=".$yu);
			//   $query="UPDATE `student_table` SET `pass`='$password' WHERE `email`='$to'";
			//   mysqli_query($con,$query);
			   }
			}
			else{
				echo "not a registered user";
			}
		}
		else{
			header("location:../other-login.php");
		}
	}
	else{
		header("location:../other-login.php");
	}
		   
?>