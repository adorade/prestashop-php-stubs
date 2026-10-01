<?php

namespace PrestaShop\PrestaShop\Core\Email;

/**
 * Interface EmailLogEraserInterface defines contract for email logs eraser.
 */
interface EmailLogEraserInterface
{
    /**
     * Erase given email logs.
     *
     * @param int[] $mailLogIds
     *
     * @return array
     */
    public function erase(array $mailLogIds);
    /**
     * Erase all email logs.
     *
     * @return bool TRUE if email logs where erased successfully or FALSE otherwise
     */
    public function eraseAll();
}
