<?php

namespace PrestaShopBundle\Command;

final class ThemeEnablerCommand extends \Symfony\Component\Console\Command\Command
{
    /**
     * @var bool using CLI, the user must be allowed to enable themes
     */
    public const USER_ALLOWED_TO_ENABLE = true;
    /**
     * @var int if the activation of the theme fails, return the right code
     */
    public const RETURN_CODE_FAILED = 1;
    public function __construct(\PrestaShop\PrestaShop\Core\Addon\Theme\ThemeManager $themeManager)
    {
    }
}
