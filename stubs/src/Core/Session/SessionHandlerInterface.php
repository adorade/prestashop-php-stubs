<?php

namespace PrestaShop\PrestaShop\Core\Session;

/**
 * SessionHandlerInterface is used to set PHP Sessions cookie parameters
 */
interface SessionHandlerInterface
{
    /**
     * Initialize session
     *
     * @return void
     */
    public function init(): void;
    /**
     * Return the current session
     *
     * @return ?SessionInterface
     */
    public function getSession(): ?\Symfony\Component\HttpFoundation\Session\SessionInterface;
}
