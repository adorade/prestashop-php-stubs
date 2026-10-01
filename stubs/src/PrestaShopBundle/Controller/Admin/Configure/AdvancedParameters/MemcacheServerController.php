<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Responsible for "Configure > Advanced Parameters > Performance" servers block management.
 */
class MemcacheServerController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    public const CONTROLLER_NAME = 'AdminPerformance';
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function listAction(
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.memcache_server.manager')]
        \PrestaShop\PrestaShop\Adapter\Cache\MemcacheServerManager $memcacheServerManager
    ): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_servers_test')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function testAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.memcache_server.manager')]
        \PrestaShop\PrestaShop\Adapter\Cache\MemcacheServerManager $memcacheServerManager
    ): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_servers_test')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function addAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.memcache_server.manager')]
        \PrestaShop\PrestaShop\Adapter\Cache\MemcacheServerManager $memcacheServerManager
    ): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_servers_test')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function deleteAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.memcache_server.manager')]
        \PrestaShop\PrestaShop\Adapter\Cache\MemcacheServerManager $memcacheServerManager
    ): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
