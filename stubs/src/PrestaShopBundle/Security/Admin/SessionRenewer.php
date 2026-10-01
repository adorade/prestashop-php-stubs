<?php

namespace PrestaShopBundle\Security\Admin;

/**
 * Because PS don't use Symfony login feature, we use this service to fix CVE-2022-24895. This class will be deprecated
 * when BO login/logout will use full Symfony process
 *
 * @internal
 */
final class SessionRenewer
{
    /**
     * @param \Symfony\Component\Security\Csrf\TokenStorage\ClearableTokenStorageInterface $storage
     * @param \Symfony\Component\HttpFoundation\RequestStack $requestStack
     */
    public function __construct(private readonly \Symfony\Component\Security\Csrf\TokenStorage\ClearableTokenStorageInterface $storage, private readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
    }
    /**
     * Change PHPSESSID and clear tokens registered in session
     *
     * @return void
     */
    public function renew(): void
    {
    }
}
