<?php

namespace PrestaShopBundle\EventListener\API;

/**
 * We have to implement this extra security listener because ApiPlatform AccessDeniedListener is only called
 * AFTER ReadListener so the whole code of the provider is always executed before the security check is performed
 * this is particularly sensitive when the provider is used to delete something or to perform an action. But
 * even read operation should be blocked early if the API Client has no permission over them.
 *
 * So we do have to use some ApiPlatform internal tools that are not meant to be used outside the framework, but
 * if security was handled correctly by the framework we wouldn't need to do this.
 */
class ScopeCheckerListener
{
    use \ApiPlatform\State\Util\OperationRequestInitiatorTrait;
    public function __construct(\ApiPlatform\Metadata\Resource\Factory\ResourceMetadataCollectionFactoryInterface $resourceMetadataCollectionFactory, private readonly \Symfony\Bundle\SecurityBundle\Security $security)
    {
    }
    /**
     * Get the operation from the request (if it is a request associated to an ApiPlatform operation).
     * Check if some scopes were specified in the extraParameters, transform them into a security
     * expression understandable by the Security component and check if the operation is granted,
     * else throw an AccessDeniedException.
     *
     * @param \Symfony\Component\HttpKernel\Event\RequestEvent $event
     */
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
}
