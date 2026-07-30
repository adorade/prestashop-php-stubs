<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\QueryHandler;

/**
 * Handles GetCartForOrderCreation query using legacy object models
 */
final class GetCartForOrderCreationHandler extends \PrestaShop\PrestaShop\Adapter\Cart\AbstractCartHandler implements \PrestaShop\PrestaShop\Core\Domain\Cart\QueryHandler\GetCartForOrderCreationHandlerInterface
{
    /**
     * @param LocaleInterface $locale
     * @param int $contextLangId
     * @param Link $contextLink
     * @param ContextStateManager $contextStateManager
     * @param int $defaultCarrierId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\LocaleInterface $locale, int $contextLangId, \Link $contextLink, \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, int $defaultCarrierId)
    {
    }
    /**
     * @param GetCartForOrderCreation $query
     *
     * @return CartForOrderCreation
     *
     * @throws CartNotFoundException
     * @throws LocalizationException
     * @throws PrestaShopException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Query\GetCartForOrderCreation $query): \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation
    {
    }
}
