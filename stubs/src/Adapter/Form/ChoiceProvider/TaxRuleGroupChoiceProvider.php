<?php

namespace PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider;

/**
 * Provides tax rule group choices with tax rule name as key and id as value
 */
final class TaxRuleGroupChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface, \PrestaShop\PrestaShop\Core\Form\FormChoiceAttributeProviderInterface
{
    public function __construct(int $countryId, \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRulesGroupRepository $taxRulesGroupRepository, \PrestaShop\PrestaShop\Adapter\Tax\TaxComputer $taxComputer)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoicesAttributes(): array
    {
    }
}
