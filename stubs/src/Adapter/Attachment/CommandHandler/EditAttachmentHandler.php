<?php

namespace PrestaShop\PrestaShop\Adapter\Attachment\CommandHandler;

/**
 * Handles editing of attachment and file uploading procedures
 */
final class EditAttachmentHandler extends \PrestaShop\PrestaShop\Adapter\Attachment\AbstractAttachmentHandler implements \PrestaShop\PrestaShop\Core\Domain\Attachment\CommandHandler\EditAttachmentHandlerInterface
{
    /**
     * @param ValidatorInterface $validator
     * @param AttachmentFileUploaderInterface $fileUploader
     */
    public function __construct(\Symfony\Component\Validator\Validator\ValidatorInterface $validator, \PrestaShop\PrestaShop\Core\Domain\Attachment\AttachmentFileUploaderInterface $fileUploader)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws AttachmentConstraintException
     * @throws AttachmentException
     * @throws AttachmentNotFoundException
     * @throws CannotUpdateAttachmentException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Command\EditAttachmentCommand $command)
    {
    }
}
