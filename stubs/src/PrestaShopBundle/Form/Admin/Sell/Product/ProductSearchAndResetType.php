<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product;

/**
 * Special search and reset button for product grid, the reset button is not shown when
 * category is the only filter selected.
 */
class ProductSearchAndResetType extends \PrestaShopBundle\Form\Admin\Type\SearchAndResetType
{
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
}
