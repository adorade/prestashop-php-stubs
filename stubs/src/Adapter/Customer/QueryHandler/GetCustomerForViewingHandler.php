<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\QueryHandler;

/**
 * Handles commands which gets customer for viewing in Back Office.
 *
 * @internal
 */
final class GetCustomerForViewingHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler\GetCustomerForViewingHandlerInterface
{
    /**
     * @param TranslatorInterface $translator
     * @param int $contextLangId
     * @param Link $link
     * @param Locale $locale
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, $contextLangId, \Link $link, \PrestaShop\PrestaShop\Core\Localization\Locale $locale)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerForViewing $query)
    {
    }
}
