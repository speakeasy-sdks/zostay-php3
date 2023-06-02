<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace zostay\Speakeasy_API;

class Apis 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Delete an Api.
     * 
     * Delete a particular version of an Api. The will also delete all associated ApiEndpoints, Metadata, Schemas & Request Logs (if using a Postgres datastore).
     * 
     * @param \zostay\Speakeasy_API\Models\Operations\DeleteApiRequest $request
     * @return \zostay\Speakeasy_API\Models\Operations\DeleteApiResponse
     */
	public function deleteApi(
        \zostay\Speakeasy_API\Models\Operations\DeleteApiRequest $request,
    ): \zostay\Speakeasy_API\Models\Operations\DeleteApiResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}', \zostay\Speakeasy_API\Models\Operations\DeleteApiRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \zostay\Speakeasy_API\Models\Operations\DeleteApiResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'zostay\Speakeasy_API\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Generate an OpenAPI specification for a particular Api.
     * 
     * This endpoint will generate any missing operations in any registered OpenAPI document if the operation does not already exist in the document.
     * Returns the original document and the newly generated document allowing a diff to be performed to see what has changed.
     * 
     * @param \zostay\Speakeasy_API\Models\Operations\GenerateOpenApiSpecRequest $request
     * @return \zostay\Speakeasy_API\Models\Operations\GenerateOpenApiSpecResponse
     */
	public function generateOpenApiSpec(
        \zostay\Speakeasy_API\Models\Operations\GenerateOpenApiSpecRequest $request,
    ): \zostay\Speakeasy_API\Models\Operations\GenerateOpenApiSpecResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/generate/openapi', \zostay\Speakeasy_API\Models\Operations\GenerateOpenApiSpecRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \zostay\Speakeasy_API\Models\Operations\GenerateOpenApiSpecResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->generateOpenApiSpecDiff = $serializer->deserialize((string)$httpResponse->getBody(), 'zostay\Speakeasy_API\Models\Shared\GenerateOpenApiSpecDiff', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'zostay\Speakeasy_API\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Generate a Postman collection for a particular Api.
     * 
     * Generates a postman collection containing all endpoints for a particular API. Includes variables produced for any path/query/header parameters included in the OpenAPI document.
     * 
     * @param \zostay\Speakeasy_API\Models\Operations\GeneratePostmanCollectionRequest $request
     * @return \zostay\Speakeasy_API\Models\Operations\GeneratePostmanCollectionResponse
     */
	public function generatePostmanCollection(
        \zostay\Speakeasy_API\Models\Operations\GeneratePostmanCollectionRequest $request,
    ): \zostay\Speakeasy_API\Models\Operations\GeneratePostmanCollectionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/generate/postman', \zostay\Speakeasy_API\Models\Operations\GeneratePostmanCollectionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/octet-stream;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \zostay\Speakeasy_API\Models\Operations\GeneratePostmanCollectionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/octet-stream')) {
                $response->postmanCollection = $httpResponse->getBody()->getContents();
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'zostay\Speakeasy_API\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get all Api versions for a particular ApiEndpoint.
     * 
     * Get all Api versions for a particular ApiEndpoint.
     * Supports filtering the versions based on metadata attributes.
     * 
     * @param \zostay\Speakeasy_API\Models\Operations\GetAllApiVersionsRequest $request
     * @return \zostay\Speakeasy_API\Models\Operations\GetAllApiVersionsResponse
     */
	public function getAllApiVersions(
        \zostay\Speakeasy_API\Models\Operations\GetAllApiVersionsRequest $request,
    ): \zostay\Speakeasy_API\Models\Operations\GetAllApiVersionsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}', \zostay\Speakeasy_API\Models\Operations\GetAllApiVersionsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\zostay\Speakeasy_API\Models\Operations\GetAllApiVersionsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \zostay\Speakeasy_API\Models\Operations\GetAllApiVersionsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apis = $serializer->deserialize((string)$httpResponse->getBody(), 'array<zostay\Speakeasy_API\Models\Shared\Api>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'zostay\Speakeasy_API\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a list of Apis for a given workspace
     * 
     * Get a list of all Apis and their versions for a given workspace.
     * Supports filtering the APIs based on metadata attributes.
     * 
     * @param \zostay\Speakeasy_API\Models\Operations\GetApisRequest $request
     * @return \zostay\Speakeasy_API\Models\Operations\GetApisResponse
     */
	public function getApis(
        \zostay\Speakeasy_API\Models\Operations\GetApisRequest $request,
    ): \zostay\Speakeasy_API\Models\Operations\GetApisResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\zostay\Speakeasy_API\Models\Operations\GetApisRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \zostay\Speakeasy_API\Models\Operations\GetApisResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apis = $serializer->deserialize((string)$httpResponse->getBody(), 'array<zostay\Speakeasy_API\Models\Shared\Api>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'zostay\Speakeasy_API\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Upsert an Api
     * 
     * Upsert an Api. If the Api does not exist, it will be created.
     * If the Api exists, it will be updated.
     * 
     * @param \zostay\Speakeasy_API\Models\Operations\UpsertApiRequest $request
     * @return \zostay\Speakeasy_API\Models\Operations\UpsertApiResponse
     */
	public function upsertApi(
        \zostay\Speakeasy_API\Models\Operations\UpsertApiRequest $request,
    ): \zostay\Speakeasy_API\Models\Operations\UpsertApiResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}', \zostay\Speakeasy_API\Models\Operations\UpsertApiRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "apiInput", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \zostay\Speakeasy_API\Models\Operations\UpsertApiResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->api = $serializer->deserialize((string)$httpResponse->getBody(), 'zostay\Speakeasy_API\Models\Shared\Api', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'zostay\Speakeasy_API\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
}