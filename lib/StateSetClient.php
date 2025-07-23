<?php

declare(strict_types=1);

namespace StateSet\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use OpenAPI\Client\Api\AccountsApi;
use OpenAPI\Client\Api\BillOfMaterialsApi;
use OpenAPI\Client\Api\BillOfMaterialsLineItemsApi;
use OpenAPI\Client\Api\CustomersApi;
use OpenAPI\Client\Api\InventoryItemsApi;
use OpenAPI\Client\Api\ManufactureOrderLineItemsApi;
use OpenAPI\Client\Api\ManufactureOrdersApi;
use OpenAPI\Client\Api\MessagesApi;
use OpenAPI\Client\Api\NotesApi;
use OpenAPI\Client\Api\ReturnLineItemsApi;
use OpenAPI\Client\Api\ReturnsApi;
use OpenAPI\Client\Api\WarrantiesApi;
use OpenAPI\Client\Api\WarrantyApi;
use OpenAPI\Client\Api\WarrantyLineItemsApi;
use OpenAPI\Client\Api\WorkOrderLineItemsApi;
use OpenAPI\Client\Api\WorkOrdersApi;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * StateSet PHP Client - Modern wrapper for the StateSet API
 * 
 * Provides a clean, modern interface for interacting with the StateSet API
 * with better error handling, logging, and developer experience.
 */
class StateSetClient
{
    private Configuration $config;
    private ClientInterface $httpClient;
    private LoggerInterface $logger;
    
    // API instances
    private ?AccountsApi $accounts = null;
    private ?BillOfMaterialsApi $billOfMaterials = null;
    private ?BillOfMaterialsLineItemsApi $billOfMaterialsLineItems = null;
    private ?CustomersApi $customers = null;
    private ?InventoryItemsApi $inventoryItems = null;
    private ?ManufactureOrdersApi $manufactureOrders = null;
    private ?ManufactureOrderLineItemsApi $manufactureOrderLineItems = null;
    private ?MessagesApi $messages = null;
    private ?NotesApi $notes = null;
    private ?ReturnsApi $returns = null;
    private ?ReturnLineItemsApi $returnLineItems = null;
    private ?WarrantiesApi $warranties = null;
    private ?WarrantyApi $warranty = null;
    private ?WarrantyLineItemsApi $warrantyLineItems = null;
    private ?WorkOrdersApi $workOrders = null;
    private ?WorkOrderLineItemsApi $workOrderLineItems = null;

    public function __construct(
        ?string $apiKey = null,
        ?string $baseUrl = null,
        ?ClientInterface $httpClient = null,
        ?LoggerInterface $logger = null
    ) {
        $this->config = new Configuration();
        
        if ($apiKey !== null) {
            $this->config->setApiKey('Authorization', $apiKey);
            $this->config->setApiKeyPrefix('Authorization', 'Bearer');
        }
        
        if ($baseUrl !== null) {
            $this->config->setHost($baseUrl);
        }
        
        $this->httpClient = $httpClient ?? new Client([
            'timeout' => 30,
            'connect_timeout' => 10,
            'verify' => true,
        ]);
        
        $this->logger = $logger ?? new NullLogger();
    }

    /**
     * Create a StateSet client from environment variables
     */
    public static function fromEnvironment(?LoggerInterface $logger = null): self
    {
        $apiKey = $_ENV['STATESET_API_KEY'] ?? null;
        $baseUrl = $_ENV['STATESET_BASE_URL'] ?? null;
        
        return new self($apiKey, $baseUrl, null, $logger);
    }

    /**
     * Set API key for authentication
     */
    public function setApiKey(string $apiKey): self
    {
        $this->config->setApiKey('Authorization', $apiKey);
        $this->config->setApiKeyPrefix('Authorization', 'Bearer');
        
        return $this;
    }

    /**
     * Set base URL for the API
     */
    public function setBaseUrl(string $baseUrl): self
    {
        $this->config->setHost($baseUrl);
        
        return $this;
    }

    /**
     * Get accounts API instance
     */
    public function accounts(): AccountsApi
    {
        if ($this->accounts === null) {
            $this->accounts = new AccountsApi($this->httpClient, $this->config);
        }
        
        return $this->accounts;
    }

    /**
     * Get bill of materials API instance
     */
    public function billOfMaterials(): BillOfMaterialsApi
    {
        if ($this->billOfMaterials === null) {
            $this->billOfMaterials = new BillOfMaterialsApi($this->httpClient, $this->config);
        }
        
        return $this->billOfMaterials;
    }

    /**
     * Get bill of materials line items API instance
     */
    public function billOfMaterialsLineItems(): BillOfMaterialsLineItemsApi
    {
        if ($this->billOfMaterialsLineItems === null) {
            $this->billOfMaterialsLineItems = new BillOfMaterialsLineItemsApi($this->httpClient, $this->config);
        }
        
        return $this->billOfMaterialsLineItems;
    }

