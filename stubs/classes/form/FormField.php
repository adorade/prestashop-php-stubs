<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class FormFieldCore
{
    /**
     * @var string|null
     */
    public $moduleName = \null;
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
    public function setMinLength(?int $min): self
    {
    }
    public function getMinLength(): ?int
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
    /**
     * @param array $attr
     *
     * @return FormFieldCore
     */
    public function setAttr(array $attr): \FormFieldCore
    {
    }
    /**
     * @return array
     */
    public function getAttr(): array
    {
    }
}
