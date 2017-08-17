<?php
define("_IP",    "192.168.0.4");
define("_PORT",  "8888");

$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_connect($sock, _IP, _PORT);
echo "CLIENT >> socket connect to "._IP.":"._PORT."\n";
$date = socket_read($sock, 4096);
echo "CLIENT >> this time is $date \n";
socket_close($sock);
echo "CLIENT >> socket closed.\n";
?>