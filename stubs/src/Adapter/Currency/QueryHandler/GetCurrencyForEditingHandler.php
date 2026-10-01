<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\QueryHandler;

/**
 * Class GetCurrencyForEditingHandler is responsible for retrieving required data used in currency form.
 *
 * @internal
 */
final class GetCurrencyForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Currency\QueryHandler\GetCurrencyForEditingHandlerInterface
{
    /**
     * @param int $contextShopId
     */
    public function __construct(int $contextShopId, \PrestaShop\PrestaShop\Core\Localization\Currency\PatternTransformer $patternTransformer)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Query\GetCurrencyForEditing $query)
    {
    }
}
