<?php

namespace PrestaShop\PrestaShop\Adapter\Cache\Clearer;

/**
 * This service is responsible for clearing the Symfony cache, it needs to clear all the
 * caches for the different Symfony applications and environments. But the biggest challenge
 * is that it also needs to clear its own cache while still being executed.
 *
 * This topic gave us a lot of trouble throughout the years and caused many different unexpected
 * side effects, over the years some strategies were set to overcome these side effects:
 *
 *  - the first one is that you CANNOT remove the cache right at the moment you ask for it (for
 *    example right after a module installation), because the process still needs to handle many
 *    other steps, if the cache is cleared in the middle of the process if will create bugs for the
 *    remaining code in the process To overcome this we use register_shutdown_function which means
 *    the cache clearing will be executed at the very end of the process when all the rest has been
 *    done
 *  - the second issue is that while you are clearing the cache some other processes (concurrent ajax
 *    requests, or other opened tabs) may start and start booting the kernel while its cache is being
 *    built, and it creates bugs with multiple cache folders being used. To avoid this we use a custom
 *    lock system At the very moment the SymfonyCacheClear::clear method is called we lock the current
 *    application, so all the following request will be stalled and will remain in a waiting state until
 *    the lock is released. When we clear the other applications/environments we also lock them one by
 *    one and unlock them after they are cleared, at the end of the clear operations (when all environments
 *    have been cleared) we finally release the current process which initiated the global clearing
 *  - not all environments are similar and some have strong restrictions (unable to use exec function
 *    php binary not accessible in the cache, ...) so no solution is guaranteed to work everywhere, which
 *    is why we implemented multiple KernelCacheClearerInterface that can adapt to the environment, this
 *    service will execute them in an order defined by us (based on their potential to work correctly) and
 *    if one solution fails it will fallback to the next one
 *
 * @internal
 */
final class SymfonyCacheClearer implements \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface
{
    use \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SafeLoggerTrait;
    public function __construct(
        #[\Symfony\Component\DependencyInjection\Attribute\TaggedIterator('prestashop.kernel.cache_clearer')]
        protected readonly iterable $kernelCacheClearers,
        protected readonly \Psr\Log\LoggerInterface $logger,
        protected readonly \PrestaShopBundle\Cache\LegacyCacheClearer $legacyCacheClearer
    )
    {
    }
    /**
     * {@inheritdoc}
     */
    public function clear()
    {
    }
}
