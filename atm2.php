<?php
    require_once 'class_accountBank.php';

    $ab1 = new AccountBank("010",500000,"Messi");
    $ab2 = new AccountBank("070",1000000,"Ronaldo");

    $ab1->cetak();
    echo '<hr/>';
    $ab2->cetak();
    echo '<br/>Ronaldo transfer uang ke Messi 1250000<br/>';
    echo 'Biaya Admin : '.AccountBank::$biaya_admin.'<br/>';
    $ab2->transfer($ab1,1250000);
    $ab1->cetak();
    echo'<hr/>';
    $ab2->cetak();

    $ar_ab = [$ab1,$ab2];
?>