<?php
$fullname=$_POST['name2'];
$email=$_POST['mail-id2'];
$contact=$_POST['mobile-no2'];
$messages=$_POST['message2'];
 
 
//  $url = 'https://teleduce.corefactors.in/lead/apiwebhook/bf93ac7a-8037-4ff8-950a-5d7e99fee52b/Website/';
//  $ch = curl_init($url);
//  $data = array(
//  "message" => $messages,
//  "contact" => $contact,
//  "fullname" => $fullname,
//  "email" => $email
//  );
//  $dataEncoded = json_encode($data);
//  print_r($dataEncoded);
//  curl_setopt($ch, CURLOPT_POST, 1);
//  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.2;
//  en-US; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7');
//  curl_setopt($ch, CURLOPT_POSTFIELDS, $dataEncoded);
//  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
//  $result = curl_exec($ch);



$to = "rohanvyas007@gmail.com";
$subject = "Lead Enquiry MagentoGuru";	
$headers = "From: Lead Enquiry<$email>\r\n";
$headers .='Reply-To: '. $to . "\r\n" ;
$headers .='X-Mailer: PHP/' . phpversion();
$headers .= "Return-Path:  $to\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message = '<html><body>';
$message .= "Enquiry Details:-<br /><br /> ".
"<strong>"."Name:"."</strong>"."<br />".$fullname."<br /><br />".
"<strong>"."Email:"."</strong>"."<br />".$email."<br /><br />".
"<strong>"."Contact No:"."</strong>"."<br />".$contact."<br /><br />".
"<strong>"."Message:"."</strong>"."<br />".$messages."<br /><br />".
 $message .= '</body></html>';
$sentmail = mail($to,$subject,$message,$headers);

if($sentmail)
{


//$_SESSION['result'] = $result; 

echo "<script>
        var timer = setTimeout(function() {
            window.location='thank-you.php'
        }, 1000);
    </script>";
  
 

}



else

{


echo "<div class='alert alert-danger'>Something went wrong!</div>";	



}


?>