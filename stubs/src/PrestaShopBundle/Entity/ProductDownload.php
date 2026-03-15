<?php

namespace PrestaShopBundle\Entity;

/**
 * @ORM\Table()
 * @ORM\Entity
 */
class ProductDownload
{
    /**
     * Download ID, different from product ID.
     *
     * @return int
     */
    public function getId()
    {
    }
    /**
     * Related product ID.
     *
     * @return int
     */
    public function getIdProduct()
    {
    }
    /**
     * Virtual filename, used for display on download.
     *
     * @return string
     */
    public function getDisplayFilename()
    {
    }
    /**
     * Get actual filename on the shop filesystem.
     *
     * @return string
     */
    public function getFilename()
    {
    }
    /**
     * Date when the download was added.
     *
     * @return DateTime
     */
    public function getDateAdd()
    {
    }
    /**
     * Date until the product can be downloaded.
     *
     * @return DateTime
     */
    public function getDateExpiration()
    {
    }
    /**
     * Number of days (after order) the product can be downloaded.
     *
     * @return int
     */
    public function getNbDaysAccessible()
    {
    }
    /**
     * The number of downloads of a product can be limited.
     *
     * @return int
     */
    public function getNbDownloadable()
    {
    }
    /**
     * @return bool
     */
    public function getActive()
    {
    }
    public function getIsShareable()
    {
    }
    public function setId($id)
    {
    }
    public function setIdProduct($idProduct)
    {
    }
    public function setDisplayFilename($displayFilename)
    {
    }
    public function setFilename($filename)
    {
    }
    public function setDateAdd(\DateTime $dateAdd)
    {
    }
    public function setDateExpiration(\DateTime $dateExpiration)
    {
    }
    public function setNbDaysAccessible($nbDaysAccessible)
    {
    }
    public function setNbDownloadable($nbDownloadable)
    {
    }
    public function setActive($active)
    {
    }
    public function setIsShareable($isShareable)
    {
    }
    /**
     * Now we tell doctrine that before we persist or update we call the updateTimestamps() function.
     *
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updateTimestamps()
    {
    }
}
