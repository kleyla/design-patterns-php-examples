<?php

class Ascendent implements OrderStrategy
{
    public function execute(array $data): array
    {
        // echo "Ascendent! ";
        sort($data);
        return $data;
    }
}
