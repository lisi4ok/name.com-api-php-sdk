<?php

namespace lisi4ok\NameDotCom;

use  lisi4ok\NameDotCom\Contracts\ConfigurationInterface;

/**
 * Class Configuration
 * @package lisi4ok\NameDotCom
 */
class Configuration implements ConfigurationInterface
{
    const URI = 'https://api.name.com';
    const URI_DEV = 'https://api.dev.name.com';

    /**
     * @var string
     */
    private $uri;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $token;

    /**
     * Configuration constructor.
     * @param string $mode
     * @param int $apiVersion
     * @param string $username
     * @param string $token
     */
    public function __construct(string $mode, int $apiVersion, string $username, string $token)
    {
        if ($mode == 'production') {
            $this->uri = static::URI . '/v' . $apiVersion . '/';
        } else {
            $this->uri = static::URI_DEV . '/v' . $apiVersion . '/';
        }
        $this->username = $username;
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
}