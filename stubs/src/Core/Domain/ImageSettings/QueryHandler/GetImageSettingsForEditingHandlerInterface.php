<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\QueryHandler;

/**
 * Defines contract for GetImageSettingsForEditingHandlerInterface
 */
interface GetImageSettingsForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\ImageSettings\Query\GetImageSettingsForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\ImageSettings\QueryResult\EditableImageSettings
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ImageSettings\Query\GetImageSettingsForEditing $query): \PrestaShop\PrestaShop\Core\Domain\ImageSettings\QueryResult\EditableImageSettings;
}
