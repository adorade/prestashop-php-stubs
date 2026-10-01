<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Modules;

/**
 * Responsible of "Improve > Modules > Modules & Services > Updates" page display.
 */
class UpdatesController extends \PrestaShopBundle\Controller\Admin\Improve\Modules\ModuleAbstractController
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(): \Symfony\Component\HttpFoundation\Response
    {
    }
}
