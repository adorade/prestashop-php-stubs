<?php

namespace PrestaShopBundle\Entity;

/**
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\FeatureFlagRepository")
 *
 * @ORM\Table()
 *
 * @UniqueEntity("name")
 */
class FeatureFlag
{
    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
    }
    public function getId(): int
    {
    }
    public function getName(): string
    {
    }
    public function isEnabled(): bool
    {
    }
    public function disable(): static
    {
    }
    public function enable(): static
    {
    }
    public function getLabelWording(): string
    {
    }
    public function setLabelWording(string $labelWording): static
    {
    }
    public function getLabelDomain(): string
    {
    }
    public function setLabelDomain(string $labelDomain): static
    {
    }
    public function getDescriptionWording(): string
    {
    }
    public function setDescriptionWording(string $descriptionWording): static
    {
    }
    public function getDescriptionDomain(): string
    {
    }
    public function setDescriptionDomain(string $descriptionDomain): static
    {
    }
    public function getStability(): string
    {
    }
    public function setStability(string $stability): static
    {
    }
    public function getType(): string
    {
    }
    public function getOrderedTypes(): array
    {
    }
    public function setType(string $type): static
    {
    }
}
