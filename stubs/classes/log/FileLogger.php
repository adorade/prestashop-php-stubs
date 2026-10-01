<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class FileLoggerCore extends \AbstractLogger
{
    /**
     * @var string
     */
    protected $filename = '';
    /**
     * Write the message in the log file.
     *
     * @param string $message
     * @param int $level
     *
     * @return bool
     */
    protected function logMessage($message, $level)
    {
    }
    /**
     * Check if the specified filename is writable and set the filename.
     *
     * @param string $filename
     *
     * @return void
     */
    public function setFilename($filename)
    {
    }
    /**
     * Log the message.
     *
     * @return string
     */
    public function getFilename()
    {
    }
}
