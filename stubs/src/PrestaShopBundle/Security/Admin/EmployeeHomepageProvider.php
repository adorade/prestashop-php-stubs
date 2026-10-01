<?php

namespace PrestaShopBundle\Security\Admin;

/**
 * Service that generates the homepage url of the logged in employee based on their
 * custom configuration.
 */
class EmployeeHomepageProvider
{
    public function __construct(private readonly \Symfony\Component\Routing\RouterInterface $router, private readonly \Symfony\Bundle\SecurityBundle\Security $security, private readonly \PrestaShopBundle\Entity\Repository\TabRepository $tabRepository, private readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    public function getHomepageUrl(): ?string
    {
    }
}
