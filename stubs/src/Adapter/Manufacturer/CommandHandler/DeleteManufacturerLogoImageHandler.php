<?php

namespace PrestaShop\PrestaShop\Adapter\Manufacturer\CommandHandler;

/**
 * Handles command which deletes manufacturer cover image using legacy object model
 */
class DeleteManufacturerLogoImageHandler extends \PrestaShop\PrestaShop\Adapter\Manufacturer\CommandHandler\AbstractManufacturerCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Manufacturer\CommandHandler\DeleteManufacturerLogoImageHandlerInterface
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
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command\DeleteManufacturerLogoImageCommand $command): void
    {
    }
}
