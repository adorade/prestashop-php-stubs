<?php

namespace PrestaShop\PrestaShop\Core\Domain\Alias\Command;

/**
 * Updates search term aliases
 */
class UpdateSearchTermAliasesCommand
{
    /**
     * @param string $oldSearchTerm
     * @param string|null $newSearchTerm
     * @param array{
     *   array{
     *     alias: string,
     *     active: bool,
     *   }
     * } $aliases
     */
    public function __construct(string $oldSearchTerm, private array $aliases, ?string $newSearchTerm = null)
    {
    }
    public function getOldSearchTerm(): \PrestaShop\PrestaShop\Core\Domain\Alias\ValueObject\SearchTerm
    {
    }
    public function getNewSearchTerm(): \PrestaShop\PrestaShop\Core\Domain\Alias\ValueObject\SearchTerm
    {
    }
    /**
     * @return array{
     *   array{
     *     alias: string,
     *     active: bool,
     *   }
     * }
     */
    public function getAliases(): array
    {
    }
}
