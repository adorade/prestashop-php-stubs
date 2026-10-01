<?php

namespace PrestaShop\PrestaShop\Core\Foundation\Database;

interface DatabaseInterface
{
    public function select($sqlString);
    public function escape($unsafeData);
}
