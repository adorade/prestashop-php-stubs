<?php

namespace PrestaShop\PrestaShop\Adapter\Attachment;

/**
 * Methods to access Attachment data source
 */
class AttachmentRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix)
    {
    }
    /**
     * @param AttachmentId $attachmentId
     *
     * @return Attachment
     *
     * @throws CoreException
     * @throws AttachmentNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId $attachmentId): \Attachment
    {
    }
    /**
     * @param ProductId $productId
     *
     * @return array<int, array<string, string|array<int, string>>>
     */
    public function getProductAttachments(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): array
    {
    }
    /**
     * @param AttachmentId $attachmentId
     *
     * @throws CoreException
     */
    public function assertAttachmentExists(\PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId $attachmentId): void
    {
    }
    public function search(string $searchPhrase): array
    {
    }
}
