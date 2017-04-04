<?php

namespace Richardromain\LaravelTrello;

class Trello {

    /**
     * The key to authenticate on Trello API
     *
     * @var string
     */
    protected $key;

    /**
     * The token for your application Trello
     *
     * @var string
     */
    protected $token;

    /**
     * Methods to create the Trello object
     *
     * @param $key
     * @param $token
     * @return $this
     */
    public function create($key, $token)
    {
        $this->key = $key;
        $this->token = $token;

        return $this;
    }
}