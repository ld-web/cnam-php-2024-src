<?php

require_once 'Table.php';

class Products extends Table
{
    public function __construct()
    {
        parent::__construct('product');
    }
}