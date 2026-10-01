<?php

namespace PrestaShop\PrestaShop\Adapter\Email;

/**
 * Class EmailLogEraser provides API for erasing email logs.
 *
 * @internal
 */
final class EmailLogEraser implements \PrestaShop\PrestaShop\Core\Email\EmailLogEraserInterface
{
    /**
     * {@inheritdoc}
     */
    public function erase(array $mailLogIds): array
    {
    }
    /**
     * {@inheritdoc}
     */
    public function eraseAll(): bool
    {
    }
}
