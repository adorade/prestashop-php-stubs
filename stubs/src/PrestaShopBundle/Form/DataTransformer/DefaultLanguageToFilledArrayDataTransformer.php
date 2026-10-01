<?php

namespace PrestaShopBundle\Form\DataTransformer;

/**
 * Class DefaultLanguageToFilledArrayDataTransformer is responsible for filling empty array values with
 * default language value if such exists.
 */
final class DefaultLanguageToFilledArrayDataTransformer implements \Symfony\Component\Form\DataTransformerInterface
{
    /**
     * @param int $defaultLanguageId
     */
    public function __construct($defaultLanguageId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function transform($value)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @param array $values
     */
    public function reverseTransform($values)
    {
    }
}
