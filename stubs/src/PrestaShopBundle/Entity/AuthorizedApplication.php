<?php

namespace PrestaShopBundle\Entity;

/**
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\AuthorizedApplicationRepository")
 * @ORM\Table()
 * @UniqueEntity("name")
 *
 * @experimental
 */
class AuthorizedApplication
{
    /**
     * @return int
     */
    public function getId(): int
    {
    }
    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
    }
    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
    }
}
