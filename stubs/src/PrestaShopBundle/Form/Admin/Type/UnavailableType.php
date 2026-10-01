<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form type is useful during development phase to show part of a form that are not available yet.
 */
class UnavailableType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
