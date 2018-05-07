<?php

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
$dd_no = $_POST["dd_no"];
$dd_bankname = $_POST["dd_bankname"];
$dd_dateofissue = $_POST["dd_dateofissue"];
$online_tr_no = $_POST["online_tr_no"];
$online_amount = $_POST["online_amount"];
$online_dateofissue = $_POST["online_dateofissue"];
$hostel = $_POST["hostel"];






// "fullName =" . $fullName ."\n".
// "dob =" . $dob ."\n".
// "fathername =" . $fathername ."\n".
// "fatheroccu =" . $fatheroccu ."\n".
// "mothername =" . $mothername ."\n".
// "motheroccu =" . $motheroccu ."\n".
// "famincome =" . $famincome ."\n".
// "address =" . $address ."\n".
// "pin =" . $pin ."\n".
// "Telephone =" . $Telephone ."\n".
// "mobile =" . $mobile ."\n".
// "paddress =" . $paddress ."\n".
// "ppin =" . $ppin ."\n".
// "pTelephone =" . $pTelephone ."\n".
// "pmobile =" . $pmobile ."\n".
// "xuniversity =" . $xuniversity ."\n".
// "xsubjects =" . $xsubjects ."\n".
// "xyear =" . $xyear ."\n".
// "xmarks =" . $xmarks ."\n".
// "xiiuniversity =" . $xiiuniversity ."\n".
// "xiisubjects =" . $xiisubjects ."\n".
// "xiiyear =" . $xiiyear ."\n".
// "xiimarks =" . $xiimarks ."\n".
// "otheruniversity =" . $otheruniversity ."\n".
// "othersubjects =" . $othersubjects ."\n".
// "otheryear =" . $otheryear ."\n".
// "othermarks =" . $othermarks ."\n".
// "program =" . $program ."\n".
// "course =" . $course ."\n".
// "paymentmethod =" . $paymentmethod ."\n".
// "dd_no =" . $dd_no ."\n".
// "dd_bankname =" . $dd_bankname ."\n".
// "dd_dateofissue =" . $dd_dateofissue ."\n".
// "online_tr_no =" . $online_tr_no ."\n".
// "online_amount =" . $online_amount ."\n".
// "online_dateofissue =" . $online_dateofissue ."\n".
// "hostel =" . $hostel ."\n".


// the message
$msg = "fullName =" . $fullName ."\n".
"dob =" . $dob ."\n".
"fathername =" . $fathername ."\n".
"fatheroccu =" . $fatheroccu ."\n".
"mothername =" . $mothername ."\n".
"motheroccu =" . $motheroccu ."\n".
"famincome =" . $famincome ."\n".
"address =" . $address ."\n".
"pin =" . $pin ."\n".
"Telephone =" . $Telephone ."\n".
"mobile =" . $mobile ."\n".
"paddress =" . $paddress ."\n".
"ppin =" . $ppin ."\n".
"pTelephone =" . $pTelephone ."\n".
"pmobile =" . $pmobile ."\n".
"xuniversity =" . $xuniversity ."\n".
"xsubjects =" . $xsubjects ."\n".
"xyear =" . $xyear ."\n".
"xmarks =" . $xmarks ."\n".
"xiiuniversity =" . $xiiuniversity ."\n".
"xiisubjects =" . $xiisubjects ."\n".
"xiiyear =" . $xiiyear ."\n".
"xiimarks =" . $xiimarks ."\n".
"otheruniversity =" . $otheruniversity ."\n".
"othersubjects =" . $othersubjects ."\n".
"otheryear =" . $otheryear ."\n".
"othermarks =" . $othermarks ."\n".
"program =" . $program ."\n".
"course =" . $course ."\n".
"paymentmethod =" . $paymentmethod ."\n".
"dd_no =" . $dd_no ."\n".
"dd_bankname =" . $dd_bankname ."\n".
"dd_dateofissue =" . $dd_dateofissue ."\n".
"online_tr_no =" . $online_tr_no ."\n".
"online_amount =" . $online_amount ."\n".
"online_dateofissue =" . $online_dateofissue ."\n".
"hostel =" . $hostel ;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
// mail("kshtjtomar40@gmail.com","Website Application - " . $fullName ,$msg);

$to = 'rajmani57@gmail.com';  
$subject = 'Website Application - '.$fullName;
$header = 'Content-type: text/plain; charset="utf-8"' . "\r\n" .
                    'From: Admin@npdsmanigroup.com' . "\r\n" .
                    'Reply-To: Admin@npdsmanigroup.com' . "\r\n";

$mailsent = mail($to, $subject, $msg, $header);
echo "this is mail sent---> " . $mailsent;

echo "\n\n\n&nbsp;&nbsp;&nbsp;Thank you.\nYour Appication has been submitted succesfully.\n\nPlease go back to the previous page.";
?>