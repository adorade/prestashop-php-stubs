<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\Configuration;

/**
 * Stores attachment validation configuration values
 */
final class AttachmentConstraint
{
    /**
     * Maximum length for name (value is constrained by database)
     */
    public const MAX_NAME_LENGTH = 32;
}
