<?php

namespace PrestaShop\PrestaShop\Adapter\OrderState\CommandHandler;

/**
 * Handles commands which edits given order state with provided data.
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class EditOrderStateHandler extends \PrestaShop\PrestaShop\Adapter\OrderState\CommandHandler\AbstractOrderStateHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderState\CommandHandler\EditOrderStateHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\OrderState\OrderStateFileUploaderInterface $fileUploader
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\OrderState\OrderStateFileUploaderInterface $fileUploader)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderState\Command\EditOrderStateCommand $command)
    {
    }
}
