<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * Class AddRootCategoryHandler.
 */
final class AddRootCategoryHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler\AddRootCategoryHandlerInterface
{
    /**
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\AddRootCategoryCommand $command)
    {
    }
}
