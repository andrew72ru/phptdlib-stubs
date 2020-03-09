<?php

namespace TDLib;

class BaseJsonClient
{
    /**
     * BaseJsonClient constructor.
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function __destruct()
    {
    }

    /**
     * @param string $query
     * @return string
     */
    public function execute(string $query): string
    {
    }

    /**
     * @param string $query
     */
    public function send(string $query)
    {
    }

    /**
     * @param int $timeout
     * @return string
     */
    public function receive(int $timeout): string
    {
    }
}