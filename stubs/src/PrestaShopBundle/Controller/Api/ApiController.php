<?php

namespace PrestaShopBundle\Controller\Api;

abstract class ApiController
{
    protected \Psr\Log\LoggerInterface $logger;
    protected \Symfony\Component\DependencyInjection\ContainerInterface $container;
    protected \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker;
    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
    }
    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
    }
    public function setAuthorizationChecker(\Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker)
    {
    }
    /**
     * @param \Symfony\Component\HttpKernel\Exception\HttpException $exception
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    protected function handleException(\Symfony\Component\HttpKernel\Exception\HttpException $exception)
    {
    }
    /**
     * @param string $content
     *
     * @return array
     */
    protected function guardAgainstInvalidJsonBody($content)
    {
    }
    /**
     * @see \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function clearCache()
    {
    }
    /**
     * Add additional info to JSON return.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShopBundle\Api\QueryParamsCollection|null $queryParams
     * @param array $headers
     *
     * @return array
     */
    protected function addAdditionalInfo(\Symfony\Component\HttpFoundation\Request $request, ?\PrestaShopBundle\Api\QueryParamsCollection $queryParams = null, $headers = [])
    {
    }
    /**
     * @param array $data
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShopBundle\Api\QueryParamsCollection|null $queryParams
     * @param int $status
     * @param array $headers
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    protected function jsonResponse($data, \Symfony\Component\HttpFoundation\Request $request, ?\PrestaShopBundle\Api\QueryParamsCollection $queryParams = null, $status = 200, $headers = [])
    {
    }
    /**
     * Checks if access is granted.
     *
     * @param mixed $accessLevel
     * @param string $controller name of the controller
     *
     * @return bool
     */
    protected function isGranted($accessLevel, $controller)
    {
    }
}
