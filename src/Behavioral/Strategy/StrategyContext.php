<?php

namespace DesignPattern\Behavioral\Strategy;

class StrategyContext
{
    /**
     * @var StrategyAbstract
     */
    private $strategy_mode;

    public function __construct($mode)
    {
        $this->strategy_mode = $mode;
    }

    public function get($money)
    {
        return $this->strategy_mode->doAction($money);
    }
}
