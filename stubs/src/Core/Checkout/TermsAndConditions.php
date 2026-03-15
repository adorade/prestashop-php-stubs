<?php

namespace PrestaShop\PrestaShop\Core\Checkout;

/**
 * TermsAndConditions object is used to render "terms and conditions" text sections with links in it
 *
 * @todo: refactor this class to make it stateless
 */
class TermsAndConditions
{
    /**
     * @param string $identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
    }
    /**
     * This function expects more than 1 argument: additionnal arguments
     * are used as links
     *
     * Exemple : $terms->setText('hello [world] [new]', 'http://www.world.com', 'http://new.com');
     *
     * @param string $rawText
     *
     * @return $this
     */
    public function setText($rawText)
    {
    }
    /**
     * Parses given raw text, replacing all [something] statements with <a> tags,
     * using URLs from $this->links
     *
     * @return string formatted text, which now contains HTML <a> tags
     */
    public function format()
    {
    }
    /**
     * @return string
     */
    public function getIdentifier()
    {
    }
    /**
     * @param int $index
     *
     * @return string
     */
    protected function createLinkId($index)
    {
    }
}
