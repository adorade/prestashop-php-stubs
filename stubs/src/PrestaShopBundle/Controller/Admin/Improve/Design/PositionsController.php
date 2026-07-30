<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Design;

/**
 * Configuration modules positions "Improve > Design > Positions".
 */
class PositionsController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * @var int
     */
    protected $selectedModule = null;
    /**
     * Display hooks positions.
     *
     * @Template("@PrestaShop/Admin/Improve/Design/positions.html.twig")
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('create', request.get('_legacy_controller')) || is_granted('delete', request.get('_legacy_controller'))",
     *     message="Access denied.")
     *
     * @param Request $request
     *
     * @return array<string, mixed>
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Unhook module.
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller')~'_')", message="Access denied.")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function unhookAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Toggle hook status
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller')~'_')", message="Access denied.")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function toggleStatusAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
