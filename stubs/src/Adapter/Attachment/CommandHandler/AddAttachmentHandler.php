<?php

namespace PrestaShop\PrestaShop\Adapter\Attachment\CommandHandler;

/**
 * Handles attachment creation and file uploading procedures
 */
final class AddAttachmentHandler extends \PrestaShop\PrestaShop\Adapter\Attachment\AbstractAttachmentHandler implements \PrestaShop\PrestaShop\Core\Domain\Attachment\CommandHandler\AddAttachmentHandlerInterface
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
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Command\AddAttachmentCommand $command): \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId
    {
    }
}
