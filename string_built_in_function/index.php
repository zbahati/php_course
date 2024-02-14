<?php
$world = "Hello bahati";

echo crypt($world, 12);
print_r(explode(" ", $world));
echo md5($world);
echo strtolower($world);

$franks = 12000000;
echo number_format($franks, 2);
