<?php

namespace PrestaShop\PrestaShop\Core\Translation\Builder\Map;

/**
 * This class is the representation of a translations catalogue.
 * A catalogue is composed by domains and theirs subdomains which have messages with 3 layers of translations.
 * We have methods to get the catalogue as and array or just get the tree,
 * both with overall and domains metadata having the messages count and untranslated messages count.
 */
class Catalogue
{
    public const METADATA_KEY_NAME = '__metadata';
    public const EMPTY_META = ['count' => 0, 'missing_translations' => 0];
    /**
     * @param Domain $domain
     *
     * @return Catalogue
     */
    public function addDomain(\PrestaShop\PrestaShop\Core\Translation\Builder\Map\Domain $domain): self
    {
    }
    /** Returns a single Domain DTO.
     *
     * @param string $domainName
     *
     * @return Domain|null
     */
    public function getDomain(string $domainName): ?\PrestaShop\PrestaShop\Core\Translation\Builder\Map\Domain
    {
    }
    /**
     * @return Domain[]
     */
    public function getDomains(): array
    {
    }
    public function getTranslationsCount(): int
    {
    }
    public function getMissingTranslationsCount(): int
    {
    }
    /**
     * @param bool $withMetadata
     *
     * @return array
     */
    public function toArray(bool $withMetadata = true): array
    {
    }
    public function buildTree(): array
    {
    }
}
