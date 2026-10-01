<?php

namespace PrestaShopBundle\Form\Admin\Sell\Discount;

/**
 * Similar component as the SearchAndResetType, except it handles an exception The reset button
 * is not shown when period_filter is the only selected filter.
 */
class DiscountSearchAndResetType extends \PrestaShopBundle\Form\Admin\Type\SearchAndResetType
{
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
}
