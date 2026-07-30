<?php

namespace PrestaShop\PrestaShop\Adapter\Attachment;

/**
 * Abstract attachment handler
 */
abstract class AbstractAttachmentHandler
{
    /**
     * @param ValidatorInterface $validator
     */
    public function __construct(\Symfony\Component\Validator\Validator\ValidatorInterface $validator)
    {
    }
    /**
     * @param array $localizedTexts
     *
     * @throws AttachmentConstraintException
     */
    protected function assertHasDefaultLanguage(array $localizedTexts)
    {
    }
    /**
     * @param array $localizedDescription
     *
     * @throws AttachmentConstraintException
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
     * @param Attachment $attachment
     *
     * @throws AttachmentConstraintException
     * @throws PrestaShopException
     */
    protected function assertValidFields(\Attachment $attachment)
    {
    }
    /**
     * @param AttachmentId $attachmentId
     *
     * @return Attachment
     *
     * @throws AttachmentNotFoundException
     */
    protected function getAttachment(\PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId $attachmentId): \Attachment
    {
    }
    /**
     * Deletes legacy Attachment
     *
     * @param Attachment $attachment
     *
     * @return bool
     *
     * @throws DeleteAttachmentException
     */
    protected function deleteAttachment(\Attachment $attachment): bool
    {
    }
}
