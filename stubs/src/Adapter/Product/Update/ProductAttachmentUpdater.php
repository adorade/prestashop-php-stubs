<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update;

/**
 * Provides method to update Product-Attachment association
 */
class ProductAttachmentUpdater
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Adapter\Attachment\AttachmentRepository $attachmentRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Attachment\AttachmentRepository $attachmentRepository)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId $attachmentId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\CannotUpdateProductException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function associateProductAttachment(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId $attachmentId): void
    {
    }
    /**
     * Removes previous association and sets new one with provided attachments
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId[] $attachmentIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\CannotUpdateProductException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function setAttachments(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $attachmentIds): void
    {
    }
}
