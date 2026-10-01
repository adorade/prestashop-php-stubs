<?php

namespace PrestaShop\PrestaShop\Core\Domain\Title\Command;

/**
 * Edits title with provided data
 */
class EditTitleCommand
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\TitleId
     */
    protected $titleId;
    /**
     * @var array<string>|null
     */
    protected $localizedNames;
    /**
     * @var \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\Gender|null
     */
    protected $gender;
    /**
     * @var \Symfony\Component\HttpFoundation\File\UploadedFile|null
     */
    protected $imgFile;
    /**
     * @var int|null
     */
    protected $imgWidth;
    /**
     * @var int|null
     */
    protected $imgHeight;
    /**
     * @param int $titleId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Title\Exception\TitleConstraintException
     */
    public function __construct(int $titleId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\TitleId
     */
    public function getTitleId(): \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\TitleId
    {
    }
    /**
     * @return array<string>|null
     */
    public function getLocalizedNames(): ?array
    {
    }
    /**
     * @param array<string> $localizedNames
     *
     * @return self
     */
    public function setLocalizedNames(array $localizedNames): self
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\Gender|null
     */
    public function getGender(): ?\PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\Gender
    {
    }
    /**
     * @param int $gender
     *
     * @return self
     */
    public function setGender(int $gender): self
    {
    }
    /**
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile|null
     */
    public function getImageFile(): ?\Symfony\Component\HttpFoundation\File\UploadedFile
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $imageFile
     *
     * @return self
     */
    public function setImageFile(\Symfony\Component\HttpFoundation\File\UploadedFile $imageFile): self
    {
    }
    /**
     * @return int|null
     */
    public function getImageWidth(): ?int
    {
    }
    /**
     * @param int|null $imageWidth
     *
     * @return self
     */
    public function setImageWidth(?int $imageWidth): self
    {
    }
    /**
     * @return int|null
     */
    public function getImageHeight(): ?int
    {
    }
    /**
     * @param int|null $imageHeight
     *
     * @return self
     */
    public function setImageHeight(?int $imageHeight): self
    {
    }
}
