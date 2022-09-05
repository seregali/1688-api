<?php

use GuzzleHttp\Client;

namespace Laonet1688Api;

/**
 * Class SendRequest
 *
 */
class SendRequest
{
    private $baseUrl = 'https://1688.laonet.online/index.php';
    private $apiKey;
    private $client;
    private $method = 'GET';

    /**
     * SendRequest constructor.
     * @param string $apiKey
     * @return \GuzzleHttp\Client
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->client = new \GuzzleHttp\Client();
        return $this->client;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function getDefaultParams()
    {
        return [
            'route'=>'api_tester/call',
            'key'=>$this->getApiKey(),
            'is_promotion'=>1,
            'lang'=>'zh-CN'
        ];
    }

    public function send($params = [])
    {
        $url = $this->baseUrl.'?'.http_build_query(array_merge($this->getDefaultParams(), $params));
        return $this->client->request($this->method, $url);
    }
}