<?php
use PHPUnit\Framework\TestCase;


class ClientTest extends TestCase
{
   function test_if_client_returns_a_correct_response()
   {
       $client = new \Jinas\Jobsicle\Client;

       $this->assertEquals(200, $client->status_code);
   }
}