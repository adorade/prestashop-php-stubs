<?php

namespace PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider;

class CombinationIdChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface
{
    /**
     * @param CombinationRepository $combinationRepository
     * @param AttributeRepository $attributeRepository
     * @param CombinationNameBuilderInterface $combinationNameBuilder
     * @param int $languageId
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilderInterface $combinationNameBuilder, int $languageId)
    {
    }
    /**
     * @param array<string, int> $options
     *
     * @return array<string, int>
     */
    public function getChoices(array $options): array
    {
    }
}
