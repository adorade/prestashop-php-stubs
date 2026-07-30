<?php

namespace PrestaShopBundle\Bridge\Smarty;

/**
 * This trait allows rendering smarty template through Symfony response,
 * therefore it is handy to use it in horizontally migrated controllers.
 */
trait FrameworkControllerSmartyTrait
{
    /**
     * Builds Symfony response from provided HTML string using smarty bridge.
     *
     * @param string $content HTML string containing everything that needs to be rendered (including the header, footer, notifications etc.)
     * @param Response|null $response
     *
     * @return Response
     */
    public function renderSmarty(string $content, \Symfony\Component\HttpFoundation\Response $response = null, bool $isNewTheme = false): \Symfony\Component\HttpFoundation\Response
    {
    }
}
