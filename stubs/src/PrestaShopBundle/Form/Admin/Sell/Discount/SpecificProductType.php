<?php

namespace PrestaShopBundle\Form\Admin\Sell\Discount;

class SpecificProductType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilderInterface $combinationNameBuilder, private readonly \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, private readonly \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, private readonly \PrestaShopBundle\Form\FormCloner $formCloner, \Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function updateCombinationChoices(\Symfony\Component\Form\FormEvent $event): void
    {
    }
    /**
     * This block prefix is important it allows inheriting the templates from the default EntitySearchInputType
     *
     * @return string
     */
    public function getBlockPrefix(): string
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
