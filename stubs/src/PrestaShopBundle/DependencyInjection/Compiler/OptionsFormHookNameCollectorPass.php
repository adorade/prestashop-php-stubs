<?php

namespace PrestaShopBundle\DependencyInjection\Compiler;

/**
 * Used for collecting options form hook names and store them in the container. Options form hook name is stored in the
 * constructor argument. E.g in yml file:
 *
 * prestashop.admin.my_form.form_handler:
 *   class: 'MyForm'
 *   arguments:
 *    - '@someService'
 *    - 'MyFormHookName'
 *
 * In the sample, hook name is located in 1 position of argument array.
 */
final class OptionsFormHookNameCollectorPass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public const OPTIONS_FORM_SERVICE_SUFFIX = 'form_handler';
    public const HOOK_NAME_POSITION_IN_CONSTRUCTOR = 4;
    public const HOOK_NAME_PREFIX = 'action';
    public const HOOK_NAME_OF_FORM_BUILDER_SUFFIX = 'Form';
    public const HOOK_NAME_OF_FORM_SAVE_SUFFIX = 'Save';
    /**
     * {@inheritdoc}
     */
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
