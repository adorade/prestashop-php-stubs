<?php

namespace PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider;

/**
 * Class CategoryTreeChoiceProvider provides categories as tree choices.
 */
final class CategoryTreeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param CategoryDataProvider $categoryDataProvider
     * @param int $contextShopRootCategoryId
     * @param bool $enabledCategoriesOnly
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Category\CategoryDataProvider $categoryDataProvider, $contextShopRootCategoryId, $enabledCategoriesOnly = false)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
