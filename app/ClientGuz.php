<?php

namespace App;
//------------
use GuzzleHttp\Client;

class ClientGuz 
{
    protected $client;

    function __construct(){

        $this->client = new Client([
            'base_uri' => 'https://api.magicthegathering.io',
            'headers' => [
                'Accept'     => 'application/json'                
            ]
        ]);
    }

    public function getCollection(  ){ //array $query

        $response = $this->client->get( 'v1/sets' );

        $collection = json_decode( $response->getBody() );
        dd($collection);
    }

}
