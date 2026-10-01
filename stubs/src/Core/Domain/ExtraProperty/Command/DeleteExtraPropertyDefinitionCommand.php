<?php

namespace PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Command;

/**
 * Deletes an extra property definition row and optionally drops its physical SQL column.
 *
 * Only core definitions (module_name = null) can be deleted via the BO UI.
 * The handler rejects the command for module-owned definitions.
 */
class DeleteExtraPropertyDefinitionCommand
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\ValueObject\ExtraPropertyDefinitionId
     */
    protected \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\ValueObject\ExtraPropertyDefinitionId $id;
    /**
     * @param int $id
     * @param bool $dropColumn When true, the physical column in {entity}_extra table is also dropped
     *                         (data loss). Defaults to keeping the column, like the bulk command
     *                         and the BO plain delete action.
     */
    public function __construct(int $id, protected readonly bool $dropColumn = false)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\ValueObject\ExtraPropertyDefinitionId
     */
    public function getId(): \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\ValueObject\ExtraPropertyDefinitionId
    {
    }
    /**
     * @return bool
     */
    public function shouldDropColumn(): bool
    {
    }
}
