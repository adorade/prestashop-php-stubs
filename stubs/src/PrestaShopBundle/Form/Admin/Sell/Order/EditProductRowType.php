<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order;

class EditProductRowType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * EditProductRowType constructor.
     *
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param ConfigurableFormChoiceProviderInterface $orderInvoiceByIdChoiceProvider
     * @param int $contextLangId
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $orderInvoiceByIdChoiceProvider, int $contextLangId)
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
