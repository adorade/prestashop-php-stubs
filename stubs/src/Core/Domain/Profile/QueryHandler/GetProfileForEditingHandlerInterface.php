<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\QueryHandler;

/**
 * Interface for service that gets Profile data for editing
 */
interface GetProfileForEditingHandlerInterface
{
    /**
     * @param GetProfileForEditing $query
     *
     * @return EditableProfile
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Query\GetProfileForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Profile\QueryResult\EditableProfile;
}
