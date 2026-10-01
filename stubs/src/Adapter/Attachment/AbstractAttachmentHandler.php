<?php

namespace PrestaShop\PrestaShop\Adapter\Attachment;

/**
 * Abstract attachment handler
 */
abstract class AbstractAttachmentHandler
{
    /**
     * @param \Symfony\Component\Validator\Validator\ValidatorInterface $validator
     */
    public function __construct(\Symfony\Component\Validator\Validator\ValidatorInterface $validator)
    {
    }
    /**
     * @param array $localizedTexts
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentConstraintException
     */
    protected function assertHasDefaultLanguage(array $localizedTexts)
    {
    }
    /**
     * @param array $localizedDescription
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentConstraintException
     */
    protected function assertDescriptionContainsCleanHtml(array $localizedDescription)
    {
    }
    /**
     * @return string
     */
    protected function getUniqueFileName(): string
    {
    }
    /**
     * @param \Attachment $attachment
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentConstraintException
     * @throws \PrestaShopException
     */
    protected function assertValidFields(\Attachment $attachment)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId $attachmentId
     *
     * @return \Attachment
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentNotFoundException
     */
    protected function getAttachment(\PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId $attachmentId): \Attachment
    {
    }
    /**
     * Deletes legacy Attachment
     *
     * @param \Attachment $attachment
     *
     * @return bool
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\DeleteAttachmentException
     */
    protected function deleteAttachment(\Attachment $attachment): bool
    {
    }
}
