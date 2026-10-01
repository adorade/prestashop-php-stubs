<?php

namespace PrestaShopBundle\Form\Admin\Sell\CatalogPriceRule;

/**
 * Defines catalog price rule form for create/edit actions
 */
class CatalogPriceRuleType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param bool $isMultiShopEnabled
     * @param array $groupByIdChoices
     * @param array $shopByIdChoices
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, bool $isMultiShopEnabled, array $groupByIdChoices, array $shopByIdChoices)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
