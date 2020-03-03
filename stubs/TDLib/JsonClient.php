<?php
namespace TDLib;

class JsonClient extends BaseJsonClient {
    public function receive(int $timeout = null):string
    {
    }

    /**
     * @param string $query - json-encoded string request
     * @param int|null $timeout
     * @return string - json-encoded library response
     * @throws \Exception
     */
    public function query(string $query, int $timeout = null):string
    {
    }

    /**
     * @return string[] - array of all tdlib responses since the previous getReceivedResponses call
     */
    public function getReceivedResponses():array
    {
    }

    /**
     * @throws \Exception
     */
    public function checkDatabaseEncryptionKey(string $key, float $timeout = null):string
    {
    }

    /**
     * @throws \Exception
     */
    public function setDatabaseEncryptionKey(string $key = '', float $timeout = null):string
    {
    }

    /**
     * @throws \Exception
     */
    public function setTdlibParameters(\TDApi\TDLibParameters $parameters, float $timeout = null):string
    {
    }

    /**
     * @throws \Exception
     */
    public function setAuthenticationPhoneNumber(string $phone_number, float $timeout = null):string
    {
    }

    /**
     * @param float $defaultTimeout - default timeout value in seconds. Default value is 0.5
     */
    public function setDefaultTimeout(float $defaultTimeout)
    {
    }

    /**
     * @throws \Exception
     */
    public function getAuthorizationState(float $timeout = null):string
    {
    }
}
