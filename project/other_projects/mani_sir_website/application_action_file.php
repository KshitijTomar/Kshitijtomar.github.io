<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

	require 'phpmailer/PHPMailerAutoload.php';

	function sendemail($to , $from, $fromName, $body, $attachment){
		$mail = new PHPMailer();
		$mail->setFrom($from,$fromName);
		$mail->addAddress($to);
		$mail->addAttachment($attachment);
		$mail->Subject = 'Application form - Website - ' . $fromName;
		$mail->Body = $body;
		$mail->isHTML (true);

		return $mail->send();
	}


$fullName = $_POST["fullName"];
$dob = $_POST["dob"];
$fathername = $_POST["fathername"];
$fatheroccu = $_POST["fatheroccu"];
$mothername = $_POST["mothername"];
$motheroccu = $_POST["motheroccu"];
$famincome = $_POST["famincome"];
$address = $_POST["address"];
$pin = $_POST["pin"];
$Telephone = $_POST["Telephone"];
$mobile = $_POST["mobile"];
$paddress = $_POST["paddress"];
$ppin = $_POST["ppin"];
$pTelephone = $_POST["pTelephone"];
$pmobile = $_POST["pmobile"];
$xuniversity = $_POST["xuniversity"];
$xsubjects = $_POST["xsubjects"];
$xyear = $_POST["xyear"];
$xmarks = $_POST["xmarks"];
$xiiuniversity = $_POST["xiiuniversity"];
$xiisubjects = $_POST["xiisubjects"];
$xiiyear = $_POST["xiiyear"];
$xiimarks = $_POST["xiimarks"];
$otheruniversity = $_POST["otheruniversity"];
$othersubjects = $_POST["othersubjects"];
$otheryear = $_POST["otheryear"];
$othermarks = $_POST["othermarks"];
$program = $_POST["program"];
$course = $_POST["course"];
$paymentmethod = $_POST["paymentmethod"];

if(isset($_POST["dd_no"])){ $dd_no = $_POST["dd_no"]; } else{ $dd_no = "";}
if(isset($_POST["dd_bankname"])){ $dd_bankname = $_POST["dd_bankname"]; } else{ $dd_bankname = "";}
if(isset($_POST["dd_dateofissue"])){ $dd_dateofissue = $_POST["dd_dateofissue"]; } else{ $dd_dateofissue = "";}
if(isset($_POST["online_tr_no"])){ $online_tr_no = $_POST["online_tr_no"]; }else{ $online_tr_no = "";}
if(isset($_POST["online_amount"])){ $online_amount = $_POST["online_amount"]; } else{ $online_amount = "";}
if(isset($_POST["online_dateofissue"])){ $online_dateofissue = $_POST["online_dateofissue"]; } else{ $online_dateofissue = "";}

$hostel = $_POST["hostel"];


// the message
$msg = "fullName =" . $fullName ."<br>".
"dob =" . $dob ."<br>".
"fathername =" . $fathername ."<br>".
"fatheroccu =" . $fatheroccu ."<br>".
"mothername =" . $mothername ."<br>".
"motheroccu =" . $motheroccu ."<br>".
"famincome =" . $famincome ."<br>".
"address =" . $address ."<br>".
"pin =" . $pin ."<br>".
"Telephone =" . $Telephone ."<br>".
"mobile =" . $mobile ."<br>".
"paddress =" . $paddress ."<br>".
"ppin =" . $ppin ."<br>".
"pTelephone =" . $pTelephone ."<br>".
"pmobile =" . $pmobile ."<br>".
"xuniversity =" . $xuniversity ."<br>".
"xsubjects =" . $xsubjects ."<br>".
"xyear =" . $xyear ."<br>".
"xmarks =" . $xmarks ."<br>".
"xiiuniversity =" . $xiiuniversity ."<br>".
"xiisubjects =" . $xiisubjects ."<br>".
"xiiyear =" . $xiiyear ."<br>".
"xiimarks =" . $xiimarks ."<br>".
"otheruniversity =" . $otheruniversity ."<br>".
"othersubjects =" . $othersubjects ."<br>".
"otheryear =" . $otheryear ."<br>".
"othermarks =" . $othermarks ."<br>".
"program =" . $program ."<br>".
"course =" . $course ."<br>".
"paymentmethod =" . $paymentmethod ."<br>".
"dd_no =" . $dd_no ."<br>".
"dd_bankname =" . $dd_bankname ."<br>".
"dd_dateofissue =" . $dd_dateofissue ."<br>".
"online_tr_no =" . $online_tr_no ."<br>".
"online_amount =" . $online_amount ."<br>".
"online_dateofissue =" . $online_dateofissue ."<br>".
"hostel =" . $hostel ;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);


$file = "attachment/" . basename($_FILES['attachment']['name']);

// echo "<pre>";
// print_r($_FILES);

if(sendemail('kshtjtomar40@gmail.com' , 'user@npdsmanigroup.com' , $fullName , $msg , $file)){

echo "<br><br><br><b>Thank you.</b><br>Your Appication has been submitted succesfully.<br><br>Please go back to the previous page.";
}
?>




</body>
</html>