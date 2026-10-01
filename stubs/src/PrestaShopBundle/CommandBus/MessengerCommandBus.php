<?php

namespace PrestaShopBundle\CommandBus;

/**
 * Class MessengerCommandBus is the Symfony Messenger CommandsBus implementation for PrestaShop's contract.
 */
final class MessengerCommandBus implements \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface
{
    use \Symfony\Component\Messenger\HandleTrait {
        \Symfony\Component\Messenger\HandleTrait::handle as process;
    }
    public function __construct(\Symfony\Component\Messenger\MessageBusInterface $messageBus)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle($command)
    {
    }
}
