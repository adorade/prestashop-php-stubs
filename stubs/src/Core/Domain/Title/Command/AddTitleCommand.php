<?php

namespace PrestaShop\PrestaShop\Core\Domain\Title\Command;

/**
 * Creates title with provided data
 */
class AddTitleCommand
{
    /**
     * @var array<int, string>
     */
    protected $localizedNames;
    /**
     * @var \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\Gender
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
     * @param array<string> $localizedNames
     * @param int $gender
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile|null $imgFile
     * @param int|null $imgWidth
     * @param int|null $imgHeight
     */
    public function __construct(array $localizedNames, int $gender, ?\Symfony\Component\HttpFoundation\File\UploadedFile $imgFile = null, ?int $imgWidth = null, ?int $imgHeight = null)
    {
    }
    /**
     * @return array<int, string>
     */
    public function getLocalizedNames(): array
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\Gender
     */
    public function getGender(): \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\Gender
    {
    }
    /**
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile|null
     */
    public function getImageFile(): ?\Symfony\Component\HttpFoundation\File\UploadedFile
    {
    }
    /**
     * @return int|null
     */
    public function getImageWidth(): ?int
    {
    }
    /**
     * @return int|null
     */
    public function getImageHeight(): ?int
    {
    }
}
