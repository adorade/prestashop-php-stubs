<?php

namespace PrestaShop\PrestaShop\Adapter\Validator;

/**
 * Service factories used to assemble the Symfony validator inside the hand-built front-office legacy container, which
 * (unlike the Symfony kernels) does not get a `validator` from FrameworkBundle.
 *
 * Raw-value validation (`validate($value, $constraints)`) needs no class metadata, so a plain ValidatorBuilder with a
 * container-backed, failure-tolerant constraint-validator factory is enough. No translator is set: messages fall back
 * to their (untranslated) templates, which is acceptable for the FO path where they surface in exceptions/logs.
 */
final class LegacyValidatorFactory
{
    public static function create(\Psr\Container\ContainerInterface $container, ?\Psr\Log\LoggerInterface $logger = null): \Symfony\Component\Validator\Validator\ValidatorInterface
    {
    }
    /**
     * Builds CleanHtmlValidator, whose constructor needs the resolved PS_ALLOW_HTML_IFRAME flag (the SF kernels wire
     * this through a DI expression, which is awkward to express in the hand-built container — a factory is simpler).
     */
    public static function createCleanHtmlValidator(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration): \PrestaShop\PrestaShop\Core\ConstraintValidator\CleanHtmlValidator
    {
    }
}
