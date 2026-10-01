<?php

namespace PrestaShop\PrestaShop\Adapter\Alias\Repository;

class AliasRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     * @param \PrestaShop\PrestaShop\Adapter\Alias\Validate\AliasValidator $aliasValidator
     */
    public function __construct(protected \Doctrine\DBAL\Connection $connection, protected string $dbPrefix, protected \PrestaShop\PrestaShop\Adapter\Alias\Validate\AliasValidator $aliasValidator)
    {
    }
    /**
     * Creates new Alias entity and saves to the database
     *
     * @param string $searchTerm
     * @param array{
     *   array{
     *     alias: string,
     *     active: bool,
     *   }
     * } $aliases
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Alias\ValueObject\AliasId[]
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function addAliases(string $searchTerm, array $aliases): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Alias\ValueObject\AliasId $aliasId
     *
     * @return \Alias
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Alias\ValueObject\AliasId $aliasId): \Alias
    {
    }
    /**
     * @param string $alias
     * @param string $searchTerm
     *
     * @return \Alias|null
     */
    public function getAliasIfExists(string $alias, string $searchTerm): ?\Alias
    {
    }
    /**
     * @param string $searchTerm
     *
     * @return array{
     *   array{
     *     alias: string,
     *     active: bool,
     *   }
     * }
     */
    public function getAliasesBySearchTerm(string $searchTerm): array
    {
    }
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Alias\ValueObject\AliasId $aliasId): void
    {
    }
    /**
     * @param \Alias $alias
     * @param string[] $propertiesToUpdate
     * @param string $exceptionClass
     *
     * @return void
     */
    public function partialUpdate(\Alias $alias, array $propertiesToUpdate, string $exceptionClass): void
    {
    }
    /**
     * Deletes all related aliases
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Alias\ValueObject\SearchTerm $searchTerm
     */
    public function deleteAliasesBySearchTerm(\PrestaShop\PrestaShop\Core\Domain\Alias\ValueObject\SearchTerm $searchTerm): void
    {
    }
    /**
     * @param string $searchPhrase
     * @param int|null $limit
     *
     * @return array<int, array<string, string>>
     */
    public function searchSearchTerms(string $searchPhrase, ?int $limit = null): array
    {
    }
    /**
     * @param array $searchTerms
     *
     * @return array{
     *   array{
     *     id_alias: int,
     *     search: string,
     *     alias: string,
     *     active: bool,
     *   }
     * }
     */
    public function getAliasesBySearchTerms(array $searchTerms): array
    {
    }
}
