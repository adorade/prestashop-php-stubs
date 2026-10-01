<?php

namespace PrestaShopBundle\Twig\Extension;

/**
 * This function allows updating a form vars from the twig, the new vars are merged with the existing ones.
 * Used in ToggleChildrenChoiceType to force invalid state on the radio children.
 *
 * Example: {{ update_form_vars(form, {valid: false}) }}
 */
class UpdateFormVarsExtension extends \Twig\Extension\AbstractExtension
{
    public function getFunctions(): array
    {
    }
    public function updateFormVars(\Symfony\Component\Form\FormView $formView, array $newVars): void
    {
    }
}
