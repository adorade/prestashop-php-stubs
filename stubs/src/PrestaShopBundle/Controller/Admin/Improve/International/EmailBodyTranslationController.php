<?php

namespace PrestaShopBundle\Controller\Admin\Improve\International;

class EmailBodyTranslationController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        string $locale,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.email_body_template')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $gridFactory,
        \PrestaShop\PrestaShop\Core\Search\Filters\EmailBodyTemplateFilters $filters
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_international_translations_show_settings')]
    public function editAction(\Symfony\Component\HttpFoundation\Request $request, string $locale, string $source, string $templateName): \Symfony\Component\HttpFoundation\Response
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function searchAction(
        \Symfony\Component\HttpFoundation\Request $request,
        string $locale,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.definition.factory.email_body_template')]
        \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\EmailBodyTemplateDefinitionFactory $definitionFactory
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
