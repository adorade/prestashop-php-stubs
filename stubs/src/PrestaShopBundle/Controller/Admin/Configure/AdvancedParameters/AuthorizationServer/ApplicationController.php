<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters\AuthorizationServer;

/**
 * Manages the "Configure > Advanced Parameters > Authorization Server" page.
 *
 * @experimental
 */
class ApplicationController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('delete', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")
     *
     * @param AuthorizedApplicationsFilters $filters the list of filters from the request
     *
     * @return Response
     */
    public function indexAction(\PrestaShop\PrestaShop\Core\Search\Filters\AuthorizedApplicationsFilters $filters): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('delete', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")
     */
    public function viewAction(): void
    {
    }
    /**
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     */
    public function createAction(): void
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     */
    public function editAction(): void
    {
    }
    /**
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")
     */
    public function deleteAction(): void
    {
    }
}
