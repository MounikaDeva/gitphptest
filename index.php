<?php

echo 'Hello World! from '. $_SERVER['SERVER_ADDR'];
echo gethostname();
echo 'Hello World! from '. $_SERVER['SERVER_ADDR'] . "<br>" . gethostname() . "<br>";
$ip = exec("curl https://checkip.amazonaws.com");
echo "Public IP address: " . $ip;

?>
