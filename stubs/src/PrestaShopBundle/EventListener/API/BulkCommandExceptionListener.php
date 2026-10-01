<?php

namespace PrestaShopBundle\EventListener\API;

/**
 * Wraps BulkCommandExceptionInterface in an HttpException with status 207
 * so that the FlattenException created by Symfony carries the correct HTTP status code.
 * The response body formatting is handled by BulkCommandExceptionNormalizer.
 */
class BulkCommandExceptionListener
{
    public function onKernelException(\Symfony\Component\HttpKernel\Event\ExceptionEvent $event): void
    {
    }
}
