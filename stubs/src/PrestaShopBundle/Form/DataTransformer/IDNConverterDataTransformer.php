<?php

namespace PrestaShopBundle\Form\DataTransformer;

/**
 * Class DefaultLanguageToFilledArrayDataTransformer is responsible for filling empty array values with
 * default language value if such exists.
 */
final class IDNConverterDataTransformer implements \Symfony\Component\Form\DataTransformerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Util\InternationalizedDomainNameConverter $converter)
    {
    }
    /**
     * {@inheritdoc}
     *
     * Do not convert utf8 to punycode, should be done on the client side
     */
    public function transform($value)
    {
    }
    /**
     * {@inheritdoc}
     *
     * Convert punycode to utf8 (prestashop@xn--80aswg.xn--p1ai -> prestashop@сайт.рф)
     */
    public function reverseTransform($value)
    {
    }
}
