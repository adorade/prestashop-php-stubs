<?php

namespace PrestaShopBundle\Form\Extension;

/**
 * Adds an option in the form builder to enable autocomplete on select inputs.
 */
class AutoCompleteExtension extends \Symfony\Component\Form\AbstractTypeExtension
{
    public static function getExtendedTypes(): iterable
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
}
