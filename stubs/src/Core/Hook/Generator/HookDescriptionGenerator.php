<?php

namespace PrestaShop\PrestaShop\Core\Hook\Generator;

/**
 * Generates description for hook names.
 */
final class HookDescriptionGenerator implements \PrestaShop\PrestaShop\Core\Hook\Generator\HookDescriptionGeneratorInterface
{
    /**
     * @param array $hookDescriptions
     * @param \PrestaShop\PrestaShop\Core\Util\String\StringValidatorInterface $stringValidator
     * @param \PrestaShop\PrestaShop\Core\Util\String\StringModifierInterface $stringModifier
     */
    public function __construct(array $hookDescriptions, \PrestaShop\PrestaShop\Core\Util\String\StringValidatorInterface $stringValidator, \PrestaShop\PrestaShop\Core\Util\String\StringModifierInterface $stringModifier)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function generate($hookName)
    {
    }
}
