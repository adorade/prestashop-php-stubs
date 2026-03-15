<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update;

/**
 * Provides method to update Product-Attachment association
 */
class ProductAttachmentUpdater
{
    /**
     * @param ProductRepository $productRepository
     * @param AttachmentRepository $attachmentRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Attachment\AttachmentRepository $attachmentRepository)
    {
    }
    /**
     * @param ProductId $productId
     * @param AttachmentId $attachmentId
     *
     * @throws CannotUpdateProductException
     * @throws CoreException
     */
    public function associateProductAttachment(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId $attachmentId): void
    {
    }
    /**
     * Removes previous association and sets new one with provided attachments
     *
     * @param ProductId $productId
     * @param AttachmentId[] $attachmentIds
     *
     * @throws CannotUpdateProductException
     * @throws CoreException
     */
    public function setAttachments(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $attachmentIds): void
    {
    }
}
