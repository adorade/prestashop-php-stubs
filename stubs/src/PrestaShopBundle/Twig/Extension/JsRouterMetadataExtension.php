<?php

namespace PrestaShopBundle\Twig\Extension;

/**
 * Provides data needed for Javascript router component
 */
class JsRouterMetadataExtension extends \Twig\Extension\AbstractExtension
{
    public function __construct(private readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack, private readonly \Symfony\Component\Security\Csrf\CsrfTokenManagerInterface $tokenManager, private readonly \Symfony\Bundle\SecurityBundle\Security $security)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
    }
    /**
     * Get base url and security token used for javascript router component.
     *
     * @return array
     */
    public function getJsRouterMetadata(): array
    {
    }
}
