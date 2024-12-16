<?php
//-------------------------------------------------------------------------------------------------------/
//Enter your email address(es), and your domain name to receive applications from the site.
//If you need to specify several email addresses, list them separated by the "|" symbol, without spaces.
//For example: $my_emails="myadres_1@gmail.com|myadres_2@gmail.com";

$my_emails = "kn.cosmetology@yandex.ru";
$from = "example@example.com";
$domain = "THE SELF";

//-------------------------------------------------------------------------------------------------------/

require 'class.phpmailer.php';

$maillist = explode('|', $my_emails);
$td1_style = "border:1px solid #767676; padding:14px 20px; font-weight:bold; background-color:#eee;";
$td2_style = "border:1px solid #767676; padding:14px 20px;";
$td3_style = "border:1px solid #000000; padding:14px 20px;background-color:#000000;color:#fff;font-weight:bold;text-align:center;";
$td4_style = "border:1px solid #086E80; padding:14px 20px;background-color:#086E80;color:#fff;font-weight:bold;text-align:center;";
$msg_top = "
<html>
	<body>
		<table style=\"border-collapse:collapse;\">";

$msg_content = "";
foreach ($_POST as $key => $value) {
	if ($key == "subject") {
		$msg_content .= "
			<tr>
				<td colspan=\"2\" style=\"$td3_style\">" . $value . "</td>
			</tr>";
	} else if (
		$key == "question1_text" ||
		$key == "question2_text" ||
		$key == "question3_text" ||
		$key == "question4_text" ||
		$key == "question5_text" ||
		$key == "question6_text" ||
		$key == "question7_text"
	) {
		$msg_content .= "
			<tr>
				<td colspan=\"2\" style=\"$td4_style\">" . $value . "</td>
			</tr>";
	} else if (
		$key == "question1a" ||
		$key == "question1b" ||
		$key == "question1c" ||
		$key == "question1d" ||
		$key == "question1e" ||
		$key == "question1f" ||
		$key == "question1g" ||
		$key == "question1h" ||
		$key == "question1i" ||
		$key == "question1j" ||

		$key == "question2a" ||
		$key == "question2b" ||
		$key == "question2c" ||
		$key == "question2d" ||
		$key == "question2e" ||
		$key == "question2f" ||

		$key == "question3a" ||
		$key == "question3b" ||
		$key == "question3c" ||
		$key == "question3d" ||
		$key == "question3e" ||
		$key == "question3f"	||

		$key == "question4"	||
		$key == "question5"	||
		$key == "question6"	||
		$key == "question7"
	) {
		$msg_content .= "
			<tr>
				<td colspan=\"2\" style=\"$td2_style\">" . $value . "</td>
			</tr>";
	} else if ($key == "phone") {
		$msg_content .= "
			<tr>
				<td style=\"$td1_style\">Телефон</td>
				<td style=\"$td2_style\">" . $value . "</td>
			</tr>";
	} else if ($key == "present") {
		$msg_content .= "
			<tr>
				<td style=\"$td1_style\">Подарок</td>
				<td style=\"$td2_style\">" . $value . "</td>
			</tr>";
	} else {
		$msg_content .= "
			<tr>
				<td style=\"$td1_style\">" . $key . "</td>
				<td style=\"$td2_style\">" . $value . "</td>
			</tr>";
	}
}
$msg_bottom = "
		</table>
	</body>
</html>";
if ($msg_content != "") {
	$subject = $_POST['subject'];
	$messege = $msg_top . $msg_content . $msg_bottom;
	$mail = new PHPMailer();
	$mail->From = $from;
	$mail->FromName = $domain;
	foreach ($maillist as $mail_send) {
		$mail->AddAddress($mail_send);
	}
	$mail->IsHTML(true);
	$mail->Subject = $subject;
	if (isset($_FILES['file'])) {
		$tmp_attachment = array_combine($_FILES['file']['tmp_name'], $_FILES['file']['name']);
		foreach ($tmp_attachment as $k => $v) {
			$mail->AddAttachment($k, $v);
		}
	}
	$mail->Body = $messege;
	if ($mail->Send()) {
		echo json_encode($_POST["name"]);
	}
}
