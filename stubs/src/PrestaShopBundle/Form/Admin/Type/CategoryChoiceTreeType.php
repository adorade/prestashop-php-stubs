<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Class CategoryChoiceTreeType.
 */
class CategoryChoiceTreeType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param array $categoryTreeChoices
     */
    public function __construct(array $categoryTreeChoices)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
    }
}
