<?php

namespace PrestaShopBundle\Component;

class CsvResponse extends \Symfony\Component\HttpFoundation\StreamedResponse
{
    // Mode used to paginate page per page, 1/100, 2/100, 3/000, etc
    public const MODE_PAGINATION = 1;
    // Mode used to paginate by offset, 1/100, 100/100, 200/100, etc (like MySql limit)
    public const MODE_OFFSET = 2;
    /**
     * Constructor.
     *
     * @param callable|null $callback A valid PHP callback or null to set it later
     * @param int $status The response status code
     * @param array $headers An array of response headers
     */
    public function __construct($callback = null, $status = 200, $headers = [])
    {
    }
    /**
     * Returns true, if the header line should be exported.
     *
     * @return bool
     */
    public function isHeaderRowIncluded(): bool
    {
    }
    /**
     * @param array|callable $data
     *
     * @return $this
     */
    public function setData($data)
    {
    }
    /**
     * @param array $headersData
     *
     * @return $this
     */
    public function setHeadersData(array $headersData)
    {
    }
    /**
     * @param int $modeType
     *
     * @return $this
     */
    public function setModeType($modeType)
    {
    }
    /**
     * @param int $start
     *
     * @return $this
     */
    public function setStart($start)
    {
    }
    /**
     * @param int $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
    }
    /**
     * @param string $fileName
     *
     * @return $this
     *
     * @throws \InvalidArgumentException
     */
    public function setFileName($fileName)
    {
    }
    /**
     * @param bool $includeHeaderRow
     *
     * @return $this
     */
    public function setIncludeHeaderRow(bool $includeHeaderRow): self
    {
    }
    /**
     * Callback function for StreamedResponse.
     *
     * @throws \LogicException
     */
    public function processData()
    {
    }
}
