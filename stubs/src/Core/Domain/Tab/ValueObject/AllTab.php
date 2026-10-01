<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tab\ValueObject;

class AllTab implements \PrestaShop\PrestaShop\Core\Domain\Tab\ValueObject\TabIdInterface
{
    public const ALL_TAB_ID = -1;
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
