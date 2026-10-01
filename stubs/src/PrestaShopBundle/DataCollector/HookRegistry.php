<?php

namespace PrestaShopBundle\DataCollector;

/**
 * Collect all hooks information dispatched during a request.
 *
 * One entry per hook name, addressed by name on every mutator.
 * Status promotion is asymmetric: CALLED is sticky and cannot be downgraded.
 */
final class HookRegistry
{
    public const HOOK_NOT_CALLED = 'notCalled';
    public const HOOK_NOT_REGISTERED = 'notRegistered';
    public const HOOK_CALLED = 'called';
    /**
     * Record that a hook was dispatched. Creates the entry on first dispatch,
     * increments `dispatch_count` and refreshes `args`/`location` on subsequent ones.
     */
    public function hookDispatched(string $hookName, array $hookArguments): void
    {
    }
    /**
     * Mark a hook as not registered (no listeners / not in DB). Asymmetric:
     * never downgrades from CALLED. Silently no-ops if the hook was never dispatched.
     */
    public function hookWasNotRegistered(string $hookName): void
    {
    }
    /**
     * A module callback was executed. Promotes status to CALLED and increments
     * `calls_count`. Silently no-ops if the hook was never dispatched.
     *
     * @param \ModuleCore $module
     */
    public function hookedByCallback(\PrestaShop\PrestaShop\Core\Module\Legacy\ModuleInterface $module, array $args, string $hookName): void
    {
    }
    /**
     * A module widget was rendered. Promotes status to CALLED and increments
     * `calls_count`. Silently no-ops if the hook was never dispatched.
     *
     * @param \ModuleCore $module
     */
    public function hookedByWidget(\PrestaShop\PrestaShop\Core\Module\Legacy\ModuleInterface $module, array $args, string $hookName): void
    {
    }
    /**
     * @return array<string, array> hooks whose code actually ran
     */
    public function getCalledHooks(): array
    {
    }
    /**
     * @return array<string, array> hooks dispatched but without any module producing output
     */
    public function getNotCalledHooks(): array
    {
    }
    /**
     * @return array<string, array> hooks dispatched without listeners (Symfony events not in DB)
     */
    public function getNotRegisteredHooks(): array
    {
    }
    /**
     * @return array<string, array> all dispatched hooks, regardless of status
     */
    public function getHooks(): array
    {
    }
}
