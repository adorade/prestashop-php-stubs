<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler;

class AddOrderCustomerMessageHandler implements \PrestaShop\PrestaShop\Core\Domain\CustomerMessage\CommandHandler\AddOrderCustomerMessageHandlerInterface
{
    /**
     * @param TranslatorInterface $translator
     * @param ValidatorInterface $validator
     * @param int $contextShopId
     * @param int $contextLanguageId
     * @param int $contextEmployeeId
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \Symfony\Component\Validator\Validator\ValidatorInterface $validator, int $contextShopId, int $contextLanguageId, int $contextEmployeeId)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws CustomerMessageException
     * @throws OrderNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerMessage\Command\AddOrderCustomerMessageCommand $command): void
    {
    }
}
