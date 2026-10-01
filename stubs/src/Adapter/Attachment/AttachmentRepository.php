<?php

namespace PrestaShop\PrestaShop\Adapter\Attachment;

/**
 * Methods to access Attachment data source
 */
class AttachmentRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId $attachmentId
     *
     * @return \Attachment
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId $attachmentId): \Attachment
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return array<int, array<string, string|array<int, string>>>
     */
    public function getProductAttachments(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId $attachmentId
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function assertAttachmentExists(\PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId $attachmentId): void
    {
    }
    public function search(string $searchPhrase): array
    {
    }
}
