<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class WebserviceSpecificManagementSearchCore implements \WebserviceSpecificManagementInterface
{
    /** @var WebserviceOutputBuilder */
    protected $objOutput;
    /** @var string */
    protected $output;
    /** @var WebserviceRequest */
    protected $wsObject;
    /**
     * @var mixed
     */
    public $urlSegment;
    /**
     * @var array
     */
    public $_resourceConfiguration;
    /* ------------------------------------------------
     * GETTERS & SETTERS
     * ------------------------------------------------ */
    /**
     * @param WebserviceOutputBuilder $obj
     *
     * @return WebserviceSpecificManagementInterface
     */
    public function setObjectOutput(\WebserviceOutputBuilder $obj)
    {
    }
    public function setWsObject(\WebserviceRequest $obj)
    {
    }
    public function getWsObject()
    {
    }
    public function getObjectOutput()
    {
    }
    public function setUrlSegment($segments)
    {
    }
    public function getUrlSegment()
    {
    }
    /**
     * Management of search.
     */
    public function manage()
    {
    }
    /**
     * This must be return a string with specific values as WebserviceRequest expects.
     *
     * @return string
     */
    public function getContent()
    {
    }
}
