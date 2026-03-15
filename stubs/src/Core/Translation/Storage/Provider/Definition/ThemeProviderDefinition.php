<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Definition;

/**
 * Properties container for single Module translation provider.
 */
class ThemeProviderDefinition implements \PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Definition\ProviderDefinitionInterface
{
    public const DEFAULT_THEME_NAME = 'classic';
    /**
     * @param string|null $themeName
     */
    public function __construct(?string $themeName = null)
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
    public function getThemeName(): string
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
