<?php

namespace PrestaShop\PrestaShop\Adapter\CatalogPriceRule\Repository;

class CatalogPriceRuleRepository
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix)
    {
    }
    /**
     * @return array<int, array<string, string|null>>
     */
    public function getByProductId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $langId, ?int $limit = null, ?int $offset = null): array
    {
    }
    /**
     * @param ProductId $productId
     * @param LanguageId $langId
     *
     * @return int
     */
    public function countByProductId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $langId): int
    {
    }
}
