<?php

namespace PrestaShopBundle\Form\Admin\Extension;

/**
 * This extension allows you to associate a switch disabler component to a form type by setting
 * the option disabling_switch to true. The component is automatically added to the form thanks to
 * a form listener and automatically rendered in the prestashop form theme (although you can always
 * override the rendering if needed).
 *
 * The switch state is detected based on your input empty data but you can also define a more accurate
 * disabled value if needed thanks to the disabled_value option.
 */
class DisablingSwitchExtension extends \Symfony\Component\Form\AbstractTypeExtension
{
    use \PrestaShopBundle\Form\Admin\Extension\DisablingSwitchTrait;
    public const FIELD_PREFIX = 'disabling_switch_';
    public const SWITCH_OPTION = 'disabling_switch';
    public const SWITCH_EVENT_OPTION = 'disabling_switch_event';
    public const DISABLED_VALUE_OPTION = 'disabled_value';
    public const SWITCH_STATE_ON_DISABLE_OPTION = 'switch_state_on_disable';
    public function __construct(\Symfony\Component\EventDispatcher\EventSubscriberInterface $addDisablingSwitchListener)
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function getExtendedTypes(): iterable
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * @param FormView $view
     * @param FormInterface $form
     * @param array $options
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options): void
    {
    }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
}
