<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace zostay\Speakeasy_API\Models\Operations;

use \zostay\Speakeasy_API\Utils\SpeakeasyMetadata;
class GetSchemasRequest
{
    /**
     * The ID of the Api to retrieve schemas for.
     * 
     * @var string $apiID
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiID')]
    public string $apiID;
    
    /**
     * The version ID of the Api to delete metadata for.
     * 
     * @var string $versionID
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=versionID')]
    public string $versionID;
    
	public function __construct()
	{
		$this->apiID = "";
		$this->versionID = "";
	}
}
