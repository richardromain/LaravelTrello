<?php

namespace Richardromain\LaravelTrello;

//use GuzzleHttp\Client;

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

    public function __construct()
    {
        //
    }

    public function getBoards()
    {
        return 'foo';
    }
}