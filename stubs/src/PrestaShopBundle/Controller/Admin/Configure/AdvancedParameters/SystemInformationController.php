<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Responsible of "Configure > Advanced Parameters > Information" page display.
 */
class SystemInformationController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Adapter\Requirement\CheckRequirements $checkRequirements, \PrestaShop\PrestaShop\Adapter\System\SystemInformation $systemInformation): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function displayCheckFilesAction(\PrestaShop\PrestaShop\Adapter\Requirement\CheckMissingOrUpdatedFiles $requiredFilesChecker): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
