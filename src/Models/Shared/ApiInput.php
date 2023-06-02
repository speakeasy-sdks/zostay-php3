<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace zostay\Speakeasy_API\Models\Shared;


/**
 * ApiInput - An Api is representation of a API (a collection of API Endpoints) within the Speakeasy Platform.
 * 
 * @package zostay\Speakeasy_API\Models\Shared
 * @access public
 */
class ApiInput
{
    /**
     * The ID of this Api. This is a human-readable name (subject to change).
     * 
     * @var string $apiId
     */
	#[\JMS\Serializer\Annotation\SerializedName('api_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $apiId;
    
    /**
     * A detailed description of the Api.
     * 
     * @var string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;
    
    /**
     * A set of values associated with a meta_data key. This field is only set on get requests.
     * 
     * @var ?array<string, array<string>> $metaData
     */
	#[\JMS\Serializer\Annotation\SerializedName('meta_data')]
    #[\JMS\Serializer\Annotation\Type('array<string, array<string>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metaData = null;
    
    /**
     * The version ID of this Api. This is semantic version identifier.
     * 
     * @var string $versionId
     */
	#[\JMS\Serializer\Annotation\SerializedName('version_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $versionId;
    
	public function __construct()
	{
		$this->apiId = "";
		$this->description = "";
		$this->metaData = null;
		$this->versionId = "";
	}
}
