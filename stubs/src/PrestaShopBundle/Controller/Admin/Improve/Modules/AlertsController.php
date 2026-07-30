<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Modules;

/**
 * Responsible of "Improve > Modules > Modules & Services > Alerts" page display.
 */
class AlertsController extends \PrestaShopBundle\Controller\Admin\Improve\Modules\ModuleAbstractController
{
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @return Response
     */
    public function indexAction()
    {
    }
    /**
     * @return JsonResponse with number of modules having at least one notification
     */
    public function notificationsCountAction()
    {
    }
}
