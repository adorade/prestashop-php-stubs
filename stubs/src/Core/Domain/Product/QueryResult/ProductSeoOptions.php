<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Transfers data about Product SEO options
 */
class ProductSeoOptions
{
    /**
     * @param string[] $localizedMetaTitles
     * @param string[] $localizedMetaDescriptions
     * @param string[] $localizedLinkRewrites
     * @param string $redirectType
     * @param ProductRedirectTarget|null $redirectTarget
     */
    public function __construct(array $localizedMetaTitles, array $localizedMetaDescriptions, array $localizedLinkRewrites, string $redirectType, ?\PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductRedirectTarget $redirectTarget)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedMetaTitles(): array
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedMetaDescriptions(): array
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedLinkRewrites(): array
    {
    }
    /**
     * @return string
     */
    public function getRedirectType(): string
    {
    }
    /**
     * @return int
     */
    public function getRedirectTargetId(): int
    {
    }
    /**
     * @return ProductRedirectTarget|null
     */
    public function getRedirectTarget(): ?\PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductRedirectTarget
    {
    }
}
