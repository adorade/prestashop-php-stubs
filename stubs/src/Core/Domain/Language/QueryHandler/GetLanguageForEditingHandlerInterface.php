<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\QueryHandler;

/**
 * Interface for service that gets language for editing
 */
interface GetLanguageForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Language\Query\GetLanguageForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Language\QueryResult\EditableLanguage
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Language\Query\GetLanguageForEditing $query);
}
