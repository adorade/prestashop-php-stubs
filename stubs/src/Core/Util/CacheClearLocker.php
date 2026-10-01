<?php

namespace PrestaShop\PrestaShop\Core\Util;

/**
 * This class handles a lock file that is used between processes to warn them that the Symfony cache is being cleared and other
 * processes should wait until it is done to continue their action. It allows being sure the container is up-to-date after some actions
 * that modify it are done (feature flag switching, module actions, ...). We use the flock function inner blocking system to temporarily
 * stop the processes. While the file is locked all other process wait until the lock is freed.
 *
 * When the initial process is done and releases the lock file all the locked processes will resume their job.
 */
class CacheClearLocker
{
    /**
     * Lock stream is saved as static field, this way if multiple services try to lock the same file (this can happen in
     * test environment), they will be able to detect that a lock has already been made by the current process.
     *
     * @var array<string, resource>
     */
    protected static array $lockStream = [];
    /**
     * Perform a lock on a file, this lock will be unlocked once the unlockFile method is called.
     * Until then any other process will have to wait until the file is unlocked.
     *
     * @param string $environment Kernel environment (prod, dev, test)
     * @param string $appId Kernel application ID (admin, admin-api, front)
     *
     * @return bool returns boolean indicating if the lock file was successfully locked
     */
    public static function lock(string $environment, string $appId): bool
    {
    }
    /**
     * Release the lock on the file, this will unblock processes that were waiting for it.
     *
     * @param string $environment Kernel environment (prod, dev, test)
     * @param string $appId Kernel application ID (admin, admin-api, front)
     *
     * @return void
     */
    public static function unlock(string $environment, string $appId): void
    {
    }
    /**
     * This method is blocking, it means no further code will be executed after this method is called
     * until the locked file has been released by another process. If no process locked the file it
     * executes instantaneously.
     *
     * @param string $environment Kernel environment (prod, dev, test)
     * @param string $appId Kernel application ID (admin, admin-api, front)
     *
     * @return void
     */
    public static function waitUntilUnlocked(string $environment, string $appId): void
    {
    }
    /**
     * @param resource $lockStream
     */
    protected static function unlockCacheStream($lockStream, string $lockPath): void
    {
    }
    /**
     * The lock file path must reflect the kernel it is linked to, but it's important that it's not in the kernel
     * cache folder itself because the whole folder could be removed during cache clearing, and we don't want the lock
     * to be removed when that happens, or the lock file to prevent the removal either.
     *
     * @param string $environment Kernel environment (prod, dev, test)
     * @param string $appId Kernel application ID (admin, admin-api, front)
     *
     * @return string
     */
    protected static function getClearCacheLockPath(string $environment, string $appId): string
    {
    }
    protected static function getCacheDir(): string
    {
    }
    protected static function getProjectDir(): string
    {
    }
}
