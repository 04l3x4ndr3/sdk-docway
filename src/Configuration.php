<?php
/**
 * Copyright (c) 2022.
 * @author Alexandre G R Alves
 * @repository:  https://github.com/04l3x4ndr3/sdk-docway
 */

namespace TwoPlug\SdkDocway;

class  Configuration {
	public const ENV_STAGE = "stage";
	public const ENV_PRODUCTION = "production";
	public const URL_STAGE = "https://service.docway.com.br/stage-";
	public const URL_PRODUCTION = "https://service.docway.com.br/";

	private string $environment;
	private array $credentials;
	private array $httpHeader;

	public function __construct(?string $grantType = null, ?string $scope = null, ?string $patternId = null, ?string $clientId = null, ?string $clientSecret = null)
	{
		$this->setCredential(
			$_SERVER['DOCWAY_GRANT_TYPE'] ?? $grantType,
			$_SERVER['DOCWAY_SCOPE'] ?? $scope,
			$_SERVER['DOCWAY_PATTERNID'] ?? $patternId,
			$_SERVER['DOCWAY_CLIENT_ID'] ?? $clientId,
			$_SERVER['DOCWAY_CLIENT_SECRET'] ?? $clientSecret
		);

		$this->setEnvironment($_SERVER['DOCWAY_ENVIRONMENT'] ?? self::ENV_STAGE);
	}

	/**
	 * @return array
	 */
	public function getCredential(): array
	{
		return $this->credentials;
	}

	/**
	 * @param string|null $grantType
	 * @param string|null $scope
	 * @param string|null $patternId
	 * @param string|null $clientId
	 * @param string|null $clientSecret
	 * @return void
	 */
	public function setCredential(?string $grantType=null, ?string $scope=null, ?string $patternId=null, ?string $clientId=null, ?string $clientSecret=null): void
	{
		$cur = $this->credentials;
		$new = [
			'grant_type' => $grantType,
			'scope' => $scope,
			'patternId' => $patternId,
			'client_id' => $clientId,
			'client_secret' => $clientSecret
		];
		$this->credentials = array_merge($cur, $new);
	}

	/**
	 * @param bool $val
	 * @return bool
	 */
	public function showHttpErrors(bool $val = FALSE): bool
	{
		return $val;
	}

	/**
	 * @return string
	 */
	public function getEnvironment(): string
	{
		return $this->environment;
	}

	/**
	 * @param string $environment
	 * @return void
	 */
	public function setEnvironment(string $environment): void
	{
		$this->environment = $environment;
	}

	/**
	 * @return array
	 */
	public function getHttpHeader(): array
	{
		return $this->httpHeader;
	}

	/**
	 * @param array $httpHeader
	 */
	public function setHttpHeader(array $httpHeader): void
	{
		$this->httpHeader = $httpHeader;
	}


	/**
	 * @return string
	 */
	public function getUrl(): string
	{
		if ($this->getEnvironment() === self::ENV_PRODUCTION)
		{
			return self::URL_PRODUCTION;
		}

		return self::URL_STAGE;
	}
}
