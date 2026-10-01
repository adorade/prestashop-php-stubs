<?php

namespace PrestaShop\PrestaShop\Adapter\Cache\Clearer\Symfony;

/**
 * This clearer uses an Application function to run the cache:clear command, it is based on the
 * recommended way, by Symfony, of executing command from controllers
 * https://symfony.com/doc/6.4/console/command_in_controller.html
 *
 * It is only the second favored method because all the cache clear are done in the single same
 * initial process, thus it has more risk to cause conflicts or to reach a memory limit than the
 * exec method.
 *
 * Note: we don't add too many try/catch because the SymfonyCacheClearer already wraps this service,
 * it allows keeping the code simpler in this service.
 */
#[\Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag('prestashop.kernel.cache_clearer')]
#[\Symfony\Component\DependencyInjection\Attribute\AsTaggedItem(priority: 5)]
class ApplicationKernelCacheClearer implements \PrestaShop\PrestaShop\Adapter\Cache\Clearer\Symfony\KernelCacheClearerInterface
{
    use \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SafeLoggerTrait;
    public function __construct(protected readonly \Psr\Log\LoggerInterface $logger)
    {
    }
    public function clearKernelCache(\AppKernel $kernel, string $environment): bool
    {
    }
    protected function clearCache(\AppKernel $kernel): bool
    {
    }
    protected function warmUpCache(\AppKernel $kernel): bool
    {
    }
    protected function runCommand(\AppKernel $kernel, \Symfony\Component\Console\Input\ArrayInput $input, string $successMessage, $errorMessage): bool
    {
    }
    /**
     * We need to create a new kernel object since it will influence the internal default values for environment and debug mode
     */
    protected function buildKernel(\AppKernel $kernel, string $environment, bool $debugMode): \AppKernel
    {
    }
}
