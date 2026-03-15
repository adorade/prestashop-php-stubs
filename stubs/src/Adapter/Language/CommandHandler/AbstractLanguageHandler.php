<?php

namespace PrestaShop\PrestaShop\Adapter\Language\CommandHandler;

/**
 * Encapsulates common legacy behavior for adding/editing language
 */
abstract class AbstractLanguageHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler
{
    /**
     * Copies "No picture" image for specific language
     *
     * @param IsoCode $isoCode
     * @param string $noPictureImagePath
     */
    protected function copyNoPictureImage(\PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\IsoCode $isoCode, $noPictureImagePath)
    {
    }
    /**
     * @param int $languageId
     * @param string $newImagePath
     * @param string $imageDir
     */
    protected function uploadImage($languageId, $newImagePath, $imageDir)
    {
    }
    /**
     * @param LanguageId $languageId
     *
     * @return Language
     */
    protected function getLegacyLanguageObject(\PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId)
    {
    }
    /**
     * @param Language $language
     */
    protected function assertLanguageIsNotInUse(\Language $language)
    {
    }
    /**
     * @param Language $language
     * @param ToggleLanguageStatusCommandInterface $command
     */
    protected function assertLanguageIsNotDefault(\Language $language, \PrestaShop\PrestaShop\Core\Domain\Language\Command\ToggleLanguageStatusCommandInterface $command = null)
    {
    }
}
