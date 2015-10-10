<?php

namespace Cronofy;

/**
 * Class Cronofy.
 */
class Cronofy
{
    /**
     * The Oauth2 Bearer-Token.
     *
     * @var string
     */
    protected $token;

    /**
     * The Api-Version to use.
     *
     * @var string
     */
    protected $version = 'v1';

    /**
     * Cronofy constructor.
     *
     * @param $apiToken
     * @param string $version
     */
    public function __construct($apiToken, $version = 'v1')
    {
        $this->token = $apiToken;
        $this->version = $version;
    }

    public function calendars()
    {
    }
}
