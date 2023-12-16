<?php
require_once 'class_account.php';

$ac1 = new Account("03201", 5000000);
$ac2 = new Account("01010", 45000000);

$ac1->cetak();
echo '<br/>';
$ac1->deposit(75000);
echo '<br/>Nabung 75000 <br/>';
$ac1->cetak();
?>
