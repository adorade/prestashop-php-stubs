<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class ChartCore
{
    /** @var int */
    protected static $poolId = 0;
    protected $width = 600;
    protected $height = 300;
    /* Time mode */
    protected $timeMode = \false;
    protected $from;
    protected $to;
    protected $format;
    protected $granularity;
    protected $curves = [];
    /** @prototype void public static function init(void) */
    public static function init()
    {
    }
    /** @prototype void public function __construct() */
    public function __construct()
    {
    }
    /** @prototype void public function setSize(int $width, int $height) */
    public function setSize($width, $height)
    {
    }
    /** @prototype void public function setTimeMode($from, $to, $granularity) */
    public function setTimeMode($from, $to, $granularity)
    {
    }
    public function getCurve($i)
    {
    }
    /** @prototype void public function display() */
    public function display()
    {
    }
    public function fetch()
    {
    }
}
