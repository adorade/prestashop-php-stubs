<?php

namespace PrestaShopBundle\Controller\Admin\Improve\International;

/**
 * CountryController is responsible for handling "Improve > International > Locations > Countries"
 */
class CountryController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show countries listing page
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param CountryFilters $filters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\CountryFilters $filters): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show "Add new" country form and handles its submit.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_countries_index",
     *     message="You need permission to create new country."
     * )
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param int $countryId
     * @param Request $request
     *
     * @return Response
     */
    public function editAction(int $countryId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @return array
     */
    protected function getCountryToolbarButtons(): array
    {
    }
    /**
     * Returns country error messages mapping.
     *
     * @param Exception $e
     *
     * @return array
     */
    protected function getErrorMessages(\Exception $e): array
    {
    }
}
