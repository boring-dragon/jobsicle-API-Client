<?php

namespace Jinas\Jobsicle;

use GuzzleHttp\Client as GuzzleClient;

class Client implements IClient
{
    public $status_code;
    public $status;

    protected $api_response;


    public function __construct()
    {
        $this->setAPIResponse();
    }
    protected function setAPIResponse()
    {
        try {
            $client =  new GuzzleClient;
            $response = $client->request('GET', IClient::JOBSICLE_API_URL);

            $this->status_code = $response->getStatusCode();
            $this->status = $response->getReasonPhrase();

            $this->api_response = collect(json_decode($response->getBody(), true)["data"]);
        } catch (\Exception $e) {
            throw new \Exception('Error communicating with API');
        }
    }

    public function getAPIResponse()
    {
        return $this->api_response;
    }
}
