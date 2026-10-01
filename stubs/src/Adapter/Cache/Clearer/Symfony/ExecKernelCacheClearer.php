<?php

namespace PrestaShop\PrestaShop\Adapter\Cache\Clearer\Symfony;

/**
 * This clearer uses exec function to run the bin/console cache:clear command in a separate process,
 * so it reduces the risk of memory limits.
 *
 * It is the favored method to clear the cache so far.
 *
 * Note: we don't add too many try/catch because the SymfonyCacheClearer already wraps this service,
 * it allows keeping the code simpler in this service.
 */
#[\Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag('prestashop.kernel.cache_clearer')]
#[\Symfony\Component\DependencyInjection\Attribute\AsTaggedItem(priority: 10)]
class ExecKernelCacheClearer implements \PrestaShop\PrestaShop\Adapter\Cache\Clearer\Symfony\KernelCacheClearerInterface
{
    use \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SafeLoggerTrait;
    public function __construct(protected readonly \Psr\Log\LoggerInterface $logger)
    {
    }
    public function clearKernelCache(\AppKernel $kernel, string $environment): bool
    {
    }
    protected function clearCache(\AppKernel $kernel, string $environment): bool
    {
    }
    protected function warmUpCache(\AppKernel $kernel, string $environment): bool
    {
    }
    protected function execCommand(\AppKernel $kernel, string $command, string $successMessage, $errorMessage): bool
    {
    }
    protected function isExecDisabled(): bool
    {
    }
}
