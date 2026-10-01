<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\DataTransformer;

/**
 * The form type used for target expects a collection of entities, but the provider only
 * provides one because in this case only one entity is expect (data limit == 1). So this
 * transformer turns the single entity into an array and vice versa.
 */
class RedirectionTargetTransformer implements \Symfony\Component\Form\DataTransformerInterface
{
    /**
     * {@inheritDoc}
     */
    public function transform($redirectionData)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function reverseTransform($redirectionData)
    {
    }
}
