<?php

namespace PrestaShopBundle\Controller\Api;

class I18nController extends \PrestaShopBundle\Controller\Api\ApiController
{
    /**
     * Show translation for page-app build with vue-js.
     *
     * No access restrictions because it is required for VueJs translations
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listTranslationAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
