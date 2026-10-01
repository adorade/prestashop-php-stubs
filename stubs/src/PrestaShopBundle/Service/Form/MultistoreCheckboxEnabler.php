<?php

namespace PrestaShopBundle\Service\Form;

/**
 * Class MultistoreCheckboxEnabler
 *
 * This class is responsible for enabling multistore checkboxes on BO configuration forms,
 * it is usually called from the MultistoreConfigurationTypeExtension.
 *
 * Checkboxes are added or not, and checked or not depending on the current multistore context,
 * and if the field has the required attribute `multistore_configuration_key`.
 *
 * @todo add a link to the documentation related to this part, when it's online
 *
 * @see MaintenanceType for an example of a form that is configured to enable multistore checkboxes on its fields
 * @see MaintenanceConfiguration for an example of how to extend and use the AbstractMultistoreConfiguration to store multistore configuration values
 * @see MultistoreConfigurationTypeExtension this is the form extension that calls this class
 * @see AbstractMultistoreConfiguration this is the abstraction used by the class responsible for storing multistore configuration values
 */
class MultistoreCheckboxEnabler
{
    public const MULTISTORE_FIELD_PREFIX = 'multistore_';
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration, private readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, private readonly \PrestaShopBundle\Form\FormCloner $formCloner, private readonly \PrestaShopBundle\Service\Form\MultistoreConfigurationDropdownRenderer $dropdownRenderer)
    {
    }
    /**
     * @return bool
     */
    public function shouldAddMultistoreElements(): bool
    {
    }
    /**
     * Adds multistore checkboxes to form fields if needed,
     *
     * @param \Symfony\Component\Form\FormInterface $form (passed by reference)
     */
    public function addMultistoreElements(\Symfony\Component\Form\FormInterface $form): void
    {
    }
}
