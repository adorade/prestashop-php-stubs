<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\General;

/**
 * Class returning the content of the form in the maintenance page.
 * To be found in Configure > Shop parameters > General > Maintenance.
 */
class PreferencesType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param ConfigurationInterface $configuration
     * @param bool $isMultistoreUsed
     * @param bool $isSingleShopContext
     * @param bool $isAllShopContext
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, $isMultistoreUsed, $isSingleShopContext, $isAllShopContext)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * Enabled only if the form is accessed using HTTPS protocol.
     *
     * @param bool $isSecure
     */
    public function setIsSecure($isSecure)
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
