<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order\Invoices;

/**
 * Class generates "By order status" form
 * in "Sell > Orders > Invoices" page.
 */
class GenerateByStatusType extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    /**
     * @param FormChoiceProviderInterface $orderStateChoiceProvider
     * @param array $orderCountsByState
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $orderStateChoiceProvider, array $orderCountsByState)
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
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
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
}
