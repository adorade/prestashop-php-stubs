<?php

namespace PrestaShop\PrestaShop\Adapter\Discount\Update;

/**
 * Duplicates discount
 */
class DiscountDuplicator extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountRepository $discountRepository, protected readonly \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, protected readonly \Doctrine\DBAL\Connection $connection, protected readonly string $dbPrefix, protected readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, protected readonly \PrestaShop\PrestaShop\Core\Util\String\StringModifierInterface $stringModifier)
    {
    }
    /**
     * Global process of duplicating a discount
     */
    public function duplicate(\PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId $discountId): \PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId
    {
    }
}
