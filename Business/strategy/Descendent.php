<?php

class Descendent implements OrderStrategy
{
    public function execute(array $data): array
    {
        rsort($data);
        return $data;
    }
}
