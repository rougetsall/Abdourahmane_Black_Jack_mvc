<?php
include("../controllers/casino_controller.php");
$controller = $_GET["controller"] ?? "index";




include("../controllers/".$controller.".php");
?>
