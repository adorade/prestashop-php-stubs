<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\QueryHandler;

/**
 * Handles GetCustomerCartsQuery using legacy object models
 */
final class GetCustomerCartsHandler extends \PrestaShop\PrestaShop\Adapter\Customer\CommandHandler\AbstractCustomerHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler\GetCustomerCartsHandlerInterface
{
    /**
     * @param LocaleInterface $locale
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\LocaleInterface $locale)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerCarts $query): array
    {
    }
}
