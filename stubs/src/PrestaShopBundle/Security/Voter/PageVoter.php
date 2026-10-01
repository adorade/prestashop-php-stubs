<?php

namespace PrestaShopBundle\Security\Voter;

/**
 * Decides on access rights to a Page.
 */
class PageVoter extends \Symfony\Component\Security\Core\Authorization\Voter\Voter
{
    /**
     * @deprecated since 9.0
     */
    public const CREATE = \PrestaShop\PrestaShop\Core\Security\Permission::CREATE;
    /**
     * @deprecated since 9.0
     */
    public const UPDATE = \PrestaShop\PrestaShop\Core\Security\Permission::UPDATE;
    /**
     * @deprecated since 9.0
     */
    public const DELETE = \PrestaShop\PrestaShop\Core\Security\Permission::DELETE;
    /**
     * @deprecated since 9.0
     */
    public const READ = \PrestaShop\PrestaShop\Core\Security\Permission::READ;
    /**
     * @deprecated since 9.0
     */
    public const LEVEL_DELETE = \PrestaShop\PrestaShop\Core\Security\Permission::LEVEL_DELETE;
    /**
     * @deprecated since 9.0
     */
    public const LEVEL_UPDATE = \PrestaShop\PrestaShop\Core\Security\Permission::LEVEL_UPDATE;
    /**
     * @deprecated since 9.0
     */
    public const LEVEL_CREATE = \PrestaShop\PrestaShop\Core\Security\Permission::LEVEL_CREATE;
    /**
     * @deprecated since 9.0
     */
    public const LEVEL_READ = \PrestaShop\PrestaShop\Core\Security\Permission::LEVEL_READ;
    public function __construct(\PrestaShop\PrestaShop\Core\Security\AccessCheckerInterface $accessChecker)
    {
    }
    /**
     * Indicates if this voter should pronounce on this attribute and subject.
     *
     * @param string $attribute Rights to test
     * @param mixed $subject Subject to secure (a controller name)
     *
     * @return bool
     */
    protected function supports($attribute, $subject): bool
    {
    }
    /**
     * @param string $attribute Access right to test
     * @param string $subject Controller name
     * @param \Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token
     *
     * @return bool
     */
    protected function voteOnAttribute($attribute, $subject, \Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token): bool
    {
    }
}
