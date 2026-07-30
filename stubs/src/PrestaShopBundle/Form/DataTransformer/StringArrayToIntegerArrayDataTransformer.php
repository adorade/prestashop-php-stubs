<?php

namespace PrestaShopBundle\Form\DataTransformer;

/**
 * Class StringArrayToIntegerArrayTransformer is responsible for  applying reverse transformation when form is being
 * submitted. If its array, it casts all elements to integer.
 */
final class StringArrayToIntegerArrayDataTransformer implements \Symfony\Component\Form\DataTransformerInterface
{
    /**
     * {@inheritdoc}
     */
    public function transform($value)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function reverseTransform($value)
    {
    }
}
