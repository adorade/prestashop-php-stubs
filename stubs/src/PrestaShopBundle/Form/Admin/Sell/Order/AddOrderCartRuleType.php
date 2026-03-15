<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order;

class AddOrderCartRuleType extends \Symfony\Component\Form\AbstractType
{
    use \PrestaShopBundle\Translation\TranslatorAwareTrait;
    /**
     * @param FormChoiceProviderInterface $orderDiscountTypeChoiceProvider
     * @param ConfigurableFormChoiceProviderInterface $orderInvoiceByIdChoiceProvider
     * @param int $contextLangId
     * @param TranslatorInterface $translator
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $orderDiscountTypeChoiceProvider, \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $orderInvoiceByIdChoiceProvider, int $contextLangId, \Symfony\Contracts\Translation\TranslatorInterface $translator)
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
