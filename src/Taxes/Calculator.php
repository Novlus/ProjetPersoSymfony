<?php

namespace App\Taxes;

use Psr\Log\LoggerInterface;

class Calculator
{
    protected $logger;
    protected $tva;

    public function __construct(LoggerInterface $logger, float $tva)
    {
        $this->logger = $logger;
        $this->tva = $tva;
    }
    public function calcul(float $price): float
    {
        $this->logger->info("Calcul de la TVA avec comme prix: " . $price);
        return $price * 20 / 100;
    }
}
