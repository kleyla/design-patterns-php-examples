<?php

// Interfaz Producto
interface Button
{
    public function render(): string;

    public function onClick(): string;
}
