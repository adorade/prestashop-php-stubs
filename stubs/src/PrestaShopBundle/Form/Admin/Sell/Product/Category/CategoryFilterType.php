<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Category;

/**
 * This form type is used in the product list, it displays a tree to select one category used to filter the list.
 */
class CategoryFilterType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param TranslatorInterface $translator
     * @param CategoryDataProvider $categoryDataProvider
     * @param int $languageId
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Adapter\Category\CategoryDataProvider $categoryDataProvider, int $languageId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
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
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
    }
}
