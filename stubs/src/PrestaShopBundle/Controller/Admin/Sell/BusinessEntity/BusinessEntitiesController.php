<?php

namespace PrestaShopBundle\Controller\Admin\Sell\BusinessEntity;

/**
 * Class BusinessEntitiesController manages the "Sell > Business Entities" page.
 */
class BusinessEntitiesController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', 'AdminBusinessEntities')")]
    public function listAction(): \Symfony\Component\HttpFoundation\Response
    {
    }
}
