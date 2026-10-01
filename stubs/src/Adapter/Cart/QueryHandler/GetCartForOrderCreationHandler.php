<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\QueryHandler;

/**
 * Handles GetCartForOrderCreation query using legacy object models
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetCartForOrderCreationHandler extends \PrestaShop\PrestaShop\Adapter\Cart\AbstractCartHandler implements \PrestaShop\PrestaShop\Core\Domain\Cart\QueryHandler\GetCartForOrderCreationHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Localization\LocaleInterface $locale
     * @param int $contextLangId
     * @param \Link $contextLink
     * @param \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager
     * @param int $defaultCarrierId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\LocaleInterface $locale, int $contextLangId, \Link $contextLink, \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, int $defaultCarrierId)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\Query\GetCartForOrderCreation $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException
     * @throws \PrestaShopException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Query\GetCartForOrderCreation $query): \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation
    {
    }
}
