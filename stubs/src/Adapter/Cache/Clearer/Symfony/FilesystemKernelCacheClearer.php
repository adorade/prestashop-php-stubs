<?php

namespace PrestaShop\PrestaShop\Adapter\Cache\Clearer\Symfony;

/**
 * This clearer uses a manual removal of files directly on the file system to clear
 * the kernel cache.
 *
 * It is the least favored method to clear because:
 *  - in the past this simple technique created some side effects
 *  - it doesn't initialize the future container like the cache:clear command does
 *
 * Note: we don't add too many try/catch because the SymfonyCacheClearer already wraps this service,
 * it allows keeping the code simpler in this service.
 */
#[\Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag('prestashop.kernel.cache_clearer')]
#[\Symfony\Component\DependencyInjection\Attribute\AsTaggedItem(priority: -1)]
class FilesystemKernelCacheClearer implements \PrestaShop\PrestaShop\Adapter\Cache\Clearer\Symfony\KernelCacheClearerInterface
{
    use \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SafeLoggerTrait;
    public const MANUAL_REMOVAL_TRIALS = 5;
    public function __construct(protected readonly \Psr\Log\LoggerInterface $logger, protected readonly \Symfony\Component\Filesystem\Filesystem $filesystem)
    {
    }
    public function clearKernelCache(\AppKernel $kernel, string $environment): bool
    {
    }
}
