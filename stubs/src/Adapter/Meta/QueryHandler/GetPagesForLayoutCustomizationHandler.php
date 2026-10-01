<?php

namespace PrestaShop\PrestaShop\Adapter\Meta\QueryHandler;

/**
 * Class GetMetaPagesListHandler.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetPagesForLayoutCustomizationHandler implements \PrestaShop\PrestaShop\Core\Domain\Meta\QueryHandler\GetPagesForLayoutCustomizationHandlerInterface
{
    /**
     * @param int $contextLangId
     */
    public function __construct($contextLangId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Meta\Query\GetPagesForLayoutCustomization $query)
    {
    }
}
