<?php

namespace PrestaShop\PrestaShop\Adapter\QuickAccess\Repository;

class QuickAccessRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository implements \PrestaShop\PrestaShop\Core\QuickAccess\QuickAccessRepositoryInterface
{
    public function __construct(private readonly \Doctrine\DBAL\Connection $connection, private readonly string $dbPrefix)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function fetchAll(\PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId): array
    {
    }
    public function get(\PrestaShop\PrestaShop\Core\Domain\QuickAccess\ValueObject\QuickAccessId $quickAccessId): \QuickAccess
    {
    }
    public function add(\QuickAccess $quickAccess): \QuickAccess
    {
    }
    public function update(\QuickAccess $quickAccess): void
    {
    }
    public function delete(\PrestaShop\PrestaShop\Core\Domain\QuickAccess\ValueObject\QuickAccessId $quickAccessId): void
    {
    }
    /**
     * Returns true if a quick access with the given link URL already exists.
     * The DB has no UNIQUE KEY on `link`, so the duplicate check must be done explicitly.
     */
    public function hasLink(string $link): bool
    {
    }
}
