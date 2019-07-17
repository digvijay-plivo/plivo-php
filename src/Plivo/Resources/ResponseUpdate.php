<?php

namespace Plivo\Resources;

use Plivo\Exceptions\PlivoRestException;

/**
 * Class ResponseUpdate
 * @package Plivo\Resources
 */
class ResponseUpdate
{
    /**
     * @var
     */
    public $_message;

    /**
     * @var
     */
    public $apiId;

    /**
     * @var
     */
    public $statusCode;

    public $invalid_number;

    /**
     * ResponseUpdate constructor.
     * @param $message
     */
    public function __construct($apiId, $message,$statusCode = 200, $invalid_number)
    {
        $this->_message = $message;
        $this->apiId = $apiId;
        $this->statusCode = $statusCode;
        $this->invalid_number = $invalid_number;
    }

    /**
     * @param $name
     * @return mixed
     * @throws PlivoRestException
     */
    function __get($name)
    {
        $method = 'get' . ucfirst($name);
        if (method_exists($this, $method)) {
            return $this->$method();
        }

        throw new PlivoRestException('Unknown Response property ' . $name);
    }
    /**
     * Get the API ID
     * @return mixed
     */
    public function getApiId()
    {
        return $this->apiId;
    }
    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->_message;
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function getContent()
    {
        return $this->invalid_number;
    }
}