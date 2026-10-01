<?php

namespace PrestaShop\PrestaShop\Adapter\Attachment\CommandHandler;

/**
 * Handles editing of attachment and file uploading procedures
 */
final class EditAttachmentHandler extends \PrestaShop\PrestaShop\Adapter\Attachment\AbstractAttachmentHandler implements \PrestaShop\PrestaShop\Core\Domain\Attachment\CommandHandler\EditAttachmentHandlerInterface
{
    /**
     * @param \Symfony\Component\Validator\Validator\ValidatorInterface $validator
     * @param \PrestaShop\PrestaShop\Core\Domain\Attachment\AttachmentFileUploaderInterface $fileUploader
     */
    public function __construct(\Symfony\Component\Validator\Validator\ValidatorInterface $validator, \PrestaShop\PrestaShop\Core\Domain\Attachment\AttachmentFileUploaderInterface $fileUploader)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\CannotUpdateAttachmentException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Attachment\Command\EditAttachmentCommand $command)
    {
    }
}
