<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order;

class OrderPaymentType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param ConfigurableFormChoiceProviderInterface $currencySymbolByIdChoiceProvider
     * @param ConfigurableFormChoiceProviderInterface $orderInvoiceChoiceProvider
     * @param FormChoiceProviderInterface $installedPaymentModulesChoiceProvider
     * @param int $contextLanguageId
     * @param int $contextShopId
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $currencySymbolByIdChoiceProvider, \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $orderInvoiceChoiceProvider, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $installedPaymentModulesChoiceProvider, int $contextLanguageId, int $contextShopId)
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
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
}
