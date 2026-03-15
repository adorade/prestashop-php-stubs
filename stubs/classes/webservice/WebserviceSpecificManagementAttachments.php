<?php

/**
 * This class is responsible for managing Attachement through webservice
 */
class WebserviceSpecificManagementAttachmentsCore implements \WebserviceSpecificManagementInterface
{
    /**
     * @var WebserviceOutputBuilder
     */
    protected $objOutput;
    /**
     * @var WebserviceRequest
     */
    protected $wsObject;
    /**
     * The configuration parameters of the current resource
     *
     * @var array
     */
    public $resourceConfiguration;
    /**
     * @var int
     */
    protected $attachmentId;
    /**
     * @var array|null
     */
    protected $displayFile;
    /*
     * ------------------------------------------------
     * GETTERS & SETTERS
     * ------------------------------------------------
     */
    /**
     * @param WebserviceOutputBuilder $obj
     *
     * @return WebserviceSpecificManagementInterface
     */
    public function setObjectOutput(\WebserviceOutputBuilder $obj)
    {
    }
    /**
     * Get Object Output
     */
    public function getObjectOutput()
    {
    }
    /**
     * Set Webservice Object
     *
     * @param WebserviceRequest $obj
     */
    public function setWsObject(\WebserviceRequest $obj)
    {
    }
    /**
     * Get Webservice Object
     */
    public function getWsObject()
    {
    }
    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
    }
    /**
     * Manage attachements
     *
     * @return bool
     */
    public function manage()
    {
    }
    /**
     * That part was inherited from WebserviceSpecificManagementImages (which uses deeper api path).
     * Looping for 6 segments is excessive as only the [1] and [2] indices is used for attachments.
     *
     * The explanation for the mapping can be seen further down "Available cases api/...".
     * If urlSegment[1] is set to 'file', binary operations are done (file upload/download)
     * Otherwise default webservice operations are done (read/write Model information using XML/json).
     *
     * Examples:
     * [GET] https://domain.tld/api/attachments/ give a response in XML/json with all attachments.
     * [POST] https://domain.tld/api/attachments/ only creates model information (similar to any other default api), no file information.
     * [POST] https://domain.tld/api/attachments/file creates an attachment AND uploads a file for it.
     *
     * [PUT] https://domain.tld/api/attachments/$id_attachment here urlSegment[1] is id_attachment, updates model information only.
     * [PUT] https://domain.tld/api/attachments/file/$id_attachment here urlSegment[1] is 'file' and urlSegment[2] is id_attachment, updates file (binary) only.
     *
     * [GET] https://domain.tld/api/attachments/$id_attachment gives a response in XML/json for the attachment model information.
     * [GET] https://domain.tld/api/attachments/file/$id_attachment downloads the id_attachment file
     */
    public function manageAttachments()
    {
    }
    /**
     * Handles attachment file download
     *
     * @throws WebserviceException if attachment is not existing or file not available
     *
     * @return array<string, string> File details
     */
    public function executeFileGetAndHead(): array
    {
    }
    /**
     * Handles file upload
     *
     * Creates new attachment or replaces existing with a new file.
     * [PUT] and [PATCH] update existing attachment file
     * [POST] create new attachment
     */
    public function executeFileAddAndEdit(): void
    {
    }
    /**
     * @param string $message
     * @param array $params
     * @param string $domain
     *
     * @return string
     */
    protected function trans(string $message, array $params, string $domain): string
    {
    }
}
