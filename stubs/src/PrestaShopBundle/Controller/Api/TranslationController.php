<?php

namespace PrestaShopBundle\Controller\Api;

class TranslationController extends \PrestaShopBundle\Controller\Api\ApiController
{
    /**
     * @var QueryTranslationParamsCollection
     */
    public $queryParams;
    /**
     * @var TranslationService
     */
    public $translationService;
    /**
     * Show translations for 1 domain & 1 locale given & 1 theme given (optional).
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listDomainTranslationAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Show tree for translation page with some params.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listTreeAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Route to edit translation.
     *
     * @AdminSecurity("is_granted(['create', 'update'], request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function translationEditAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Route to reset translation.
     *
     * @AdminSecurity("is_granted(['create', 'update'], request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function translationResetAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @param array $content
     */
    protected function guardAgainstInvalidTranslationResetRequest($content)
    {
    }
}
