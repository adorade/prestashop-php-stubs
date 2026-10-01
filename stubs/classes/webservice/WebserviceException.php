<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class WebserviceExceptionCore extends \Exception
{
    protected $status;
    /**
     * @var string
     */
    protected $wrong_value;
    /**
     * @var array
     */
    protected $available_values;
    protected $type;
    public const SIMPLE = 0;
    public const DID_YOU_MEAN = 1;
    public function __construct($message, $code)
    {
    }
    public function getType()
    {
    }
    public function setType($type)
    {
    }
    public function setStatus($status)
    {
    }
    public function getStatus()
    {
    }
    /**
     * @return string
     */
    public function getWrongValue()
    {
    }
    /**
     * @param string $wrong_value
     * @param array $available_values
     *
     * @return self
     */
    public function setDidYouMean($wrong_value, $available_values)
    {
    }
    public function getAvailableValues()
    {
    }
}
