<?php

namespace PrestaShopBundle\Controller\Admin\Configure;

/**
 * @todo Move this to API
 */
class ShowcaseCardController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
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
     * @AdminSecurity(
     *     "is_granted('create', 'CONFIGURE') && is_granted('update', 'CONFIGURE')"
     * )
     * @DemoRestricted(redirectRoute="admin_metas_index")
     *
     * @return JsonResponse
     */
    public function closeShowcaseCardAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
