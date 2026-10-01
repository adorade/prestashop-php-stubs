<?php

namespace PrestaShopBundle\Routing;

/**
 * Builds absolute back-office URLs without depending on the admin Router.
 *
 * The admin routing collection is only registered in the admin kernel, so
 * services triggered from other kernels (admin-api, CLI) cannot use
 * $router->generate() to build admin URLs. This generator relies on the
 * shop base URL and the "prestashop.admin_folder_name" container parameter
 * (defined by AppKernel and therefore available everywhere) so the same URLs
 * can be produced from any kernel.
 */
class AdminUrlGenerator
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, private readonly string $adminFolderName)
    {
    }
    public function generateAdminUrl(string $urlPath): string
    {
    }
}
