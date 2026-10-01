<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order;

class AddOrderCartRuleType extends \Symfony\Component\Form\AbstractType
{
    use \PrestaShopBundle\Translation\TranslatorAwareTrait;
    /**
     * @param \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $orderDiscountTypeChoiceProvider
     * @param \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $orderInvoiceByIdChoiceProvider
     * @param int $contextLangId
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
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
