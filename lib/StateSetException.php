<?php

declare(strict_types=1);

namespace StateSet\Client;

use Exception;
use Throwable;

/**
 * StateSet-specific exception class
 * 
 * Provides better error handling and context for StateSet API errors
 */
class StateSetException extends Exception
{
    private ?array $context = null;
    private ?string $responseBody = null;

    public function __construct(
        string $message = '',
        int $code = 0,
        ?Throwable $previous = null,
        ?array $context = null,
        ?string $responseBody = null
    ) {
        parent::__construct($message, $code, $previous);
        $this->context = $context;
        $this->responseBody = $responseBody;
    }

    /**
     * Get additional context information
     */
    public function getContext(): ?array
    {
        return $this->context;
    }

    /**
     * Get the API response body if available
     */
    public function getResponseBody(): ?string
    {
        return $this->responseBody;
    }

    /**
     * Check if this is an authentication error
     */
    public function isAuthenticationError(): bool
    {
        return $this->getCode() === 401;
    }

    /**
     * Check if this is a rate limit error
     */
    public function isRateLimitError(): bool
    {
        return $this->getCode() === 429;
    }

    /**
     * Check if this is a validation error
     */
    public function isValidationError(): bool
    {
        return $this->getCode() === 422 || $this->getCode() === 400;
    }

    /**
     * Check if this is a server error
     */
    public function isServerError(): bool
    {
        return $this->getCode() >= 500 && $this->getCode() < 600;
    }

    /**
     * Get a human-readable error type
     */
    public function getErrorType(): string
    {
        if ($this->isAuthenticationError()) {
            return 'Authentication Error';
        }
        
        if ($this->isRateLimitError()) {
            return 'Rate Limit Error';
        }
        
        if ($this->isValidationError()) {
            return 'Validation Error';
        }
        
        if ($this->isServerError()) {
            return 'Server Error';
        }
        
        return 'API Error';
    }

    /**
     * Convert to array for logging or serialization
     */
    public function toArray(): array
    {
        return [
            'type' => $this->getErrorType(),
            'message' => $this->getMessage(),
            'code' => $this->getCode(),
            'context' => $this->getContext(),
            'response_body' => $this->getResponseBody(),
            'file' => $this->getFile(),
            'line' => $this->getLine(),
        ];
    }
}