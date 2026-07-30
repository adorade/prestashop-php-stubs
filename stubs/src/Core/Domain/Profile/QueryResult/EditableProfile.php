<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\QueryResult;

/**
 * Transfers editable Profile data
 */
class EditableProfile
{
    /**
     * @param ProfileId $profileId
     * @param string[] $localizedNames
     * @param string|null $avatarUrl
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Profile\ValueObject\ProfileId $profileId, array $localizedNames, ?string $avatarUrl = null)
    {
    }
    /**
     * @return ProfileId
     */
    public function getProfileId()
    {
    }
    /**
     * @return array
     */
    public function getLocalizedNames()
    {
    }
    /**
     * @deprecated Since PrestaShop 8.1, this method only returns string (and not null values)
     *
     * @return string|null
     */
    public function getAvatarUrl(): ?string
    {
    }
}
