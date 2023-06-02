<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace zostay\Speakeasy_API\Models\Operations;


class GetSchemasResponse
{
	
    public string $contentType;
    
    /**
     * Default error response
     * 
     * @var ?\zostay\Speakeasy_API\Models\Shared\Error $error
     */
	
    public ?\zostay\Speakeasy_API\Models\Shared\Error $error = null;
    
    /**
     * OK
     * 
     * @var ?array<\zostay\Speakeasy_API\Models\Shared\Schema> $schemata
     */
	
    public ?array $schemata = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->schemata = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
