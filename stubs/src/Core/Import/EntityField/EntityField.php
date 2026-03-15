<?php

namespace PrestaShop\PrestaShop\Core\Import\EntityField;

/**
 * Class EntityField defines an entity field.
 */
final class EntityField implements \PrestaShop\PrestaShop\Core\Import\EntityField\EntityFieldInterface
{
    /**
     * @param string $name
     * @param string $label
     * @param string $description
     * @param bool $required
     */
    public function __construct($name, $label, $description = '', $required = false)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
    }
    /**
     * Get field's label.
     *
     * @return string
     */
    public function getLabel()
    {
    }
    /**
     * Get field's description.
     *
     * @return string
     */
    public function getDescription()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isRequired()
    {
    }
}
