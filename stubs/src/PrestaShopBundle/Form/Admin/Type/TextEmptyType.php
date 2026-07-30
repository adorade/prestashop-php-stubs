<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * @deprecated 1.7.5, to be removed in 1.8
 */
class TextEmptyType extends \Symfony\Component\Form\AbstractTypeExtension implements \Symfony\Component\Form\DataTransformerInterface
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function getExtendedType()
    {
    }
    public function transform($data)
    {
    }
    public function reverseTransform($data)
    {
    }
}
