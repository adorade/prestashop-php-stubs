<?php

namespace PrestaShopBundle\Form\DataTransformer;

/**
 * Class ArabicToLatinDigitDataTransformer is responsible for converting arabic/persian digits to latin digits
 */
final class ArabicToLatinDigitDataTransformer implements \Symfony\Component\Form\DataTransformerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Util\ArabicToLatinDigitConverter $arabicToLatinDigitConverter)
    {
    }
    /**
     * Do not transform latin number to arabic/persian number as
     * the javascript datepicker will handle that on its side
     *
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
