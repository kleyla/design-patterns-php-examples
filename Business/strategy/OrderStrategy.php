<?php

interface OrderStrategy
{
    public function execute(array $data): array;
}
