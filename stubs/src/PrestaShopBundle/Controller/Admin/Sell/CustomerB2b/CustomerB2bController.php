<?php

namespace PrestaShopBundle\Controller\Admin\Sell\CustomerB2b;

/**
 * Class CustomerB2bController manages the "Sell > Customers B2B" page.
 */
class CustomerB2bController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', 'AdminCustomersB2b')")]
    public function listAction(): \Symfony\Component\HttpFoundation\Response
    {
    }
}
