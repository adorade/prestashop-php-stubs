<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Definition;

/**
 * Properties container for core translation provider filtering by a single domain name.
 */
class CoreDomainProviderDefinition extends \PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Definition\AbstractCoreProviderDefinition
{
    /**
     * @param string $domainName
     */
    public function __construct(string $domainName)
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
    public function getDomainName(): string
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
