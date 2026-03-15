<?php

namespace PrestaShopBundle\Form\Admin\Type\EventListener;

/**
 * This listener is used by the DisablingSwitchExtension to automatically add the DisablingSwitchType to the parent,
 * it is not possible to access the parent builder in the extension which is why this operation is delayed on the
 * PRE_SET_DATA event.
 *
 * The switch state is automatically computed based on the input's data, if it matches the disabled_value then the field
 * is considered as disabled and the switch is turned off.
 *
 * Feature workflow:
 *  - DisablingExtension handles the option when disabling_switch is enabled, it registers this listener on the target field
 *  - on PRE_SET_DATA this listener:
 *    - gets the target field's parent form field
 *    - adds a new DisablingSwitchType on the parent
 *    - updates switch on/off state based on the option disabled_value and the data from the form
 *    - it also adds a data-toggled-by attribute on target fields so that JS can select the fields on FO
 *  - the DisablingSwitchExtension::buildView is in charge of adapting the target field(s) disabled attribute correctly
 *  - the prestashop UI kit form theme renders the DisablingSwitchType at the right place automatically
 *  - the DisablingSwitch js component handles the front behaviour of the feature
 */
class AddDisablingSwitchListener implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    use \PrestaShopBundle\Form\Admin\Extension\DisablingSwitchTrait;
    public const TOGGLE_DATA_ATTRIBUTE = 'data-toggled-by';
    public function __construct(\PrestaShopBundle\Form\FormCloner $formCloner)
    {
    }
    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents(): array
    {
    }
    /**
     * On PRE_SET_DATA event we add the disabling switch, we make sure it is only added once, and pre-set its disabled state
     * based on the target initial value and the switch configuration.
     *
     * @param PreSetDataEvent $event
     */
    public function addDisablingSwitch(\Symfony\Component\Form\Event\PreSetDataEvent $event): void
    {
    }
}
