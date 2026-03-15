<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Combination;

class CombinationItemType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @var Currency
     */
    protected $defaultCurrency;
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \Currency $defaultCurrency, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature, int $contextShopId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    /**
     * @param FormInterface[] $children
     *
     * @return array
     */
    protected function getPlaceholderData(array $children): array
    {
    }
}
