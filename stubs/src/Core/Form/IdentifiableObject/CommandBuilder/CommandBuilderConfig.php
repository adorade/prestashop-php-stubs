<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder;

/**
 * Configuration of command fields used by the CommandBuilder component in charge of updating the command object
 * according to input data. Each command field is associated to:
 * - a setter method of the command object
 * - a set of one or mutliple data field descriptions
 * Example:
 *
 * $config = new CommandBuilderConfig('modify_all_');
 * $config
 *     ->addField('[name]', 'setName', DataField::TYPE_STRING)
 *     ->addCompoundField('setIsValid', [
 *         '[command][isValid]' => DataField::TYPE_BOOL,
 *         '[command][foo]' => [
 *             'type' => DataField::TYPE_STRING,
 *             'default' => 'bar',
 *         ],
 *     ])
 *     ->addMultiShopField('[count_number]', 'setCount', DataField::TYPE_INT)
 *     ->addMultiShopCompoundField('setChildren', [
 *         '[parent][children]' => DataField::TYPE_ARRAY,
 *         '[command][foo]' => [
 *             'type' => DataField::TYPE_STRING,
 *             'default' => 'bar',
 *         ],
 *     ])
 * ;
 */
class CommandBuilderConfig
{
    public const FIELD_TYPE_OPTION = 'type';
    public const FIELD_DEFAULT_VALUE_OPTION = 'default';
    public function __construct(string $modifyAllNamePrefix = '')
    {
    }
    /**
     * @param string $propertyPath
     * @param string $commandSetter
     * @param string $propertyType
     *
     * @return static
     *
     * @throws DataFieldException
     */
    public function addField(string $propertyPath, string $commandSetter, string $propertyType): self
    {
    }
    /**
     * @param string $propertyPath
     * @param string $commandSetter
     * @param string $propertyType
     *
     * @return static
     *
     * @throws DataFieldException
     */
    public function addMultiShopField(string $propertyPath, string $commandSetter, string $propertyType): self
    {
    }
    /**
     * @param string $commandSetter
     * @param array<string, string|array<string, mixed>> $dataFieldDescriptions
     *
     * @return static
     *
     * @throws DataFieldException
     */
    public function addCompoundField(string $commandSetter, array $dataFieldDescriptions): self
    {
    }
    /**
     * @param string $commandSetter
     * @param array<string, string|array<string, mixed>> $dataFieldDescriptions
     *
     * @return static
     *
     * @throws DataFieldException
     */
    public function addMultiShopCompoundField(string $commandSetter, array $dataFieldDescriptions): self
    {
    }
    /**
     * @return string
     */
    public function getModifyAllNamePrefix(): string
    {
    }
    /**
     * @return array<int, CommandField>
     */
    public function getFields(): array
    {
    }
    /**
     * @param array<string, string|array<string, mixed>> $dataFieldDescriptions
     *
     * @return array<int, DataField>
     *
     * @throws DataFieldException
     */
    protected function createDataFields(array $dataFieldDescriptions): array
    {
    }
    /**
     * @param string $path
     * @param string|array<string, mixed> $dataFieldDescription
     *
     * @return DataField
     *
     * @throws DataFieldException
     */
    protected function createDataField(string $path, $dataFieldDescription): \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\DataField
    {
    }
}
