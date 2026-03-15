<?php

namespace PrestaShop\PrestaShop\Core\Session;

class SessionHandler implements \PrestaShop\PrestaShop\Core\Session\SessionHandlerInterface
{
    /**
     *  @var Session
     */
    protected $session;
    /**
     * @var int
     */
    protected $lifetime;
    /**
     * @var bool
     */
    protected $isSecure;
    /**
     * @var string
     */
    protected $sameSite;
    /**
     * @var string
     */
    protected $path;
    public function __construct(int $lifetime, bool $isSecure, string $sameSite, string $shopUri)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getSession(): ?\Symfony\Component\HttpFoundation\Session\SessionInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function init(): void
    {
    }
    /**
     * Is session disabled
     *
     * @return bool
     */
    protected function isSessionDisabled(): bool
    {
    }
    /**
     * Is session started
     *
     * @return bool
     */
    protected function isSessionStarted(): bool
    {
    }
    /**
     * Get Session status
     *
     * @return int
     */
    protected function getSessionStatus(): int
    {
    }
}
