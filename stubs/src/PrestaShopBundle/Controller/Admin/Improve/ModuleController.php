<?php

namespace PrestaShopBundle\Controller\Admin\Improve;

/**
 * Responsible of "Improve > Modules > Modules & Services > Catalog / Manage" page display.
 */
class ModuleController extends \PrestaShopBundle\Controller\Admin\Improve\Modules\ModuleAbstractController
{
    public const CONTROLLER_NAME = 'ADMINMODULESSF';
    public const MAX_MODULES_DISPLAYED = 6;
    public function __construct(private readonly \Twig\Environment $twig, private readonly \Symfony\Component\Validator\Validator\ValidatorInterface $validator, private readonly \Doctrine\ORM\EntityManagerInterface $entityManager)
    {
    }
    /**
     * Controller responsible for displaying "Catalog Module Grid" section of Module management pages with ajax.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', 'ADMINMODULESSF_')")]
    public function manageAction(\PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $modulesProvider, \PrestaShopBundle\Service\DataProvider\Admin\CategoriesProvider $categoriesProvider): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param string $module_name
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', 'ADMINMODULESSF_') || is_granted('create', 'ADMINMODULESSF_') || is_granted('update', 'ADMINMODULESSF_') || is_granted('delete', 'ADMINMODULESSF_')")]
    public function configureModuleAction(string $module_name, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext): \Symfony\Component\HttpFoundation\Response
    {
    }
    public function moduleAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $modulesProvider, \PrestaShop\PrestaShop\Core\Module\ModuleManager $moduleManager): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Controller responsible for importing new module from DropFile zone in BO.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function importModuleAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Module\ModuleManager $moduleManager, \PrestaShop\PrestaShop\Core\Module\SourceHandler\ZipSourceHandler $zipSource): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    protected function getTranslationLinks(\PrestaShop\PrestaShop\Adapter\Module\Module $module, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext): array
    {
    }
    /**
     * Common method for all module related controller for getting the header buttons.
     *
     * @return array
     */
    protected function getConfigureToolbarButtons(?\PrestaShop\PrestaShop\Adapter\Module\Module $module): array
    {
    }
}
