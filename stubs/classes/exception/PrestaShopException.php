<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class PrestaShopExceptionCore extends \Exception
{
    /**
     * This method acts like an error handler, if dev mode is on, display the error else use a better silent way.
     */
    public function displayMessage(bool $dieAfterDisplay = \true)
    {
    }
    /**
     * Display lines around current line.
     *
     * @param string $file
     * @param int $line
     * @param int|null $id
     */
    protected function displayFileDebug($file, $line, $id = \null)
    {
    }
    /**
     * Prevent critical arguments to be displayed in the debug trace page (e.g. database password)
     * Returns the array of args with critical arguments replaced by placeholders.
     *
     * @param array $trace
     *
     * @return array
     */
    protected function hideCriticalArgs(array $trace)
    {
    }
    /**
     * Display arguments list of traced function.
     *
     * @param array $args List of arguments
     * @param int $id ID of argument
     */
    protected function displayArgsDebug($args, $id)
    {
    }
    /**
     * Log the error on the disk.
     */
    protected function logError()
    {
    }
    /**
     * Return the content of the Exception.
     *
     * @return string content of the exception
     */
    protected function getExtendedMessage($html = \true)
    {
    }
}
