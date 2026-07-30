<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
class FormFieldCore
{
    public function toArray()
    {
    }
    public function setName($name)
    {
    }
    public function getName()
    {
    }
    public function setType($type)
    {
    }
    public function getType()
    {
    }
    public function setRequired($required)
    {
    }
    public function isRequired()
    {
    }
    public function setLabel($label)
    {
    }
    public function getLabel()
    {
    }
    public function setValue($value)
    {
    }
    public function getValue()
    {
    }
    public function setAvailableValues(array $availableValues)
    {
    }
    public function getAvailableValues()
    {
    }
    public function addAvailableValue($availableValue, $label = \null)
    {
    }
    public function setMaxLength($max)
    {
    }
    public function getMaxLength()
    {
    }
    public function setErrors(array $errors)
    {
    }
    public function getErrors()
    {
    }
    public function addError($errorString)
    {
    }
    public function setConstraints(array $constraints)
    {
    }
    public function addConstraint($constraint)
    {
    }
    public function getConstraints()
    {
    }
    /**
     * @param string $autocomplete
     *
     * @return FormFieldCore
     */
    public function setAutocompleteAttribute(string $autocomplete): \FormFieldCore
    {
    }
    /**
     * @return string
     */
    public function getAutocompleteAttribute(): string
    {
    }
}
