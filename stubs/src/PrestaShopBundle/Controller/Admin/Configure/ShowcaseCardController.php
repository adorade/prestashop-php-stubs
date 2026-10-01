<?php

namespace PrestaShopBundle\Controller\Admin\Configure;

class ShowcaseCardController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Saves the user preference of closing the showcase card.
     *
     * This action should be performed via POST, and expects two parameters:
     * - int $close=1
     * - string $name Name of the showcase card to close
     *
     * @see ShowcaseCard
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_metas_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', 'CONFIGURE') && is_granted('update', 'CONFIGURE')")]
    public function closeShowcaseCardAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
