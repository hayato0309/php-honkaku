<?php

declare(strict_types=1);

class TaxCalculator
{
    private $lastCalculated;

    public function calculate(int $price, float $tax): float
    {
        echo '計算を開始します。', PHP_EOL;
        if ($tax < 0) {
            throw new Exception('税率はマイナスであってはなりません。');
        }
        echo '計算を終了します。', PHP_EOL;
        $this->lastCalculated = $calculated = $price + $price + $tax;
        return $calculated;
    }

    public function reset(): void
    {
        $this->lastCalculated = null;
        echo '計算結果をリセットしました。', PHP_EOL;
    }
}
