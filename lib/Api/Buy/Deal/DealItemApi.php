<?php
/**
 * DealItemApi
 * PHP version 7.3
 *
 * @category Class
 * @package  Ebay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Deal API
 *
 * <span class=\"tablenote\"><b>Note:</b> This is a <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> API available only to select developers approved by business units.</span><br /><br />This API allows third-party developers to search for and retrieve details about eBay deals and events, as well as the items associated with those deals and events.
 *
 * The version of the OpenAPI document: v1.3.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ebay\Api\Buy\Deal;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Ebay\ApiException;
use Ebay\Configuration;
use Ebay\HeaderSelector;
use Ebay\ObjectSerializer;

/**
 * DealItemApi Class Doc Comment
 *
 * @category Class
 * @package  Ebay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DealItemApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getDealItems
     *
     * @param  string $x_ebay_c_marketplace_id A header used to specify the eBay marketplace ID. (required)
     * @param  string $category_ids The unique identifier of the eBay category for the search. (optional)
     * @param  string $commissionable A filter for commissionable deals. Restriction: This filter is currently only supported for the US marketplace. (optional)
     * @param  string $delivery_country A filter for items that can be shipped to the specified country. (optional)
     * @param  string $limit The maximum number of items, from the current result set, returned on a single page. (optional)
     * @param  string $offset The number of items that will be skipped in the result set. This is used with the limit field to control the pagination of the output. For example, if the offset is set to 0 and the limit is set to 10, the method will retrieve items 1 through 10 from the list of items returned. If the offset is set to 10 and the limit is set to 10, the method will retrieve items 11 through 20 from the list of items returned. Default: 0 (optional)
     *
     * @throws \Ebay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ebay\Model\Buy\Deal\DealItemSearchResponse
     */
    public function getDealItems($x_ebay_c_marketplace_id, $category_ids = null, $commissionable = null, $delivery_country = null, $limit = null, $offset = null)
    {
        list($response) = $this->getDealItemsWithHttpInfo($x_ebay_c_marketplace_id, $category_ids, $commissionable, $delivery_country, $limit, $offset);
        return $response;
    }

    /**
     * Operation getDealItemsWithHttpInfo
     *
     * @param  string $x_ebay_c_marketplace_id A header used to specify the eBay marketplace ID. (required)
     * @param  string $category_ids The unique identifier of the eBay category for the search. (optional)
     * @param  string $commissionable A filter for commissionable deals. Restriction: This filter is currently only supported for the US marketplace. (optional)
     * @param  string $delivery_country A filter for items that can be shipped to the specified country. (optional)
     * @param  string $limit The maximum number of items, from the current result set, returned on a single page. (optional)
     * @param  string $offset The number of items that will be skipped in the result set. This is used with the limit field to control the pagination of the output. For example, if the offset is set to 0 and the limit is set to 10, the method will retrieve items 1 through 10 from the list of items returned. If the offset is set to 10 and the limit is set to 10, the method will retrieve items 11 through 20 from the list of items returned. Default: 0 (optional)
     *
     * @throws \Ebay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ebay\Model\Buy\Deal\DealItemSearchResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDealItemsWithHttpInfo($x_ebay_c_marketplace_id, $category_ids = null, $commissionable = null, $delivery_country = null, $limit = null, $offset = null)
    {
        $request = $this->getDealItemsRequest($x_ebay_c_marketplace_id, $category_ids, $commissionable, $delivery_country, $limit, $offset);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Ebay\Model\Buy\Deal\DealItemSearchResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ebay\Model\Buy\Deal\DealItemSearchResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Ebay\Model\Buy\Deal\DealItemSearchResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ebay\Model\Buy\Deal\DealItemSearchResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getDealItemsAsync
     *
     * @param  string $x_ebay_c_marketplace_id A header used to specify the eBay marketplace ID. (required)
     * @param  string $category_ids The unique identifier of the eBay category for the search. (optional)
     * @param  string $commissionable A filter for commissionable deals. Restriction: This filter is currently only supported for the US marketplace. (optional)
     * @param  string $delivery_country A filter for items that can be shipped to the specified country. (optional)
     * @param  string $limit The maximum number of items, from the current result set, returned on a single page. (optional)
     * @param  string $offset The number of items that will be skipped in the result set. This is used with the limit field to control the pagination of the output. For example, if the offset is set to 0 and the limit is set to 10, the method will retrieve items 1 through 10 from the list of items returned. If the offset is set to 10 and the limit is set to 10, the method will retrieve items 11 through 20 from the list of items returned. Default: 0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDealItemsAsync($x_ebay_c_marketplace_id, $category_ids = null, $commissionable = null, $delivery_country = null, $limit = null, $offset = null)
    {
        return $this->getDealItemsAsyncWithHttpInfo($x_ebay_c_marketplace_id, $category_ids, $commissionable, $delivery_country, $limit, $offset)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDealItemsAsyncWithHttpInfo
     *
     * @param  string $x_ebay_c_marketplace_id A header used to specify the eBay marketplace ID. (required)
     * @param  string $category_ids The unique identifier of the eBay category for the search. (optional)
     * @param  string $commissionable A filter for commissionable deals. Restriction: This filter is currently only supported for the US marketplace. (optional)
     * @param  string $delivery_country A filter for items that can be shipped to the specified country. (optional)
     * @param  string $limit The maximum number of items, from the current result set, returned on a single page. (optional)
     * @param  string $offset The number of items that will be skipped in the result set. This is used with the limit field to control the pagination of the output. For example, if the offset is set to 0 and the limit is set to 10, the method will retrieve items 1 through 10 from the list of items returned. If the offset is set to 10 and the limit is set to 10, the method will retrieve items 11 through 20 from the list of items returned. Default: 0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDealItemsAsyncWithHttpInfo($x_ebay_c_marketplace_id, $category_ids = null, $commissionable = null, $delivery_country = null, $limit = null, $offset = null)
    {
        $returnType = '\Ebay\Model\Buy\Deal\DealItemSearchResponse';
        $request = $this->getDealItemsRequest($x_ebay_c_marketplace_id, $category_ids, $commissionable, $delivery_country, $limit, $offset);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getDealItems'
     *
     * @param  string $x_ebay_c_marketplace_id A header used to specify the eBay marketplace ID. (required)
     * @param  string $category_ids The unique identifier of the eBay category for the search. (optional)
     * @param  string $commissionable A filter for commissionable deals. Restriction: This filter is currently only supported for the US marketplace. (optional)
     * @param  string $delivery_country A filter for items that can be shipped to the specified country. (optional)
     * @param  string $limit The maximum number of items, from the current result set, returned on a single page. (optional)
     * @param  string $offset The number of items that will be skipped in the result set. This is used with the limit field to control the pagination of the output. For example, if the offset is set to 0 and the limit is set to 10, the method will retrieve items 1 through 10 from the list of items returned. If the offset is set to 10 and the limit is set to 10, the method will retrieve items 11 through 20 from the list of items returned. Default: 0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getDealItemsRequest($x_ebay_c_marketplace_id, $category_ids = null, $commissionable = null, $delivery_country = null, $limit = null, $offset = null)
    {
        // verify the required parameter 'x_ebay_c_marketplace_id' is set
        if ($x_ebay_c_marketplace_id === null || (is_array($x_ebay_c_marketplace_id) && count($x_ebay_c_marketplace_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_ebay_c_marketplace_id when calling getDealItems'
            );
        }

        $resourcePath = '/deal_item';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($category_ids !== null) {
            if('form' === 'form' && is_array($category_ids)) {
                foreach($category_ids as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['category_ids'] = $category_ids;
            }
        }
        // query params
        if ($commissionable !== null) {
            if('form' === 'form' && is_array($commissionable)) {
                foreach($commissionable as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['commissionable'] = $commissionable;
            }
        }
        // query params
        if ($delivery_country !== null) {
            if('form' === 'form' && is_array($delivery_country)) {
                foreach($delivery_country as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['delivery_country'] = $delivery_country;
            }
        }
        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['limit'] = $limit;
            }
        }
        // query params
        if ($offset !== null) {
            if('form' === 'form' && is_array($offset)) {
                foreach($offset as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['offset'] = $offset;
            }
        }

        // header params
        if ($x_ebay_c_marketplace_id !== null) {
            $headerParams['X-EBAY-C-MARKETPLACE-ID'] = ObjectSerializer::toHeaderValue($x_ebay_c_marketplace_id);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
