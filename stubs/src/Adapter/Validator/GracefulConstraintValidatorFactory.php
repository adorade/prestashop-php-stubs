<?php

namespace PrestaShop\PrestaShop\Adapter\Validator;

/**
 * A container-backed constraint-validator factory that tolerates validators it cannot build.
 *
 * The front-office legacy container (PrestaShop\PrestaShop\Adapter\ContainerBuilder) is hand-built and does not
 * register every service the full Symfony kernels do. Symfony built-in validators and the PS validators registered
 * for the FO container (TypedRegex, CleanHtml) resolve normally; a validator whose dependencies are absent here
 * (e.g. DefaultLanguageValidator → LanguageContext) would otherwise throw when the parent factory does `new $class()`.
 * Instead of fataling, we log a warning and return a no-op: the constraint is still fully enforced wherever the full
 * container runs (back-office Symfony pages and the Admin API).
 */
final class GracefulConstraintValidatorFactory extends \Symfony\Component\Validator\ContainerConstraintValidatorFactory
{
    public function __construct(\Psr\Container\ContainerInterface $container, private readonly ?\Psr\Log\LoggerInterface $logger = null)
    {
    }
    public function getInstance(\Symfony\Component\Validator\Constraint $constraint): \Symfony\Component\Validator\ConstraintValidatorInterface
    {
    }
}
