<?php

$step1 = $_POST['zaunlinie'];
$step2 = $_POST['zaunmodell'];
$step3 = $_POST['zaunfarbe'];
$step41 = $_POST['step4input1'];
$step42 = $_POST['step4input2'];
$step43 = $_POST['step4input3'];
$step5 = $_POST['zaunform'];
$step61 = $_POST['pfosten'];
$step62 = $_POST['spitzen'];
$step63 = $_POST['kappen'];
$step7 = $_POST['rasenkantenstein'];
$step81 = $_POST['page81'];
$step82 = $_POST['page82'];
$step83 = $_POST['page83'];
$step91 = $_POST['tor'];
$step92 = $_POST['einfahrtsbreite'];
$step93 = $_POST['keintorbenoetigt'];
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$telefon = $_POST['telefon'];
$emailaddress = $_POST['emailaddress'];
$bevorzugtekontaktaufnahme = $_POST['bevorzugtekontaktaufnahme'];
$bevorzugtezeit = $_POST['bevorzugtezeit'];
$textcomment = $_POST['textcomment'];
$agbaccept = $_POST['agbaccept'];

if($agbaccept == "on") {
	$agbaccept = "accepted";
} else {
	$agbaccept = "not accepted";
}

echo $step1."<br>".$agbaccept."<br>";

$to      = 'krishna@gmail.com';
$subject = 'the subject';
$message = '<table><tr><td><h2>Kontakt Formular</h2></td><td></td></tr>';
if(!empty($step1)) {
	$step1arr = explode(':',$step1);
	$message .= '<tr><td><b>'.$step1arr[0].':</b></td><td>'.$step1arr[1].'</td></tr>';
} else {
	$message .= '<tr><td><b>aunlinie:</b> </td><td>nicht ausgew�hlt</td></tr>';
}

if(!empty($step2)) {
	$step2arr = explode(':',$step2);
	$message .= '<tr><td><b>'.$step2arr[0].':</b></td><td>'.$step2arr[1].'</td></tr>';
} else {
	$message .= '<tr><td><b>Zaunmodell:</b> </td><td>nicht ausgew�hlt</td></tr>';
}

if(!empty($step3)) {
	$step3arr = explode(':',$step3);
	$message .= '<tr><td><b>'.$step3arr[0].':</b></td><td>'.$step3arr[1].'</td></tr>';
} else {
	$message .= '<tr><td><b>Zaunfarbe:</b> </td><td>nicht ausgew�hlt</td></tr>';
}

if(!empty($step41)) {
	$step41arr = explode(':',$step41);
	$message .= '<tr><td><b>'.$step41arr[0].':</b></td><td>'.$step41arr[1].'</td></tr>';
} else {
	$message .= '<tr><td><b>Zaunh�he:</b> </td><td>nicht ausgew�hlt</td></tr>';
}

if(!empty($step42)) {
	$step42arr = explode(':',$step42);
	$message .= '<tr><td><b>'.$step42arr[0].':</b></td><td>'.$step42arr[1].'</td></tr>';
} else {
	$message .= '<tr><td><b>Gesamtl�nge:</b> </td><td>nicht ausgew�hlt</td></tr>';
}

if(!empty($step43)) {
	$step43arr = explode(':',$step43);
	$message .= '<tr><td><b>'.$step43arr[0].':</b></td><td>'.$step43arr[1].'</td></tr>';
} else {
	$message .= '<tr><td><b>Besonderheiten:</b> </td><td>nicht ausgew�hlt</td></tr>';
}

if(!empty($step5)) {
	$step5arr = explode(':',$step5);
	$message .= '<tr><td><b>'.$step5arr[0].':</b></td><td>'.$step5arr[1].'</td></tr>';
} else {
	$message .= '<tr><td><b>Zaunform:</b> </td><td>nicht ausgew�hlt</td></tr>';
}

if(!empty($step61)) {
	$step61arr = explode(':',$step61);
	$message .= '<tr><td><b>'.$step61arr[0].':</b></td><td>'.$step61arr[1].'</td></tr>';
} else {
	$message .= '<tr><td><b>Pfostenma�e:</b> </td><td>nicht ausgew�hlt</td></tr>';
}

