<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order;

/**
 * Helps to render messages block in orders view page.
 */
class OrderMessageType extends \Symfony\Component\Form\AbstractType
{
    use \PrestaShopBundle\Translation\TranslatorAwareTrait;
    public function __construct(\PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $orderMessageNameChoiceProvider, \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $orderMessageChoiceProvider)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
}
