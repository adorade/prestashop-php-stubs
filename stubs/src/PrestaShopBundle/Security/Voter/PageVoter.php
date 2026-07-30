<?php

namespace PrestaShopBundle\Security\Voter;

/**
 * Decides on access rights to a Page.
 */
class PageVoter extends \Symfony\Component\Security\Core\Authorization\Voter\Voter
{
    public const CREATE = 'create';
    public const UPDATE = 'update';
    public const DELETE = 'delete';
    public const READ = 'read';
    public const LEVEL_DELETE = 4;
    public const LEVEL_UPDATE = 2;
    public const LEVEL_CREATE = 3;
    public const LEVEL_READ = 1;
    /**
     * Indicates if this voter should pronounce on this attribute and subject.
     *
     * @param string $attribute Rights to test
     * @param mixed $subject Subject to secure (a controller name)
     *
     * @return bool
     */
    protected function supports($attribute, $subject)
    {
    }
    /**
     * @param string $attribute Access right to test
     * @param string $subject Controller name
     * @param TokenInterface $token
     *
     * @return bool
     */
    protected function voteOnAttribute($attribute, $subject, \Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token)
    {
    }
    /**
     * Checks if the provided user profile is allowed to perform the requested action.
     *
     * @param string $action
     * @param int $employeeProfileId
     *
     * @return bool
     *
     * @throws \Exception
     */
    protected function can($action, $employeeProfileId)
    {
    }
}
