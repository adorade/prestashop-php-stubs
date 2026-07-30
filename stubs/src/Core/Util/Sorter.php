<?php

namespace PrestaShop\PrestaShop\Core\Util;

class Sorter
{
    public const ORDER_ASC = 'ASC';
    public const ORDER_DESC = 'DESC';
    /**
     * @param array<array<string, mixed>> $array
     * @param string $order
     * @param string ...$criterias
     *
     * @return array
     */
    public function natural(array $array, string $order, string ...$criterias): array
    {
    }
}
