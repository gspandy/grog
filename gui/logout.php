<?php
require_once("check.php");
session_destroy();
	header('Location: index.php?action=logout');
?>