<?php
require_once("check.php");
check_session();
require_once("utilities.php");

exec("java -jar ./tmp/it.eng.paas.telnet.jar 192.168.23.27 {$_POST["appid"]} scale ./tmp/{$_POST["appid"]}.MF {$_POST["instances"]}");

header('Location: profile.php');

?>
