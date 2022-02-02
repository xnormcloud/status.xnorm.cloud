<?php
$status = "";
$urls = array("mpuerta.com", "mpuerta.com", "mpuerta.com", "mpuerta.com");
$ports = array(8222, 8223, 8224, 8225);

for ($i = 0; $i <= count($urls) - 1; $i++) {
    if (@fsockopen($urls[$i], $ports[$i], $errno, $errstr, 1)){
        $status = $status . "online:";
    } else {
        $status = $status . "offline:";
    }
}

print $status;
?>