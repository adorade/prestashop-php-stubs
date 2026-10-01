<?php

namespace PrestaShopBundle\ApiPlatform\OpenApi;

/**
 * Documents uploaded file properties for operations based on multipart/form-data input.
 *
 * The input schema of CQRS write operations is generated from the CQRS command class, which
 * only contains the uploaded file path as a string (e.g. AddProductImageCommand::$filePath),
 * so the file itself is absent from the generated schema and Swagger UI displays no file input.
 * The API resource class is the one that declares the uploaded file as a SplFileInfo/File
 * property, so this builder injects those properties into the request body schema of multipart
 * operations as `type: string, format: binary`, which is the OpenAPI way of describing a binary
 * file part.
 *
 * The request body schema is inlined (dereferenced) on purpose: a component schema can be shared
 * by several operations based on the same CQRS command (e.g. module upload by source URL or by
 * archive file), so the file properties must only be documented on the multipart operation, not
 * on the shared schema.
 */
class FileUploadRequestBodyBuilder
{
    public const MULTIPART_CONTENT_TYPE = 'multipart/form-data';
    protected const COMPONENT_SCHEMA_PREFIX = '#/components/schemas/';
    /**
     * Returns the public properties of the operation's API resource typed as SplFileInfo (or a
     * child class like Symfony's File), mapped to whether they accept null (optional upload).
     * Returns an empty array for operations that don't accept multipart/form-data input.
     *
     * @return array<string, bool>
     */
    public function getUploadedFileProperties(\ApiPlatform\Metadata\HttpOperation $operation): array
    {
    }
    /**
     * Replaces the multipart/form-data request body schema of the OpenAPI operation by an inline
     * schema containing the original properties plus the uploaded file properties.
     *
     * @param \ArrayObject $componentSchemas The components.schemas of the OpenAPI documentation, used to dereference the original schema
     * @param array<string, bool> $uploadedFileProperties Uploaded file property names mapped to whether they accept null
     */
    public function adaptOperation(\ApiPlatform\OpenApi\Model\Operation $openApiOperation, \ArrayObject $componentSchemas, array $uploadedFileProperties): \ApiPlatform\OpenApi\Model\Operation
    {
    }
    /**
     * Resolves a `$ref` schema pointing to components.schemas so that the file properties can be
     * merged with the schema's own properties in the final inline schema.
     */
    protected function dereferenceSchema(?\ArrayObject $schema, \ArrayObject $componentSchemas): \ArrayObject
    {
    }
}
