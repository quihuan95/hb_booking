<?php
session_start();
// *********************
// START OF MAIN PROGRAM
// *********************

// Define Constants
// ----------------
// This is secret for encoding the MD5 hash
// This secret will vary from merchant to merchant
// To not create a secure hash, let SECURE_SECRET be an empty string - ""
// $SECURE_SECRET = "secure-hash-secret";
$SECURE_SECRET = "E89978A34FCD1E64B44DB6F063068771";

// get and remove the vpc_TxnResponseCode code from the response fields as we
// do not want to include this field in the hash calculation
$vpc_Txn_Secure_Hash = $_GET["vpc_SecureHash"];
$vpc_MerchTxnRef = $_GET["vpc_MerchTxnRef"];
$vpc_AcqResponseCode = $_GET["vpc_AcqResponseCode"];
unset($_GET["vpc_SecureHash"]);
// set a flag to indicate if hash has been validated
$errorExists = false;

if (strlen($SECURE_SECRET) > 0 && $_GET["vpc_TxnResponseCode"] != "7" && $_GET["vpc_TxnResponseCode"] != "No Value Returned") {

    ksort($_GET);
    //$md5HashData = $SECURE_SECRET;
    //khởi tạo chuỗi mã hóa rỗng
    $md5HashData = "";
    // sort all the incoming vpc response fields and leave out any with no value
    foreach ($_GET as $key => $value) {
//        if ($key != "vpc_SecureHash" or strlen($value) > 0) {
//            $md5HashData .= $value;
//        }
//      chỉ lấy các tham số bắt đầu bằng "vpc_" hoặc "user_" và khác trống và không phải chuỗi hash code trả về
        if ($key != "vpc_SecureHash" && (strlen($value) > 0) && ((substr($key, 0,4)=="vpc_") || (substr($key,0,5) =="user_"))) {
		    $md5HashData .= $key . "=" . $value . "&";
		}
    }
//  Xóa dấu & thừa cuối chuỗi dữ liệu
    $md5HashData = rtrim($md5HashData, "&");

//    if (strtoupper ( $vpc_Txn_Secure_Hash ) == strtoupper ( md5 ( $md5HashData ) )) {
//    Thay hàm tạo chuỗi mã hóa
	if (strtoupper ( $vpc_Txn_Secure_Hash ) == strtoupper(hash_hmac('SHA256', $md5HashData, pack('H*',$SECURE_SECRET)))) {
        // Secure Hash validation succeeded, add a data field to be displayed
        // later.
        $hashValidated = "CORRECT";
    } else {
        // Secure Hash validation failed, add a data field to be displayed
        // later.
        $hashValidated = "INVALID HASH";
    }
} else {
    // Secure Hash was not validated, add a data field to be displayed later.
    $hashValidated = "INVALID HASH";
}

// Define Variables
// ----------------
// Extract the available receipt fields from the VPC Response
// If not present then let the value be equal to 'No Value Returned'

// Standard Receipt Data
$amount = null2unknown($_GET["vpc_Amount"]);
$locale = null2unknown($_GET["vpc_Locale"]);
$batchNo = null2unknown($_GET["vpc_BatchNo"]);
$command = null2unknown($_GET["vpc_Command"]);
$message = null2unknown($_GET["vpc_Message"]);
$version = null2unknown($_GET["vpc_Version"]);
$cardType = null2unknown($_GET["vpc_Card"]);
$orderInfo = null2unknown($_GET["vpc_OrderInfo"]);
$receiptNo = null2unknown($_GET["vpc_ReceiptNo"]);
$merchantID = null2unknown($_GET["vpc_Merchant"]);
//$authorizeID = null2unknown($_GET["vpc_AuthorizeId"]);
$merchTxnRef = null2unknown($_GET["vpc_MerchTxnRef"]);
$transactionNo = null2unknown($_GET["vpc_TransactionNo"]);
$acqResponseCode = null2unknown($_GET["vpc_AcqResponseCode"]);
$txnResponseCode = null2unknown($_GET["vpc_TxnResponseCode"]);
// 3-D Secure Data
$verType = array_key_exists("vpc_VerType", $_GET) ? $_GET["vpc_VerType"] : "No Value Returned";
$verStatus = array_key_exists("vpc_VerStatus", $_GET) ? $_GET["vpc_VerStatus"] : "No Value Returned";
$token = array_key_exists("vpc_VerToken", $_GET) ? $_GET["vpc_VerToken"] : "No Value Returned";
$verSecurLevel = array_key_exists("vpc_VerSecurityLevel", $_GET) ? $_GET["vpc_VerSecurityLevel"] : "No Value Returned";
$enrolled = array_key_exists("vpc_3DSenrolled", $_GET) ? $_GET["vpc_3DSenrolled"] : "No Value Returned";
$xid = array_key_exists("vpc_3DSXID", $_GET) ? $_GET["vpc_3DSXID"] : "No Value Returned";
$acqECI = array_key_exists("vpc_3DSECI", $_GET) ? $_GET["vpc_3DSECI"] : "No Value Returned";
$authStatus = array_key_exists("vpc_3DSstatus", $_GET) ? $_GET["vpc_3DSstatus"] : "No Value Returned";

