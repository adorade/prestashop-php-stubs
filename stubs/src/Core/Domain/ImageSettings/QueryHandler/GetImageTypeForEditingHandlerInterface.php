<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\QueryHandler;

/**
 * Defines contract for GetImageTypeForEditingHandlerInterface
 */
interface GetImageTypeForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\ImageSettings\Query\GetImageTypeForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\ImageSettings\QueryResult\EditableImageType
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ImageSettings\Query\GetImageTypeForEditing $query): \PrestaShop\PrestaShop\Core\Domain\ImageSettings\QueryResult\EditableImageType;
}
