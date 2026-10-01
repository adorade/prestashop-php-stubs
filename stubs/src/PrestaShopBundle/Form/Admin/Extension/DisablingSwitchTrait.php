<?php

namespace PrestaShopBundle\Form\Admin\Extension;

/**
 * This trait is used by the DisablingSwitchExtension and the AddDisablingSwitchListener because they both need
 * to detect if a form should be disabled and the need to detect it the same way.
 */
trait DisablingSwitchTrait
{
    protected function shouldFormBeDisabled(\Symfony\Component\Form\FormInterface $form, $data): bool
    {
    }
}