    /**
     * Get customers API instance
     */
    public function customers(): CustomersApi
    {
        if ($this->customers === null) {
            $this->customers = new CustomersApi($this->httpClient, $this->config);
        }
        
        return $this->customers;
    }

    /**
     * Get inventory items API instance
     */
    public function inventoryItems(): InventoryItemsApi
    {
        if ($this->inventoryItems === null) {
            $this->inventoryItems = new InventoryItemsApi($this->httpClient, $this->config);
        }
        
        return $this->inventoryItems;
    }

    /**
     * Get manufacture orders API instance
     */
    public function manufactureOrders(): ManufactureOrdersApi
    {
        if ($this->manufactureOrders === null) {
            $this->manufactureOrders = new ManufactureOrdersApi($this->httpClient, $this->config);
        }
        
        return $this->manufactureOrders;
    }

    /**
     * Get manufacture order line items API instance
     */
    public function manufactureOrderLineItems(): ManufactureOrderLineItemsApi
    {
        if ($this->manufactureOrderLineItems === null) {
            $this->manufactureOrderLineItems = new ManufactureOrderLineItemsApi($this->httpClient, $this->config);
        }
        
        return $this->manufactureOrderLineItems;
    }

    /**
     * Get messages API instance
     */
    public function messages(): MessagesApi
    {
        if ($this->messages === null) {
            $this->messages = new MessagesApi($this->httpClient, $this->config);
        }
        
        return $this->messages;
    }

    /**
     * Get notes API instance
     */
    public function notes(): NotesApi
    {
        if ($this->notes === null) {
            $this->notes = new NotesApi($this->httpClient, $this->config);
        }
        
        return $this->notes;
    }

    /**
     * Get returns API instance
     */
    public function returns(): ReturnsApi
    {
        if ($this->returns === null) {
            $this->returns = new ReturnsApi($this->httpClient, $this->config);
        }
        
        return $this->returns;
    }

    /**
     * Get return line items API instance
     */
    public function returnLineItems(): ReturnLineItemsApi
    {
        if ($this->returnLineItems === null) {
            $this->returnLineItems = new ReturnLineItemsApi($this->httpClient, $this->config);
        }
        
        return $this->returnLineItems;
    }

    /**
     * Get warranties API instance
     */
    public function warranties(): WarrantiesApi
    {
        if ($this->warranties === null) {
            $this->warranties = new WarrantiesApi($this->httpClient, $this->config);
        }
        
        return $this->warranties;
    }

    /**
     * Get warranty API instance
     */
    public function warranty(): WarrantyApi
    {
        if ($this->warranty === null) {
            $this->warranty = new WarrantyApi($this->httpClient, $this->config);
        }
        
        return $this->warranty;
    }

    /**
     * Get warranty line items API instance
     */
    public function warrantyLineItems(): WarrantyLineItemsApi
    {
        if ($this->warrantyLineItems === null) {
            $this->warrantyLineItems = new WarrantyLineItemsApi($this->httpClient, $this->config);
        }
        
        return $this->warrantyLineItems;
    }

    /**
     * Get work orders API instance
     */
    public function workOrders(): WorkOrdersApi
    {
        if ($this->workOrders === null) {
            $this->workOrders = new WorkOrdersApi($this->httpClient, $this->config);
        }
        
        return $this->workOrders;
    }

    /**
     * Get work order line items API instance
     */
    public function workOrderLineItems(): WorkOrderLineItemsApi
    {
        if ($this->workOrderLineItems === null) {
            $this->workOrderLineItems = new WorkOrderLineItemsApi($this->httpClient, $this->config);
        }
        
        return $this->workOrderLineItems;
    }

    /**
     * Execute API call with error handling and logging
     */
    public function executeWithLogging(callable $apiCall, string $operation): mixed
    {
        try {
            $this->logger->info("Executing StateSet API operation: {$operation}");
            $result = $apiCall();
            $this->logger->info("Successfully completed StateSet API operation: {$operation}");
            
            return $result;
        } catch (ApiException $e) {
            $this->logger->error("StateSet API error in {$operation}", [
                'code' => $e->getCode(),
                'message' => $e->getMessage(),
                'response_body' => $e->getResponseBody(),
            ]);
            
            throw new StateSetException(
                "API error in {$operation}: " . $e->getMessage(),
                $e->getCode(),
                $e
            );
        } catch (\Throwable $e) {
            $this->logger->error("Unexpected error in StateSet API operation: {$operation}", [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            
            throw new StateSetException(
                "Unexpected error in {$operation}: " . $e->getMessage(),
                0,
                $e
            );
        }
    }

    /**
     * Get the underlying configuration
     */
    public function getConfiguration(): Configuration
    {
        return $this->config;
    }

    /**
     * Get the HTTP client
     */
    public function getHttpClient(): ClientInterface
    {
        return $this->httpClient;
    }

    /**
     * Get the logger
     */
    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }
}