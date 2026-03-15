<?php

namespace PrestaShopBundle\Security\Admin;

/**
 * Class Employee is used for Symfony security components to authenticate the user.
 */
class Employee implements \Symfony\Component\Security\Core\User\UserInterface, \Symfony\Component\Security\Core\User\EquatableInterface
{
    /**
     * Constructor.
     *
     * @param object $data The employee legacy object
     */
    public function __construct($data)
    {
    }
    public function __toString()
    {
    }
    /**
     * Returns roles for the current employee.
     *
     * @return array
     */
    public function getRoles()
    {
    }
    /**
     * Get typed password.
     *
     * @return string
     */
    public function getPassword()
    {
    }
    /**
     * The salt used to hash the password.
     *
     * @return string
     */
    public function getSalt()
    {
    }
    /**
     * Get the login of the current employee.
     *
     * @return string
     */
    public function getUsername()
    {
    }
    /**
     * Get the id of the current employee.
     *
     * @return int
     */
    public function getId()
    {
    }
    /**
     * Get the data parameter of the current employee.
     *
     * @return object
     */
    public function getData()
    {
    }
    /**
     * Used by Symfony to ensure credentials are removed when logout.
     */
    public function eraseCredentials()
    {
    }
    /**
     * @param array $roles
     *
     * @return Employee
     */
    public function setRoles(array $roles)
    {
    }
    /**
     * Test equality between two Employee entities
     * (instance of class, password, salt and username).
     *
     * @param UserInterface $user
     *
     * @return bool
     */
    public function isEqualTo(\Symfony\Component\Security\Core\User\UserInterface $user)
    {
    }
}
