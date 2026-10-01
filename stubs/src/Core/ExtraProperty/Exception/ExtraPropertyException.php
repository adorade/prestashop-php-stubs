<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Exception;

/**
 * Base exception class for all ExtraProperty-related exceptions.
 *
 * Extend this class to create more fine-grained exception types within the
 * ExtraProperty namespace so callers can catch them individually or as a group.
 */
class ExtraPropertyException extends \PrestaShop\PrestaShop\Core\Exception\CoreException
{
    /**
     * Builds an exception whose message is "$prefix$bareMessage" while keeping the bare message
     * retrievable — use this instead of baking a locating prefix ("Line %d: ",
     * "ExtraPropertyDefinition: "…) into the message string, so a consumer that shows the error
     * IN PLACE (e.g. on the offending form row) does not have to strip the prefix back off.
     */
    public static function prefixed(string $prefix, string $bareMessage, ?\Throwable $previous = null): static
    {
    }
    /**
     * The message without the locating prefix prefixed() added — the full message when the
     * exception was not built through prefixed().
     */
    public function getBareMessage(): string
    {
    }
}
