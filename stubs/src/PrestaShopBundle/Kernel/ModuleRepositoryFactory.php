<?php

namespace PrestaShopBundle\Kernel;

/**
 * Class ModuleRepositoryFactory is used to build the ModuleRepository in context where symfony container is not
 * available or not yet initialised (ex: AppKernel, PrestaShop\PrestaShop\Adapter\ContainerBuilder).
 * This factory is able to fetch the necessary parameters itself and builds the database connection for ModuleRepository.
 *
 * WARNING: this factory is only to be used in the specific cases mentioned above, for any other case please use the
 * 'prestashop.module_kernel.repository' or 'prestashop.bundle.repository.module' depending on your needs.
 *
 * @deprecated Since 1.7.8
 */
class ModuleRepositoryFactory
{
    public static function getInstance()
    {
    }
    /**
     * @param array|null $parameters
     */
    public function __construct(array $parameters = null)
    {
    }
    /**
     * @return ModuleRepository
     *
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getRepository()
    {
    }
}
