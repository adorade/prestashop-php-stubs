<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Wraps SubmittableInput and DeltaQuantity components to work together.
 * admin-dev/themes/new-theme/js/components/form/submittable-delta-quantity-input.ts responsible for javascript part.
 *
 * @see DeltaQuantityType
 * @see SubmittableInputType
 */
class SubmittableDeltaQuantityType extends \PrestaShopBundle\Form\Admin\Type\DeltaQuantityType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
