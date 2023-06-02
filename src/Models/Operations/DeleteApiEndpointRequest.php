<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace zostay\Speakeasy_API\Models\Operations;

use \zostay\Speakeasy_API\Utils\SpeakeasyMetadata;
class DeleteApiEndpointRequest
{
    /**
     * The ID of the ApiEndpoint to delete.
     * 
     * @var string $apiEndpointID
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiEndpointID')]
    public string $apiEndpointID;
    
    /**
     * The ID of the Api the ApiEndpoint belongs to.
     * 
     * @var string $apiID
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiID')]
    public string $apiID;
    
    /**
     * The version ID of the Api the ApiEndpoint belongs to.
     * 
     * @var string $versionID
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=versionID')]
    public string $versionID;
    
	public function __construct()
	{
		$this->apiEndpointID = "";
		$this->apiID = "";
		$this->versionID = "";
	}
}
