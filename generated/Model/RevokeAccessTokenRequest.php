<?php

namespace Tesla\Api\Model;

class RevokeAccessTokenRequest
{
    /**
     * The access token
     *
     * @var string
     */
    protected $token;
    /**
     * The access token
     *
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }
    /**
     * The access token
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token) : self
    {
        $this->token = $token;
        return $this;
    }
}