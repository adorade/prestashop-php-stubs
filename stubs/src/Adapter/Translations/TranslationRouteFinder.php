<?php

namespace PrestaShop\PrestaShop\Adapter\Translations;

/**
 * Class TranslationRouteFinder finds the correct route for translations.
 */
class TranslationRouteFinder
{
    /**
     * Mails translations type.
     */
    public const MAILS = 'mails';
    /**
     * Modules translations type.
     */
    public const MODULES = 'modules';
    /**
     * Email body translations type.
     */
    public const BODY = 'body';
    /**
     * Themes translations type.
     */
    public const THEMES = 'themes';
    /**
     * @param \PrestaShopBundle\Service\TranslationService $translationService
     * @param \Link $link
     * @param \PrestaShop\PrestaShop\Core\Module\ModuleRepositoryInterface $moduleRepository
     * @param \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagStateChecker
     */
    public function __construct(\PrestaShopBundle\Service\TranslationService $translationService, \Link $link, \PrestaShop\PrestaShop\Core\Module\ModuleRepositoryInterface $moduleRepository, \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagStateChecker)
    {
    }
    /**
     * Finds the correct translation route out of given query.
     *
     * @return string
     */
    public function findRoute(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Finds parameters for translation route out of given query.
     *
     * @return array of route parameters
     */
    public function findRouteParameters(\Symfony\Component\HttpFoundation\Request $request): array
    {
    }
}
