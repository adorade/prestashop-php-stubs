<?php

namespace PrestaShopBundle\CommandBus\Middleware;

/**
 * Registers every command that was executed in system
 */
final class CommandRegisterMiddleware implements \Symfony\Component\Messenger\Middleware\MiddlewareInterface
{
    public function __construct(private readonly \Symfony\Component\Messenger\Handler\HandlersLocatorInterface $handlersLocator, private readonly \PrestaShop\PrestaShop\Core\CommandBus\ExecutedCommandRegistry $executedCommandRegistry)
    {
    }
    public function handle(\Symfony\Component\Messenger\Envelope $envelope, \Symfony\Component\Messenger\Middleware\StackInterface $stack): \Symfony\Component\Messenger\Envelope
    {
    }
}
