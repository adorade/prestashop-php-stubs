<?php

namespace PrestaShop\PrestaShop\Core\Hook\Provider;

/**
 * Gets hook names by identifiable object form types.
 */
final class IdentifiableObjectHookByFormTypeProvider implements \PrestaShop\PrestaShop\Core\Hook\Provider\HookByFormTypeProviderInterface
{
    public const FORM_TYPE_POSITION_IN_CONSTRUCTOR_OF_FORM_BUILDER = 0;
    public const FORM_BUILDER_HOOK_PREFIX = 'action';
    public const FORM_BUILDER_HOOK_SUFFIX = 'FormBuilderModifier';
    public const FORM_HANDLER_UPDATE_BEFORE_PREFIX = 'actionBeforeUpdate';
    public const FORM_HANDLER_UPDATE_AFTER_PREFIX = 'actionAfterUpdate';
    public const FORM_HANDLER_CREATE_BEFORE_PREFIX = 'actionBeforeCreate';
    public const FORM_HANDLER_CREATE_AFTER_PREFIX = 'actionAfterCreate';
    public const FORM_HANDLER_SUFFIX = 'FormHandler';
    /**
     * @param FormFactoryInterface $formFactory
     */
    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getHookNames(array $formTypes)
    {
    }
}
