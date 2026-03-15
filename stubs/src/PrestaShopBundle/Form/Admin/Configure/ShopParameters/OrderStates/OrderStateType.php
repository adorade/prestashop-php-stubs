<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\OrderStates;

/**
 * Type is used to created form for order state add/edit actions
 */
class OrderStateType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param ThemeCatalogInterface $themeCatalog
     * @param Router $routing
     * @param Configuration $configuration
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\InvalidArgumentException
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\MailTemplate\ThemeCatalogInterface $themeCatalog, \Symfony\Component\Routing\Router $routing, \PrestaShop\PrestaShop\Adapter\Configuration $configuration)
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
}
