<?php

namespace PrestaShopBundle\Entity\Repository;

class ImageTypeRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * Get an image type by its name.
     *
     * @param string $typeName
     *
     * @return \PrestaShopBundle\Entity\ImageType|null return null if feature flag cannot be found
     */
    public function getByName(string $typeName): ?\PrestaShopBundle\Entity\ImageType
    {
    }
    /**
     * Save an image type into database.
     *
     * @param \PrestaShopBundle\Entity\ImageType $imageType
     *
     * @return \PrestaShopBundle\Entity\ImageType
     */
    public function save(\PrestaShopBundle\Entity\ImageType $imageType): \PrestaShopBundle\Entity\ImageType
    {
    }
    /**
     * Delete an image type into database.
     *
     * @param \PrestaShopBundle\Entity\ImageType $imageType
     *
     * @return void
     */
    public function delete(\PrestaShopBundle\Entity\ImageType $imageType): void
    {
    }
}
