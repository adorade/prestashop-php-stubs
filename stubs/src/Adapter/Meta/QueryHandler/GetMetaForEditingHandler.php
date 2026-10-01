<?php

namespace PrestaShop\PrestaShop\Adapter\Meta\QueryHandler;

/**
 * Class GetMetaForEditingHandler is responsible for retrieving meta data.
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetMetaForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Meta\QueryHandler\GetMetaForEditingHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Meta\Exception\MetaNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Meta\Query\GetMetaForEditing $query)
    {
    }
}
