<?php

namespace PrestaShopBundle\Controller\Api;

abstract class ApiController
{
    /**
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * @param LoggerInterface $logger
     */
    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * @var ContainerInterface
     */
    protected $container;
    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
    }
    /**
     * @param HttpException $exception
     *
     * @return JsonResponse
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
     * @param Request $request
     * @param QueryParamsCollection|null $queryParams
     * @param array $headers
     *
     * @return array
     */
    protected function addAdditionalInfo(\Symfony\Component\HttpFoundation\Request $request, \PrestaShopBundle\Api\QueryParamsCollection $queryParams = null, $headers = [])
    {
    }
    /**
     * @param array $data
     * @param Request $request
     * @param QueryParamsCollection|null $queryParams
     * @param int $status
     * @param array $headers
     *
     * @return JsonResponse
     */
    protected function jsonResponse($data, \Symfony\Component\HttpFoundation\Request $request, \PrestaShopBundle\Api\QueryParamsCollection $queryParams = null, $status = 200, $headers = [])
    {
    }
    /**
     * Checks if access is granted.
     *
     * @param array $accessLevel
     * @param string $controller name of the controller
     *
     * @return bool
     */
    protected function isGranted(array $accessLevel, $controller)
    {
    }
}
