<?php

namespace PrestaShopBundle\Twig\Extension;

/**
 * This filter is mostly related with @see EntitySearchInputType to allow displaying additional
 * data. It is used in the prestashop ui kit form theme but can be used in custom form themes.
 */
class EntitySearchExtension extends \Twig\Extension\AbstractExtension
{
    public function getFilters()
    {
    }
    /**
     * Display the value from a form's value based on the field name. This is useful if your
     * data holds more than your form inputs so that you can display extra data (like name,
     * description, image, ...)
     *
     * Besides when the value is not present (which happens when the prototype is rendered
     * it uses the prototype mapping defined so that appropriate placeholders are placed. If
     * it can't fond one then it is automatically generated based on the field name.
     *
     * @param FormView $form
     * @param string $fieldName
     *
     * @return string
     */
    public function getEntityField(\Symfony\Component\Form\FormView $form, string $fieldName): string
    {
    }
}