// *******************
// END OF MAIN PROGRAM
// *******************

// FINISH TRANSACTION - Process the VPC Response Data
// =====================================================
// For the purposes of demonstration, we simply display the Result fields on a
// web page.

// Show 'Error' in title if an error condition
$errorTxt = "";

// Show this page as an error page if vpc_TxnResponseCode equals '7'
if ($txnResponseCode == "7" || $txnResponseCode == "No Value Returned" || $errorExists) {
    $errorTxt = "Error ";
}

// This is the display title for 'Receipt' page 
$title = $_GET["Title"];

// The URL link for the receipt to do another transaction.
// Note: This is ONLY used for this example and is not required for 
// production code. You would hard code your own URL into your application
// to allow customers to try another transaction.
//TK//$againLink = URLDecode($_GET["AgainLink"]);


$transStatus = "";
if($hashValidated=="CORRECT" && $txnResponseCode=="0"){
	$transStatus = "Payment Success!";
}elseif ($hashValidated=="INVALID HASH" && $txnResponseCode=="0"){
	$transStatus = "Pendding";
}else {
	$transStatus = "Payment Failed";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title>Iwamsn 2021 Registration Confirmation</title>
    <meta http-equiv="Content-Type" content="text/html, charset=utf8">
    <style type="text/css">
        <!--
        h1 {
            font-family: Arial, sans-serif;
            font-size: 24pt;
            color: #08185A;
            font-weight: 100
        }

        h2.co {
            font-family: Arial, sans-serif;
            font-size: 24pt;
            color: #08185A;
            margin-top: 0.1em;
            margin-bottom: 0.1em;
            font-weight: 100
        }

        h3.co {
            font-family: Arial, sans-serif;
            font-size: 16pt;
            color: #000000;
            margin-top: 0.1em;
            margin-bottom: 0.1em;
            font-weight: 100
        }

        body {
            font-family: Verdana, Arial, sans-serif;
            font-size: 10pt;
            color: #08185A background-color: #FFFFFF
        }

        a:link {
            font-family: Verdana, Arial, sans-serif;
            font-size: 8pt;
            color: #08185A
        }

        a:visited {
            font-family: Verdana, Arial, sans-serif;
            font-size: 8pt;
            color: #08185A
        }

        a:hover {
            font-family: Verdana, Arial, sans-serif;
            font-size: 8pt;
            color: #FF0000
        }

        a:active {
            font-family: Verdana, Arial, sans-serif;
            font-size: 8pt;
            color: #FF0000
        }

        tr.title {
            height: 25px;
            background-color: #0074C4
        }

        td {
            font-family: Verdana, Arial, sans-serif;
            font-size: 8pt;
            color: #08185A
        }

        th {
            font-family: Verdana, Arial, sans-serif;
            font-size: 10pt;
            color: #08185A;
            font-weight: bold;
            background-color: #CED7EF;
            padding-top: 0.5em;
            padding-bottom: 0.5em
        }

        input {
            font-family: Verdana, Arial, sans-serif;
            font-size: 8pt;
            color: #08185A;
            background-color: #CED7EF;
            font-weight: bold
        }

        #background-image {
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
            font-size: 12px;
            width: 80%;
            text-align: left;
            border-collapse: collapse;
            background: url(atva2013/...) 330px 59px no-repeat;
            margin: 20px;
        }

        #background-image th {
            font-weight: normal;
            font-size: 14px;
            color: #339;
            padding: 12px;
        }

        #background-image td {
            color: #669;
            border-top: 1px solid #fff;
            padding: 9px 12px;
        }

        #background-image tfoot td {
            font-size: 11px;
        }

        #background-image tbody td {
            background: url(atva2013/back.png);
        }

        * html
#background-image tbody td {
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src = 'table-images/back.png', sizingMethod = 'crop' );
            background: none;
        }

        #background-image tbody tr:hover td {
            color: #339;
            background: none;
        }

        -->
    </style>
	
	
<script type = "text/javascript" >
function changeHashOnLoad() {
     window.location.href += "#";
     setTimeout("changeHashAgain()", "50"); 
}

function changeHashAgain() {
  window.location.href += "1";
}

var storedHash = window.location.hash;
window.setInterval(function () {
    if (window.location.hash != storedHash) {
         window.location.hash = storedHash;
    }
}, 50);


</script>


	
</head>

<body>

