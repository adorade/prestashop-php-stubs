<?php

namespace PrestaShop\PrestaShop\Adapter\Title\CommandHandler;

/**
 * Handles creation of title
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class AddTitleHandler extends \PrestaShop\PrestaShop\Adapter\Title\AbstractTitleHandler implements \PrestaShop\PrestaShop\Core\Domain\Title\CommandHandler\AddTitleHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Title\Exception\TitleException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Title\Command\AddTitleCommand $command): \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\TitleId
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\TitleId $titleId
     * @param \PrestaShop\PrestaShop\Core\Domain\Title\Command\AddTitleCommand $command
     *
     * @return void
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Title\Exception\TitleImageUploadingException
     */
    protected function uploadTitleImage(\PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\TitleId $titleId, \PrestaShop\PrestaShop\Core\Domain\Title\Command\AddTitleCommand $command): void
    {
    }
}
