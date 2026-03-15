<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Modules;

/**
 * Responsible of "Improve > Modules > Modules & Services > Updates" page display.
 */
class UpdatesController extends \PrestaShopBundle\Controller\Admin\Improve\Modules\ModuleAbstractController
{
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @return Response
     */
    public function indexAction()
    {
    }
}
