<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler;

class AddOrderCustomerMessageHandler implements \PrestaShop\PrestaShop\Core\Domain\CustomerMessage\CommandHandler\AddOrderCustomerMessageHandlerInterface
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \Symfony\Component\Validator\Validator\ValidatorInterface $validator
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
     * @throws \PrestaShop\PrestaShop\Core\Domain\CustomerMessage\Exception\CustomerMessageException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerMessage\Command\AddOrderCustomerMessageCommand $command): void
    {
    }
}
