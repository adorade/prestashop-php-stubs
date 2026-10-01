<?php

namespace PrestaShopBundle\Entity;

/**
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\FeatureFlagRepository")
 * @ORM\Table()
 * @UniqueEntity("name")
 * @ApiResource()
 */
class FeatureFlag
{
    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
    }
    /**
     * @return int
     */
    public function getId(): int
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
    }
    /**
     * @return self
     */
    public function disable(): self
    {
    }
    /**
     * @return self
     */
    public function enable(): self
    {
    }
    /**
     * @return string
     */
    public function getLabelWording(): string
    {
    }
    /**
     * @param string $labelWording
     *
     * @return self
     */
    public function setLabelWording(string $labelWording): self
    {
    }
    /**
     * @return string
     */
    public function getLabelDomain(): string
    {
    }
    /**
     * @param string $labelDomain
     *
     * @return self
     */
    public function setLabelDomain(string $labelDomain): self
    {
    }
    /**
     * @return string
     */
    public function getDescriptionWording(): string
    {
    }
    /**
     * @param string $descriptionWording
     *
     * @return self
     */
    public function setDescriptionWording(string $descriptionWording): self
    {
    }
    /**
     * @return string
     */
    public function getDescriptionDomain(): string
    {
    }
    /**
     * @param string $descriptionDomain
     *
     * @return self
     */
    public function setDescriptionDomain(string $descriptionDomain): self
    {
    }
    /**
     * @return string
     */
    public function getStability(): string
    {
    }
    /**
     * @param string $stability
     *
     * @return self
     */
    public function setStability(string $stability): self
    {
    }
}
