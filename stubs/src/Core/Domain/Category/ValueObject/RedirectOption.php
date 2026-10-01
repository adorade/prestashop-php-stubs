<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\ValueObject;

/**
 * Holds valid redirect option data
 */
class RedirectOption
{
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryConstraintException
     */
    public function __construct(string $redirectType, int $redirectTarget)
    {
    }
    public function getRedirectType(): \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\RedirectType
    {
    }
    public function getRedirectTarget(): \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\RedirectTarget
    {
    }
}
