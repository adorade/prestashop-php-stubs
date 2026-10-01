<?php

namespace PrestaShop\PrestaShop\Core\Domain\Title\QueryResult;

/**
 * Transfers state data for editing
 */
class EditableTitle
{
    /**
     * @var int
     */
    protected $titleId;
    /**
     * @var array<string>
     */
    protected $localizedNames;
    /**
     * @var int
     */
    protected $gender;
    protected int $width;
    protected int $height;
    /**
     * @param int $titleId
     * @param array<string> $localizedNames
     * @param int $gender
     */
    public function __construct(int $titleId, array $localizedNames, int $gender, int $width, int $height)
    {
    }
    /**
     * @return int
     */
    public function getTitleId(): int
    {
    }
    /**
     * @return array<string>
     */
    public function getLocalizedNames(): array
    {
    }
    /**
     * @return int
     */
    public function getGender(): int
    {
    }
    public function getHeight(): int
    {
    }
    public function getWidth(): int
    {
    }
}
