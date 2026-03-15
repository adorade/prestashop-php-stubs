<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler;

/**
 * @internal
 */
class ForwardCustomerThreadHandler implements \PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler\ForwardCustomerThreadHandlerInterface
{
    /**
     * @param Context $context
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\Context $context, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerService\Command\ForwardCustomerThreadCommand $command)
    {
    }
    /**
     * @param array $message
     * @param int|null $id_employee
     *
     * @return string
     */
    protected function renderMessage(array $message, $id_employee = null)
    {
    }
}
