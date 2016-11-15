<?php
$includes = glob("src/*");
foreach($includes as $include) {
    include $include;
}

use IDCT\Net\PhpTelnet;

$telnet = new PhpTelnet();
$telnet->connect("outlook.com", 25);
echo $telnet->readToEnd(true) . PHP_EOL;
$telnet->writeln("HELO gooddomain.com");
echo $telnet->readToEnd(true) . PHP_EOL;
