<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\OrderStates;

/**
 * Type is used to created form for order state add/edit actions
 */
class OrderStateType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    protected const NAME_CHARS = '!<>,;?=+()@#"{}_$%:';
    /**
     * @throws \PrestaShop\PrestaShop\Core\Exception\InvalidArgumentException
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\MailTemplate\ThemeCatalogInterface $themeCatalog, \Symfony\Component\Routing\Generator\UrlGeneratorInterface $routing, \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Email\LegacyEmailTemplateLister $legacyTemplateLister)
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
