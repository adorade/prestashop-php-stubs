<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Class ShopChoiceTreeType.
 */
class ShopChoiceTreeType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $shopTreeChoiceProvider
     * @param \Symfony\Component\Form\DataTransformerInterface $stringArrayToIntegerArrayDataTransformer
     * @param \PrestaShop\PrestaShop\Core\Shop\ShopContextInterface $shopContext
     * @param \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multiStoreFeature
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $shopTreeChoiceProvider, \Symfony\Component\Form\DataTransformerInterface $stringArrayToIntegerArrayDataTransformer, \PrestaShop\PrestaShop\Core\Shop\ShopContextInterface $shopContext, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multiStoreFeature)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
    }
}
