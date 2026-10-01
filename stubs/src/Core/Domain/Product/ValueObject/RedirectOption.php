<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\ValueObject;

/**
 * Holds valid redirect option data
 */
class RedirectOption
{
    /**
     * @param string $redirectType
     * @param int $redirectTarget
     */
    public function __construct(string $redirectType, int $redirectTarget)
    {
    }
    /**
     * @return RedirectType
     */
    public function getRedirectType(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\RedirectType
    {
    }
    /**
     * @return RedirectTarget
     */
    public function getRedirectTarget(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\RedirectTarget
    {
    }
}
