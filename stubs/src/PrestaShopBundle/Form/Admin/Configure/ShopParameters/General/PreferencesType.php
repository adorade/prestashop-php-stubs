<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\General;

/**
 * Class returning the content of the form in the maintenance page.
 * To be found in Configure > Shop parameters > General > Maintenance.
 */
class PreferencesType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param array $locales
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     * @param bool $isShopFeatureEnabled
     * @param bool $isSingleShopContext
     * @param bool $isAllShopContext
     */
    public function __construct(\Symfony\Component\HttpFoundation\RequestStack $requestStack, \Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, bool $isShopFeatureEnabled, bool $isSingleShopContext, bool $isAllShopContext)
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
    public function getBlockPrefix()
    {
    }
    /**
     * Check if option which depends on multistore context can be changed.
     *
     * @return bool
     */
    protected function isContextDependantOptionEnabled()
    {
    }
}
