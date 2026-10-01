<?php

namespace PrestaShop\PrestaShop\Adapter\Container;

/**
 * Registers a Symfony `validator` in the hand-built front-office legacy container.
 *
 * The three Symfony kernels get `validator` from FrameworkBundle, but the FO legacy container
 * (PrestaShop\PrestaShop\Adapter\ContainerBuilder) does not — so ExtraProperty (and any other) validation would have
 * no validator there. We assemble one with a container-backed, failure-tolerant constraint-validator factory
 * (GracefulConstraintValidatorFactory): Symfony built-in validators resolve via `new`, the PS validators whose
 * dependencies exist in this container are registered under their FQCN (what Constraint::validatedBy() returns), and
 * validators that cannot be built here (e.g. DefaultLanguageValidator → LanguageContext) are skipped + logged.
 *
 * Note: this can't be a CompilerPass — extensions must run before compilation (same reason as DoctrineBuilderExtension).
 */
final class ValidatorBuilderExtension implements \PrestaShop\PrestaShop\Adapter\Container\ContainerBuilderExtensionInterface
{
    public function build(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
