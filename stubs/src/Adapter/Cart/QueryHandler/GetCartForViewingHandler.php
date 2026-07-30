<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\QueryHandler;

/**
 * @internal
 */
final class GetCartForViewingHandler implements \PrestaShop\PrestaShop\Core\Domain\Cart\QueryHandler\GetCartForViewingHandlerInterface
{
    /**
     * @param ImageManager $imageManager
     * @param Locale $locale
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\ImageManager $imageManager, \PrestaShop\PrestaShop\Core\Localization\Locale $locale)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Query\GetCartForViewing $query)
    {
    }
}
