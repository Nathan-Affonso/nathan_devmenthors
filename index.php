<?php

    class ContaBancaria
    {
        public string $titular;
        public float $saldo;

        public function _construct(string $titular, float $saldoInicial = 0)
        {
            $this->titular = $titular;
            $this->saldo = $saldoInicial;
        }
    }

    $contaDev = new ContaBancaria("DevMenthors");
    // $contaDev->titular = "DevMenthors";
    // $contaDev->saldo = 67.67;

    $contaMinha = new ContaBancaria();
    $contaMinha->titular = "Nathan";
    $contaMinha->saldo = 69.69;

    echo "Conta da {$contaMinha->titular}: {$contaMinha->saldo}";

?>