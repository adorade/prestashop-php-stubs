<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Modules;

/**
 * Responsible of "Improve > Modules > Modules & Services > Alerts" page display.
 */
class AlertsController extends \PrestaShopBundle\Controller\Admin\Improve\Modules\ModuleAbstractController
{
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @return \Symfony\Component\HttpFoundation\JsonResponse with number of modules having at least one notification
     */
    public function notificationsCountAction(): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
