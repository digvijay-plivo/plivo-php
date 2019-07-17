<?php

namespace Plivo\Resources\Message;


use Plivo\Resources\ResponseUpdate;

/**
 * Class MessageCreateResponse
 * @package Plivo\Resources\Message
 */
class MessageCreateResponse extends ResponseUpdate
{
    protected $messageUuid = [];

    /**
     * MessageCreateResponse constructor.
     * @param $message
     * @param array $messageUuid
     */
    public function __construct($message, array $messageUuid, $apiId,$statusCode, $invalid_number)
    {
        parent::__construct($apiId, $message,$statusCode, $invalid_number);
        $this->messageUuid = $messageUuid;
        $this->invalid_number = $invalid_number;
        
    }

    /**
     * Get the message ID
     * @return array
     */
    public function getMessageUuid()
    {
        return $this->messageUuid;
    }
}