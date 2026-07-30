<?php

namespace PrestaShop\PrestaShop\Adapter\Order\QueryHandler;

/**
 * Handles GetOrderPreview query using legacy object model
 */
final class GetOrderPreviewHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\QueryHandler\GetOrderPreviewHandlerInterface
{
    /**
     * @param LocaleRepository $localeRepository
     * @param string $locale
     * @param AddressFormatterInterface|null $addressFormatter
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\Locale\Repository $localeRepository, string $locale, \PrestaShop\PrestaShop\Core\Address\AddressFormatterInterface $addressFormatter = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Query\GetOrderPreview $query): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderPreview
    {
    }
}
