<?php

class AccountBank {
    public $accountNumber;
    public $balance;
    public $customer;

    public function __construct($accountNumber, $initialBalance, $customer) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
        $this->customer = $customer;
    }

    public function cetak() {
        echo '<table style="width:100%;">';
echo '<tr><th style="padding: 10px;">No</th><th style="padding: 10px;">No.Rekening</th><th style="padding: 10px;">Customer</th><th style="padding: 10px;">Saldo</th></tr>';
echo '<tr>';
echo '<td style="padding: 10px;">1</td>';
echo '<td style="padding: 10px;">' . $this->accountNumber . '</td>';
echo '<td style="padding: 10px;">' . $this->customer . '</td>';
echo '<td style="padding: 10px;">' . $this->balance . '</td>';
echo '</tr>';
echo '</table>';

    }

    public static function generateRandomNumber() {
        return sprintf('%03d', rand(1, 999));
    }
}
?>
