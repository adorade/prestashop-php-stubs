<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject;

/**
 * Class provides attachment id
 */
class AttachmentId
{
    /**
     * @param int $id
     *
     * @throws AttachmentConstraintException]
     */
    public function __construct(int $id)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
