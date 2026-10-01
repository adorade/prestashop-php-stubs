<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Definition;

/**
 * Properties container for single Module translation provider.
 */
class ModuleProviderDefinition extends \PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Definition\AbstractCoreProviderDefinition
{
    public function __construct(string $moduleName)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getType(): string
    {
    }
    /**
     * @return string
     */
    public function getModuleName(): string
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFilenameFilters(): array
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getTranslationDomains(): array
    {
    }
}
