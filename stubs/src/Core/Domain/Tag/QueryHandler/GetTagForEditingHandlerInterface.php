<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tag\QueryHandler;

interface GetTagForEditingHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tag\Query\GetTagForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Tag\QueryResult\EditableTag;
}
