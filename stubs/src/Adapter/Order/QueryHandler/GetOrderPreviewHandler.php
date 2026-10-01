<?php

namespace PrestaShop\PrestaShop\Adapter\Order\QueryHandler;

/**
 * Handles GetOrderPreview query using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetOrderPreviewHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\QueryHandler\GetOrderPreviewHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Localization\Locale\Repository $localeRepository
     * @param string $locale
     * @param \PrestaShop\PrestaShop\Core\Address\AddressFormatterInterface|null $addressFormatter
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\Locale\Repository $localeRepository, string $locale, ?\PrestaShop\PrestaShop\Core\Address\AddressFormatterInterface $addressFormatter = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Query\GetOrderPreview $query): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderPreview
    {
    }
}
