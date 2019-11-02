<?php

namespace DesignPattern\Strategy;

class DiscountStrategy extends StrategyAbstract
{
    public function doAction($money)
    {
        echo '打折' . PHP_EOL;
    }
}
