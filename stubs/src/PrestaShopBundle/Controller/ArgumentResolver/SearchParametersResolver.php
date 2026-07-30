<?php

namespace PrestaShopBundle\Controller\ArgumentResolver;

/**
 * If an action inject instance of Filters, this class is responsible of
 * creating it from available sources.
 *
 * @deprecated Use FiltersBuilderResolver instead
 */
class SearchParametersResolver implements \Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    /**
     * SearchParametersResolver constructor.
     *
     * @param SearchParametersInterface $searchParameters
     * @param TokenStorageInterface $tokenStorage
     * @param AdminFilterRepository $adminFilterRepository
     * @param EventDispatcherInterface $dispatcher
     * @param int $shopId The Shop id
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Search\SearchParametersInterface $searchParameters, \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage, \PrestaShopBundle\Entity\Repository\AdminFilterRepository $adminFilterRepository, \Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher, $shopId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function supports(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Doctrine\ORM\ORMInvalidArgumentException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function resolve(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument)
    {
    }
}