if(!empty($step62)) {
	$step62arr = explode(':',$step62);
	$message .= '<tr><td><b>'.$step62arr[0].':</b></td><td>'.$step62arr[1].'</td></tr>';
} else {
	$message .= '<tr><td><b>Spitzen:</b> </td><td>nicht ausgew�hlt</td></tr>';
}

if(!empty($step63)) {
	$step63arr = explode(':',$step63);
	$message .= '<tr><td><b>'.$step63arr[0].':</b></td><td>'.$step63arr[1].'</td></tr>';
} else {
	$message .= '<tr><td><b>Kappen:</b> </td><td>nicht ausgew�hlt</td></tr>';
}

if(!empty($step7)) {
	$step7arr = explode(':',$step7);
	$message .= '<tr><td><b>'.$step7arr[0].':</b></td><td>'.$step7arr[1].'</td></tr>';
} else {
	$message .= '<tr><td><b>Rasenkantenstein:</b> </td><td>nicht ausgew�hlt</td></tr>';
}

if(!empty($step81)) {
	$step81arr = explode(':',$step81);
	$message .= '<tr><td><b>'.$step81arr[0].':</b></td><td>'.$step81arr[1].'</td></tr>';
} else {
	$message .= '<tr><td><b>Pforte:</b> </td><td>nicht ausgew�hlt</td></tr>';
}
if(!empty($step82)) {
	$step82arr = explode(':',$step82);
	$message .= '<tr><td><b>'.$step82arr[0].':</b></td><td>'.$step82arr[1].'</td></tr>';
} else {
	$message .= '<tr><td><b>Briefkasten:</b> </td><td>nicht ausgew�hlt</td></tr>';
}
if(!empty($step83)) {
	$step83arr = explode(':',$step83);
	$message .= '<tr><td><b>'.$step83arr[0].':</b></td><td>'.$step83arr[1].'</td></tr>';
} else {
	$message .= '<tr><td><b>Klingelknopf:</b> </td><td>nicht ausgew�hlt</td></tr>';
}

if(!empty($step91)) {
	$step91arr = explode(':',$step91);
	$message .= '<tr><td><b>'.$step91arr[0].':</b></td><td>'.$step91arr[1].'</td></tr>';
} else {
	$message .= '<tr><td><b>Tor:</b> </td><td>nicht ausgew�hlt</td></tr>';
}
if(!empty($step92)) {
	$step92arr = explode(':',$step92);
	$message .= '<tr><td><b>'.$step92arr[0].':</b></td><td>'.$step92arr[1].'</td></tr>';
} else {
	$message .= '<tr><td><b>Einfahrtsbreite:</b></td><td>nicht ausgew�hlt</td></tr>';
}
if(!empty($step93)) {
	$step93arr = explode(':',$step93);
	$message .= '<tr><td><b>'.$step93arr[0].':</b></td><td>'.$step93arr[1].'</td></tr>';
} else {
	$message .= '<tr><td><b>Kein Tor ben�tigt:</b></td><td>nicht ausgew�hlt</td></tr>';
}

$message .= '<tr><td><b>Vorname:</b> </td><td>'.$vorname.'</td></tr>';
$message .= '<tr><td><b>Nachname:</b> </td><td>'.$nachname.'</td></tr>';
$message .= '<tr><td><b>Telefon:</b> </td><td>'.$telefon.'</td></tr>';
$message .= '<tr><td><b>E-Mail:</b> </td><td>'.$emailaddress.'</td></tr>';
$message .= '<tr><td><b>Bevorzugte Kontaktaufnahme:</b> </td><td>'.$bevorzugtekontaktaufnahme.'</td></tr>';
$message .= '<tr><td><b>Bevorzugte Zeit:</b> </td><td>'.$bevorzugtezeit.'</td></tr>';
if(!empty($textcomment)) {
$message .= '<tr><td><b>Anmerkungen:</b> </td><td>'.$textcomment.'</td></tr>';
}
$message .= '<tr><td><b>Agb:</b> </td><td>'.$agbaccept.'</td></tr> </table>';

$headers = "From: " . strip_tags($emailaddress) . "\r\n";
$headers .= "Reply-To: ". strip_tags($emailaddress) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

mail($to, $subject, $message, $headers);

?> 