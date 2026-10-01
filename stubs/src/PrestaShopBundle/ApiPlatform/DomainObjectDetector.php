<?php

namespace PrestaShopBundle\ApiPlatform;

/**
 * This service detects if a class or an object is mart of the Domain namespace, either by checking
 * if it's part of the registered commands and queries. If they are not it checks if they are part
 * of domain namespaces like Value Objects or Query Results.
 */
class DomainObjectDetector
{
    public function __construct(protected readonly array $commandsAndQueries, protected readonly array $domainNamespaces)
    {
    }
    public function isDomainObject(mixed $objectOrType): bool
    {
    }
}
