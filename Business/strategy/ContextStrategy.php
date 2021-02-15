<?php
require_once("Business/strategy/OrderStrategy.php");

class ContextStrategy
{
    private $strategy;

    public function __construct(OrderStrategy $strategy)
    {
        $this->strategy = $strategy;
        // echo get_class($this->strategy);
    }

    public function resolv(array $data): array
    {
        return $this->strategy->execute($data);
    }
}
