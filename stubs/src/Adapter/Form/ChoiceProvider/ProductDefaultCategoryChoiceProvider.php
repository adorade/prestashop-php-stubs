<?php

namespace PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider;

class ProductDefaultCategoryChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface
{
    /**
     * @param int $homeCategoryId
     * @param \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository
     * @param \PrestaShop\PrestaShop\Core\Category\NameBuilder\CategoryDisplayNameBuilder $categoryDisplayNameBuilder
     * @param int $shopId
     * @param int $languageId
     */
    public function __construct(int $homeCategoryId, \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository, \PrestaShop\PrestaShop\Core\Category\NameBuilder\CategoryDisplayNameBuilder $categoryDisplayNameBuilder, int $shopId, int $languageId)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getChoices(array $options): array
    {
    }
}
