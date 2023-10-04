<?php

use CodeIgniter\HTTP\Response;

function er406($body){
    $response = response();

    $response->setStatusCode(Response::HTTP_NOT_ACCEPTABLE);
    $response->setBody($body);
    $response->setHeader('Content-Type', 'text/html');
    $response->noCache();

    // Sends the output to the browser
    // This is typically handled by the framework
    $response->send();
}

function er404(){
    $response = response();

    $response->setStatusCode(Response::HTTP_NOT_FOUND);
    $response->setBody('404');
    $response->setHeader('Content-Type', 'text/html');
    $response->noCache();

    // Sends the output to the browser
    // This is typically handled by the framework
    $response->send();
}