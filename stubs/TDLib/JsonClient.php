<?php

namespace TDLib;

use Exception;
use TDApi\TDLibParameters;

class JsonClient extends BaseJsonClient
{
    /**
     * @param int|null $timeout
     * @return string
     */
    public function receive(int $timeout = null): string
    {
    }

    /**
     * @param string $query - json-encoded string request
     * @param float $timeout
     * @return string - json-encoded library response
     * @throws Exception
     */
    public function query(string $query, float $timeout = null): string
    {
    }

    /**
     * @return array<int, string> - array of all tdlib responses since the previous getReceivedResponses call
     */
    public function getReceivedResponses(): array
    {
    }

    /**
     * @param string $key
     * @param float|null $timeout
     * @return string
     * @throws Exception
     */
    public function checkDatabaseEncryptionKey(string $key, float $timeout = null): string
    {
    }

    /**
     * @param string $key
     * @param float|null $timeout
     * @return string
     * @throws Exception
     */
    public function setDatabaseEncryptionKey(string $key = '', float $timeout = null): string
    {
    }

    /**
     * @param TDLibParameters $parameters
     * @param float|null $timeout
     * @return string
     * @throws Exception
     */
    public function setTdlibParameters(TDLibParameters $parameters, float $timeout = null): string
    {
    }

    /**
     * @param string $phone_number
     * @param float|null $timeout
     * @return string
     * @throws Exception
     */
    public function setAuthenticationPhoneNumber(string $phone_number, float $timeout = null): string
    {
    }

    /**
     * @param float $defaultTimeout - default timeout value in seconds. Default value is 0.5
     */
    public function setDefaultTimeout(float $defaultTimeout)
    {
    }

    /**
     * @param float|null $timeout
     * @return string
     * @throws Exception
     */
    public function getAuthorizationState(float $timeout = null): string
    {
    }
}
