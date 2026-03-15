<?php

namespace PrestaShopBundle\Twig\Extension;

/**
 * Provides data needed for Javascript router component
 */
class JsRouterMetadataExtension extends \Twig\Extension\AbstractExtension
{
    /**
     * @param RequestStack $requestStack
     * @param CsrfTokenManagerInterface $tokenManager
     * @param string $username
     */
    public function __construct(\Symfony\Component\HttpFoundation\RequestStack $requestStack, \Symfony\Component\Security\Csrf\CsrfTokenManagerInterface $tokenManager, string $username)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
    }
    /**
     * Get base url and security token used for javascript router component.
     *
     * @return array
     */
    public function getJsRouterMetadata()
    {
    }
}
