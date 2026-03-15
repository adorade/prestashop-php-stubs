<?php

namespace PrestaShop\PrestaShop\Core\Import\EntityField;

/**
 * Interface EntityFieldInterface describes an entity field.
 */
interface EntityFieldInterface
{
    /**
     * Get field's name.
     *
     * @return string
     */
    public function getName();
    /**
     * Get field's label.
     *
     * @return string
     */
    public function getLabel();
    /**
     * Get field's description.
     *
     * @return string
     */
    public function getDescription();
    /**
     * Checks if the field is required.
     *
     * @return bool
     */
    public function isRequired();
}
