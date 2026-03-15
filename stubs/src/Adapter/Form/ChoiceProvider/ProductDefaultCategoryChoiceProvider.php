<?php

namespace PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider;

class ProductDefaultCategoryChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface
{
    /**
     * @param int $homeCategoryId
     * @param CategoryRepository $categoryRepository
     * @param CategoryDisplayNameBuilder $categoryDisplayNameBuilder
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
