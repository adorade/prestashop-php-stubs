<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\QueryHandler;

/**
 * Handles commands which gets customer for viewing in Back Office.
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetCustomerForViewingHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler\GetCustomerForViewingHandlerInterface
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param int $contextLangId
     * @param \PrestaShop\PrestaShop\Core\Localization\Locale $locale
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, $contextLangId, \PrestaShop\PrestaShop\Core\Localization\Locale $locale)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerForViewing $query)
    {
    }
}
