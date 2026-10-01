<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder;

/**
 * Description of a field to fetch in any data: path, type, default value.
 * If no value is found with the given path, then the default value is used instead.
 * Example:
 * new DataField('[foo][bar]', DataField::TYPE_STRING);
 * new DataField('[foo][bar]', DataField::TYPE_STRING, 'default value');
 */
class DataField
{
    public const TYPE_STRING = 'string';
    public const TYPE_BOOL = 'bool';
    public const TYPE_INT = 'int';
    public const TYPE_ARRAY = 'array';
    public const TYPE_DATETIME = 'datetime';
    public const ACCEPTED_TYPES = [self::TYPE_STRING, self::TYPE_BOOL, self::TYPE_INT, self::TYPE_ARRAY, self::TYPE_DATETIME];
    /**
     * A default value has to be provided explicitly as 3rd argument of the constructor,
     * otherwise the field has no default value.
     *
     * @throws DataFieldException
     */
    public function __construct(string $path, string $type, $defaultValue = null)
    {
    }
    public function getPropertyPath(): \Symfony\Component\PropertyAccess\PropertyPath
    {
    }
    public function getType(): string
    {
    }
    public function hasDefaultValue(): bool
    {
    }
    /**
     * @return mixed
     *
     * @throws DataFieldException
     */
    public function getDefaultValue()
    {
    }
    /**
     * @param mixed $defaultValue
     */
    protected function setDefaultValue($defaultValue): self
    {
    }
}
