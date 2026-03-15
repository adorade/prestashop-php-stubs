<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler;

/**
 * Handles command which deletes supplier cover image using legacy object model
 */
class DeleteSupplierLogoImageHandler implements \PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler\DeleteSupplierLogoImageHandlerInterface
{
    /**
     * @var string
     */
    protected $imageDir;
    /**
     * @var string
     */
    protected $tmpImageDir;
    public function __construct(string $imageDir, string $tmpImageDir)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\DeleteSupplierLogoImageCommand $command): void
    {
    }
}
