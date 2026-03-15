<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tab\ValueObject;

class TabId implements \PrestaShop\PrestaShop\Core\Domain\Tab\ValueObject\TabIdInterface
{
    /**
     * @param int $tabId
     */
    public function __construct(int $tabId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
