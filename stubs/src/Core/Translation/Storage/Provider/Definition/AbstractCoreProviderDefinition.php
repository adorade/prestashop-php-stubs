<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Definition;

/**
 * Properties container for core translation providers.
 */
abstract class AbstractCoreProviderDefinition implements \PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Definition\ProviderDefinitionInterface
{
    /**
     * @return string
     */
    abstract public function getType(): string;
    /**
     * Returns a list of patterns to filter catalogue files.
     * Depends on the translation type.
     *
     * @return array<int, string>
     */
    abstract public function getFilenameFilters(): array;
    /**
     * Returns a list of patterns to filter translation domains.
     * Depends on the translation type.
     *
     * @return array<int, string>
     */
    abstract public function getTranslationDomains(): array;
}
