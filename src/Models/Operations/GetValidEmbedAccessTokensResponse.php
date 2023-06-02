<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace zostay\Speakeasy_API\Models\Operations;


class GetValidEmbedAccessTokensResponse
{
	
    public string $contentType;
    
    /**
     * OK
     * 
     * @var ?array<\zostay\Speakeasy_API\Models\Shared\EmbedToken> $embedTokens
     */
	
    public ?array $embedTokens = null;
    
    /**
     * Default error response
     * 
     * @var ?\zostay\Speakeasy_API\Models\Shared\Error $error
     */
	
    public ?\zostay\Speakeasy_API\Models\Shared\Error $error = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->embedTokens = null;
		$this->error = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