<!--
 onload="changeHashOnLoad(); "
<center>
    <h1><?php echo $transStatus;?></h1>
</center>
<br/>

<center>	
	<h2><b><a href="http://hoabinh-group.com/conference/vicif-2018/index.php" target="_parent">Go to Homepage</a></b></h2>	
</center>	

-->

</body>
</html>

<?php
// End Processing

// This method uses the QSI Response code retrieved from the Digital
// Receipt and returns an appropriate description for the QSI Response Code
//
// @param $responseCode String containing the QSI Response Code
//
// @return String containing the appropriate description
//
function getResponseDescription($responseCode)
{
    switch ($responseCode) {
        case "0" :
            $result = "Transaction Successful";
            break;
        case "?" :
            $result = "Transaction status is unknown";
            break;
        case "1" :
            $result = "Bank system reject";
            break;
        case "2" :
            $result = "Bank Declined Transaction";
            break;
        case "3" :
            $result = "No Reply from Bank";
            break;
        case "4" :
            $result = "Expired Card";
            break;
        case "5" :
            $result = "Insufficient funds";
            break;
        case "6" :
            $result = "Error Communicating with Bank";
            break;
        case "7" :
            $result = "Payment Server System Error";
            break;
        case "8" :
            $result = "Transaction Type Not Supported";
            break;
        case "9" :
            $result = "Bank declined transaction (Do not contact Bank)";
            break;
        case "A" :
            $result = "Transaction Aborted";
            break;
        case "C" :
            $result = "Transaction Cancelled";
            break;
        case "D" :
            $result = "Deferred transaction has been received and is awaiting processing";
            break;
        case "F" :
            $result = "3D Secure Authentication failed";
            break;
        case "I" :
            $result = "Card Security Code verification failed";
            break;
        case "L" :
            $result = "Shopping Transaction Locked (Please try the transaction again later)";
            break;
        case "N" :
            $result = "Cardholder is not enrolled in Authentication scheme";
            break;
        case "P" :
            $result = "Transaction has been received by the Payment Adaptor and is being processed";
            break;
        case "R" :
            $result = "Transaction was not processed - Reached limit of retry attempts allowed";
            break;
        case "S" :
            $result = "Duplicate SessionID (OrderInfo)";
            break;
        case "T" :
            $result = "Address Verification Failed";
            break;
        case "U" :
            $result = "Card Security Code Failed";
            break;
        case "V" :
            $result = "Address Verification and Card Security Code Failed";

            break;
		case "99" :
            $result = "User Cancel";
            break;
        default  :
            $result = "Unable to be determined";
    }
    return $result;
}

// If input is null, returns string "No Value Returned", else returns input
function null2unknown($data)
{
    if ($data == "") {
        return "No Value Returned";
    } else {
        return $data;
    }
}



//  ----------------------------------------------------------------------------
// send mail to customer
include ('dbcon.php');
include "classes/class.phpmailer.php";


	//  ----------------------------------------------------------------------------
	// check order
	/*
	$sql1q = "SELECT * FROM iwamsn_register WHERE orderinfo='".$orderInfo."' ORDER BY id desc  LIMIT 0,1";
	$rep1q = @mysql_query($sql1q);
	while ($rows1q = @mysql_fetch_array($rep1q)) {
			if($rows1q['authenticate']=='true'){
				echo "<script>location='http://wmc2019.org/confirm.php?id=".$orderInfo."'</script>";
				exit;
			}					
	}
	*/

