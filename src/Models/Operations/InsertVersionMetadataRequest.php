<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace zostay\Speakeasy_API\Models\Operations;

use \zostay\Speakeasy_API\Utils\SpeakeasyMetadata;
class InsertVersionMetadataRequest
{
    /**
     * A JSON representation of the metadata to insert.
     * 
     * @var \zostay\Speakeasy_API\Models\Shared\VersionMetadataInput $versionMetadataInput
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \zostay\Speakeasy_API\Models\Shared\VersionMetadataInput $versionMetadataInput;
    
    /**
     * The ID of the Api to insert metadata for.
     * 
     * @var string $apiID
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiID')]
    public string $apiID;
    
    /**
     * The version ID of the Api to insert metadata for.
     * 
     * @var string $versionID
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=versionID')]
    public string $versionID;
    
	public function __construct()
	{
		$this->versionMetadataInput = new \zostay\Speakeasy_API\Models\Shared\VersionMetadataInput();
		$this->apiID = "";
		$this->versionID = "";
	}
}
