<?php

namespace TwoPlug\SdkDocway\Types;

class Address {
	private ?string $street;
	private ?string $number;
	private ?string $complement;
	private ?string $neighborhood;
	private ?string $cep;
	private ?string $city;
	private ?string $state;
	private ?string $latitude;
	private ?string $longitude;

	/**
	 * @param string|null $street
	 * @param string|null $number
	 * @param string|null $complement
	 * @param string|null $neighborhood
	 * @param string|null $cep
	 * @param string|null $city
	 * @param string|null $state
	 * @param string|null $latitude
	 * @param string|null $longitude
	 */
	public function __construct(?string $street = NULL, ?string $number = NULL, ?string $complement = NULL, ?string $neighborhood = NULL, ?string $cep = NULL, ?string $city = NULL, ?string $state = NULL, ?string $latitude = NULL, ?string $longitude = NULL)
	{
		$this->street = $street;
		$this->number = $number;
		$this->complement = $complement;
		$this->neighborhood = $neighborhood;
		$this->cep = $cep;
		$this->city = $city;
		$this->state = $state;
		$this->latitude = $latitude;
		$this->longitude = $longitude;
	}

	/**
	 * @return string|null
	 */
	public function getStreet(): ?string
	{
		return $this->street;
	}

	/**
	 * @param string|null $street
	 */
	public function setStreet(?string $street): void
	{
		$this->street = $street;
	}

	/**
	 * @return string|null
	 */
	public function getNumber(): ?string
	{
		return $this->number;
	}

	/**
	 * @param string|null $number
	 */
	public function setNumber(?string $number): void
	{
		$this->number = $number;
	}

	/**
	 * @return string|null
	 */
	public function getComplement(): ?string
	{
		return $this->complement;
	}

	/**
	 * @param string|null $complement
	 */
	public function setComplement(?string $complement): void
	{
		$this->complement = $complement;
	}

	/**
	 * @return string|null
	 */
	public function getNeighborhood(): ?string
	{
		return $this->neighborhood;
	}

	/**
	 * @param string|null $neighborhood
	 */
	public function setNeighborhood(?string $neighborhood): void
	{
		$this->neighborhood = $neighborhood;
	}

	/**
	 * @return string|null
	 */
	public function getCep(): ?string
	{
		return $this->cep;
	}

	/**
	 * @param string|null $cep
	 */
	public function setCep(?string $cep): void
	{
		$this->cep = $cep;
	}

	/**
	 * @return string|null
	 */
	public function getCity(): ?string
	{
		return $this->city;
	}

	/**
	 * @param string|null $city
	 */
	public function setCity(?string $city): void
	{
		$this->city = $city;
	}

	/**
	 * @return string|null
	 */
	public function getState(): ?string
	{
		return $this->state;
	}

	/**
	 * @param string|null $state
	 */
	public function setState(?string $state): void
	{
		$this->state = $state;
	}

	/**
	 * @return string|null
	 */
	public function getLatitude(): ?string
	{
		return $this->latitude;
	}

	/**
	 * @param string|null $latitude
	 */
	public function setLatitude(?string $latitude): void
	{
		$this->latitude = $latitude;
	}

	/**
	 * @return string|null
	 */
	public function getLongitude(): ?string
	{
		return $this->longitude;
	}

	/**
	 * @param string|null $longitude
	 */
	public function setLongitude(?string $longitude): void
	{
		$this->longitude = $longitude;
	}

	/**
	 * Parse props to array
	 * @return array
	 */
	public function toArray(): array
	{
		return [
			'street' => $this->street,
			'number' => $this->number,
			'complement' => $this->complement,
			'neighborhood' => $this->neighborhood,
			'cep' => $this->cep,
			'city' => $this->city,
			'state' => $this->state,
			'latitude' => $this->latitude,
			'longitude' => $this->longitude,
		];
	}
}