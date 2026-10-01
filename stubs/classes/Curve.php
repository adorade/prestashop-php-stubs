<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Data structure to store curves
 */
class CurveCore
{
    /**
     * @var float[] indexed by string
     */
    protected $values = [];
    /**
     * @var string
     */
    protected $label;
    /**
     * Can be: bars, steps
     *
     * @var string
     */
    protected $type;
    /**
     * @param array $values
     */
    public function setValues($values)
    {
    }
    /**
     * @param bool $time_mode
     *
     * @return string
     */
    public function getValues($time_mode = \false)
    {
    }
    /**
     * @param string $x
     * @param float $y
     */
    public function setPoint($x, $y)
    {
    }
    /**
     * @param string $label
     */
    public function setLabel($label)
    {
    }
    /**
     * @param string $type accepts only 'bars' or 'steps'
     */
    public function setType($type)
    {
    }
    /**
     * @param string $x
     *
     * @return float|null return point if found, null else
     */
    public function getPoint($x)
    {
    }
}
