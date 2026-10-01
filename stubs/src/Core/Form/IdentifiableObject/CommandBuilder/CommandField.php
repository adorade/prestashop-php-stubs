<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder;

class CommandField
{
    protected function __construct(string $commandSetter, array $dataFields, bool $isMultiShopField)
    {
    }
    /**
     * Returns a new command field for single shop
     *
     * @param string $commandSetter
     * @param array<int, DataField> $dataFields
     *
     * @return static
     */
    public static function createAsSingleShop(string $commandSetter, array $dataFields): self
    {
    }
    /**
     * Returns a new command field for multiple shops
     *
     * @param string $commandSetter
     * @param array<int, DataField> $dataFields
     *
     * @return static
     */
    public static function createAsMultiShop(string $commandSetter, array $dataFields): self
    {
    }
    /**
     * @return string
     */
    public function getCommandSetter(): string
    {
    }
    /**
     * @return array<int, DataField>
     */
    public function getDataFields(): array
    {
    }
    /**
     * @return bool
     */
    public function isMultiShopField(): bool
    {
    }
}
