<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\DataTransformer;

/**
 * @deprecated Since 8.0.0 and will be removed in the next major version.
 *
 * This transformer was useful when the form used a TypeAhead form type, with the new EntitySearchInputType
 * it became useless because the format is more adapted by default and not complex enough to justify a transformer.
 */
class TypeaheadRedirectionTargetTransformer implements \Symfony\Component\Form\DataTransformerInterface
{
    /**
     * {@inheritDoc}
     */
    public function transform($targetId)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function reverseTransform($targetData)
    {
    }
}
