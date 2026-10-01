<?php

namespace PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Command;

/**
 * Deletes several core extra property definitions in bulk, optionally dropping their physical
 * SQL columns. Module-owned definitions among the given ids are skipped (aggregated as a
 * BulkExtraPropertyException) rather than stopping the whole batch.
 */
class BulkDeleteExtraPropertyDefinitionCommand
{
    /**
     * @param int[] $ids
     * @param bool $dropColumn When true, the physical column in {entity}_extra table is also dropped
     */
    public function __construct(protected readonly array $ids, protected readonly bool $dropColumn = false)
    {
    }
    /**
     * @return int[]
     */
    public function getIds(): array
    {
    }
    public function shouldDropColumn(): bool
    {
    }
}
