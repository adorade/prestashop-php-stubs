<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\QueryHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetCustomerThreadForViewingHandler implements \PrestaShop\PrestaShop\Core\Domain\CustomerService\QueryHandler\GetCustomerThreadForViewingHandlerInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Localization\Locale
     */
    protected $locale;
    /**
     * @param \Context $context
     * @param \PrestaShop\PrestaShop\Core\Localization\Locale $locale
     */
    public function __construct(\Context $context, \PrestaShop\PrestaShop\Core\Localization\Locale $locale)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerService\Query\GetCustomerThreadForViewing $query)
    {
    }
}
