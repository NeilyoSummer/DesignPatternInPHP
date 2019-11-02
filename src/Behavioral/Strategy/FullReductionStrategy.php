<?php

namespace DesignPattern\Behavioral\Strategy;

class FullReduction extends StrategyAbstract
{
    public function doAction($money)
    {
        echo '满100减50元' . PHP_EOL;
    }
}
