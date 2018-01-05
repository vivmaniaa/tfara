<?php

function divAdd($pagen, $divPosition) {
 
$URL = $_SERVER['PHP_SELF'].'?Pd='.$divPosition.'&Page='.$pagen;
header('Location: '.$URL);
ob_end_flush();
}

?>
