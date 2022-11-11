<?php

namespace TwoPlug\SdkDocway\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use TwoPlug\SdkDocway\Configuration;

class CallApi {
	private array $header;
	private Configuration $config;

	/**
	 * @param Configuration|null $config
	 */
	public function __construct(?Configuration $config = NULL)
	{
		$this->config = $config ?? new Configuration();

		$this->client = new Client([
			'base_uri' => $this->config->getUrl(),
			'timeout' => 60
		]);

		$this->credential = $this->config->getCredential();
		$this->header = array_merge([
			'User-Agent' => 'SDKDocway/1.0',
			'Content-Type' => 'application/json'
		], $this->config->getHttpHeader());
	}

	/**
	 * @return string
	 */
	public function accessToken(): string
	{
		$headers = array_merge([
			'Content-Type' => 'application/x-www-form-urlencoded'
		], $this->header);
		$options = [
			'form_params' => $this->config->getCredential()
		];

		$url = "auth/connect/token";
		$req = new Request('POST', $url, $headers);
		$res = $this->client->sendAsync($req, $options)->wait();
		return $res->getBody();
	}

	/**
	 * @param string $method
	 * @param string $endpoint
	 * @param array|null $body
	 * @return object
	 */
	public function call(string $method, string $endpoint, ?array $body = NULL): object
	{
		$token = $this->accessToken();
		$headers = array_merge($this->header, [
			'Content-type' => 'application/json',
			'Authorization' => "{$token['token_type']} {$token['access_token']}"
		]);
		$body = ( ! empty($body)) ? json_encode($body) : NULL;
		$req = new Request($method, $endpoint, $headers, $body);
		$res = $this->client->sendAsync($req)->wait();

		return json_decode($res->getBody(), FALSE);
	}
}
