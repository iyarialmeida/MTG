<?php

namespace App;


//--- Librerías para Cliente/Api Rest--
use Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
use GuzzleHttp\Client;

class Conection 
{
    protected $client;
	
	protected $response;

	protected $result;

	function __construct()
	{
		$this->client = new Client(['base_uri' => 'https://api.magicthegathering.io' ]);

       		
	}

	public function getCollection( String $uri, Array $query ){
		
		$this->response = $this->client->get( $uri, ['form_params' => $query] );

		$this->result = json_decode($this->response->getBody());
		
		return $this->result;
       
	}
}
