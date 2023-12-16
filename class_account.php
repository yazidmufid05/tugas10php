<?php
   class Account{
    public $nomor;
    protected $saldo;

    function __construct($nomor,$saldo){
        $this->nomor = $nomor;
        $this->saldo = $saldo;
    }

    public function deposit($uang){
        $this->saldo = $this->saldo + $uang;
    }

    public function witdraw1($uang){
        $this->saldo = $this->saldo - $uang;
    }

    public function cetak(){
        echo 'Nomor Account : '.$this->nomor;
        echo '<br/>Saldonya : '.$this->saldo;
    }
   }
?>