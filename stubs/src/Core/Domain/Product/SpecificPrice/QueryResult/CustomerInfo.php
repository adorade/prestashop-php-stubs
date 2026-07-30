<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\QueryResult;

class CustomerInfo
{
    /**
     * @param int $id
     * @param string $firstname
     * @param string $lastname
     * @param string $email
     */
    public function __construct(int $id, string $firstname, string $lastname, string $email)
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
    public function getFirstname(): string
    {
    }
    /**
     * @return string
     */
    public function getLastname(): string
    {
    }
    /**
     * @return string
     */
    public function getEmail(): string
    {
    }
}
