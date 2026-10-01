<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\QueryHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetCartForViewingHandler implements \PrestaShop\PrestaShop\Core\Domain\Cart\QueryHandler\GetCartForViewingHandlerInterface
{
    public function __construct(private \PrestaShop\PrestaShop\Adapter\ImageManager $imageManager, private \PrestaShop\PrestaShop\Core\Localization\Locale $locale, private \PrestaShop\PrestaShop\Adapter\Module\ModuleHtmlAuthorizationChecker $moduleHtmlAuthorizationChecker)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Query\GetCartForViewing $query)
    {
    }
}
