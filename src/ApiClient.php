<?php

namespace Laonet1688Api;

/**
 * Class ApiClient
 *
 */
class ApiClient
{
    /**
     * @var AccessToken
     */
    private $accessToken;

    /**
     * ApiClient constructor.
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->accessToken = $apiKey;
    }

    /**
     * Get Access Token (api key)
     * @return string $this;
     */
    public function getAccessToken()
    {
        if (is_null($this->accessToken)) {
            return false;
        }
        return $this->accessToken;
    }
}