<?php

namespace O4l3x4ndr3\SdkDocway\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkDocway\Configuration;

class CallApi {
	private Configuration $config;
	private ?array $header;
	private ?array $credential;

	/**
	 * @param Configuration|null $config
	 */
	public function __construct(?Configuration $config = NULL)
	{
		$this->config = $config ?? new Configuration();
		$this->credential = $this->config->getCredential();
		$this->header = array_merge([
			'User-Agent' => 'SDKDocway/1.0',
			'Content-Type' => 'application/json'
		], $this->config->getHttpHeader());
	}

	/**
	 * @return object
	 * @throws GuzzleException
	 */
	public function accessToken(): object
	{
		$client = new Client();
		$options = [
			'headers' => [
				'Content-Type' => 'application/x-www-form-urlencoded',
			],
			'form_params' => $this->config->getCredential()
		];
		$res = $client->request('POST', $this->config->getUrl() . 'auth/connect/token', $options);
		return json_decode($res->getBody());
	}

	/**
	 * @param string $method
	 * @param string $endpoint
	 * @param array|null $body
	 * @return object
	 * @throws GuzzleException
	 */
	public function call(string $method, string $endpoint, ?array $body = NULL): ?object
	{
		$token = $this->accessToken();
		$client = new Client();
		$options = array_filter([
			'headers' => [
				'Content-type' => 'application/json',
				'Authorization' => "{$token->token_type} {$token->access_token}"
			],
			'json' => $body
		]);
		$res = $client->request($method, "{$this->config->getUrl()}{$endpoint}", $options);
		return (object) json_decode($res->getBody());
	}

	/**
	 * @return Configuration
	 */
	public function getConfig(): Configuration
	{
		return $this->config;
	}
}