//  ----------------------------------------------------------------------------
// send mail to customer




					$name_a1='';
					$mail_a1='';
					$new_chuoi='';
					$title="";
					$fullname='';
					$type='';
					$sql = "SELECT * FROM iwamsn_register WHERE orderinfo ='".$orderInfo."' ORDER BY id desc  LIMIT 0,1";
					$rep = @mysql_query($sql);
					while ($rows = @mysql_fetch_array($rep)) {
						$title=$rows['title'];
						//if($rows['title_other']!=""){ $title=$rows['title_other']; }else{ $title=$rows['title']; }
						
						//$name_a1=$rows['firstname'].' '.$rows['lastname'];
						$fullname=$rows['fullname'];
						$mail_a1=$rows['email'];
						$payment_method=$rows['pay'];
                        $v=$rows['fee_type'];


                        if($v=='1'){ $new_chuoi.='Researcher | On/before July 15, 2021 | 42.00 USD<br/>'; }
                        else if($v=='2'){ $new_chuoi.='Student | On/before July 15, 2021 | 32.00 USD<br/>'; }
                        else if($v=='3'){ $new_chuoi.='Attendee | On/before July 15, 2021 | FREE<br/>'; }
                        else if($v=='4'){ $new_chuoi.='Researcher | After July 15, 2021 | 47.00 USD<br/>'; }
                        else if($v=='5'){ $new_chuoi.='Student | After July 15, 2021 | 37.00 USD<br/>'; }
                        else if($v=='6'){ $new_chuoi.='Attendee | After July 15, 2021 | FREE<br/>'; }
                        else if($v=='7'){ $new_chuoi.='Invited speaker | FREE<br/>'; }


 $smtp_username				 =  "mediahoabinhtourist@gmail.com";
 $smtp_password				 =  "A@RZzcs6Td";
 
 $from_email = 	$mail_a1;
 $from_name	 =  $name_a1;
 $to_email	  =	  "media@vietnamconference.com.vn";
		
		
		$strResponseDescription=getResponseDescription($txnResponseCode);
 $txnResponseCode1='0';
 $amount =$amount/100;
 if($txnResponseCode1=="0") $mess= 'Successful'; else $mess='Unsuccessful';
 
 
 $mail = new PHPMailer(); // create a new object
 $mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
 $mail->Host = 'smtp.gmail.com';
 $mail->Port = 465; // or 587
 $mail->IsHTML(true);
 $mail->CharSet="utf-8";


 $mail->Username = $smtp_username;					
 $mail->Password = $smtp_password;

 $mail->SetFrom($smtp_username);
 $mail->FromName = "IWAMSN 2021 Notification";

 $mail->AddAddress($from_email);	 	// Dia chi email va ten nhan
 $mail->AddAddress("vicky@hoabinhtourist.com");
 $mail->AddAddress("iwamsn2021@ims.vast.ac.vn");
 
$mail->AddReplyTo($smtp_username);		// Dia chi email va ten gui lai


$mail->Subject  =  "IWAMSN 2021 Registration Confirmation";				// Chu de email
$mail->Body     =  "<div style='width:100%;height:auto;margin:0 auto;'>
<p style='text-align:justify;'>Dear <strong>".str_replace("\"","'",$title)." ".str_replace("\"","'",$fullname)."</strong> </p>

<p style='text-align:justify;margin-top: 25px;'>Your registration has been completed. Please save this email for future reference.</p>
<p style='text-align:justify;'>Event: <strong>The 10th International Workshop on Advanced Materials Science and Nanotechnology (IWAMSN 2021)</strong></p>
<p style='text-align:justify;'>Date: <strong>August 18 - 20, 2021</strong></p>
<p style='text-align:justify;'>Venue: <strong>Pan Pacific Hanoi Hotel - 01 Thanh Nien Street, Ba Dinh District, Hanoi, Vietnam<strong></p>

<p style='text-align:justify;margin-top: 25px;'><strong>Registration Details:</strong></p>
<p style='text-align:justify;'>Full name: ".str_replace("\"","'",$title)." ".str_replace("\"","'",$fullname)."</p>
<p style='text-align:justify;'>Registration No.: ".$rows['orderinfo']."</p>
<p style='text-align:justify;'>Phone: ".$rows['phone']."</p>
<p style='text-align:justify;'>Email: ".$rows['email']."</p>

<p style='text-align:justify;margin-top: 25px;'>
<strong>Conference fee:</strong></p>
<p style='text-align:justify;'>".$new_chuoi."</p>
<p style='text-align:justify;'>
<b>Total amount:</b> ".$rows['fee']."$</p>
<p style='text-align:justify;'>
<b>Payment type:</b> Online Payment</p>
<p style='text-align:justify;'>
<b>Payment Status:</b> ".$strResponseDescription."</p>
<p style='text-align:justify;margin-top: 25px;'>
If you need any further assistance, please feel free to contact us at iwamsn2021@ims.vast.ac.vn & vicky@hoabinhtourist.com
</p>
<p style='text-align:justify;'>
We look forward to seeing you in Hanoi!
</p>
<p style='text-align:justify;margin-top: 25px;'>
Kind regards,
</p>
<p style='text-align:justify;'>
<b>IWAMSN 2021 Organizers</b>
</p>
 
</div>
"; //HTML Body

//$mail->SMTPDebug = 2;


if ($mess=='Successful') {	
	$sqla1="UPDATE iwamsn_register SET txn='".$txnResponseCode."',responseDes='".$strResponseDescription."' WHERE orderinfo='".$orderInfo."'";
	$result=mysql_query($sqla1);
	if($mail->Send()) 
	{
		$sqla2="UPDATE iwamsn_register SET re_email='A' WHERE orderinfo='".$orderInfo."'";
		$result2=mysql_query($sqla2);
		echo "<script>location='https://iwamsn.ac.vn/handlers/confirm-registration.php?orderinfo=".$orderInfo."'</script>";
		exit;
	}
	//echo "<script>location.href='http://wmc2019.org/Handler/confirm-registration.php?orderinfo='".$orderInfo."</script>";
	
}
					}
					
					
		


?>