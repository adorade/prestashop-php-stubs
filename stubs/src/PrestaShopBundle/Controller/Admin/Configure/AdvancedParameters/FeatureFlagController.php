<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Manages the "Configure > Advanced Parameters > Experimental Features" page.
 */
#[\PrestaShopBundle\Controller\Attribute\AllShopContext]
class FeatureFlagController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.feature_flags.stable_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $stableFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.feature_flags.beta_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $betaFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
}
