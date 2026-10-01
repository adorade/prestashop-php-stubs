<?php

namespace PrestaShopBundle\Controller\Api;

class TranslationController extends \PrestaShopBundle\Controller\Api\ApiController
{
    public function __construct(private readonly \PrestaShopBundle\Translation\TranslatorInterface $translator, private readonly \PrestaShopBundle\Api\QueryTranslationParamsCollection $queryParams, private readonly \PrestaShopBundle\Service\TranslationService $translationService)
    {
    }
    /**
     * Show translations for 1 domain & 1 locale given & 1 theme given (optional).
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function listDomainTranslationAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Show tree for translation page with some params.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function listTreeAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Route to edit translation.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller')) or is_granted('update', request.get('_legacy_controller'))")]
    public function translationEditAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Route to reset translation.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller')) or is_granted('update', request.get('_legacy_controller'))")]
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
