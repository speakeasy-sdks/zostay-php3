<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace zostay\Speakeasy_API\Models\Operations;

use \zostay\Speakeasy_API\Utils\SpeakeasyMetadata;
/**
 * RegisterSchemaRequestBody - The schema file to upload provided as a multipart/form-data file segment.
 * 
 * @package zostay\Speakeasy_API\Models\Operations
 * @access public
 */
class RegisterSchemaRequestBody
{
	#[SpeakeasyMetadata('multipartForm:file=true')]
    public RegisterSchemaRequestBodyFile $file;
    
	public function __construct()
	{
		$this->file = new \zostay\Speakeasy_API\Models\Operations\RegisterSchemaRequestBodyFile();
	}
}
