<?php

namespace PrestaShop\PrestaShop\Adapter\QuickAccess\Repository;

class QuickAccessRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository implements \PrestaShop\PrestaShop\Core\QuickAccess\QuickAccessRepositoryInterface
{
    public function __construct(private \Doctrine\DBAL\Connection $connection, private string $dbPrefix)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function fetchAll(\PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId): array
    {
    }
}
