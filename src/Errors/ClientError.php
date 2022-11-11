<?php

namespace TwoPlug\SdkDocway\Errors;

use GuzzleHttp\Exception\ClientException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class CustomError extends ClientException {

	public function __construct(string $message, RequestInterface $request, ResponseInterface $response, \Throwable $previous = NULL, array $handlerContext = [])
	{
		parent::__construct($message, $request, $response, $previous, $handlerContext);
	}
}
