<?php

namespace TwoPlug\SdkDocway\Contexts;

use TwoPlug\SdkDocway\Helpers\CallApi;
use TwoPlug\SdkDocway\Types\Address;

class Client extends CallApi {

	private ?string $email;
	private ?string $userName;
	private ?string $password;
	private ?string $phoneNumber;
	private ?int $countryCode;
	private ?string $dateOfBirth;
	private ?string $gender;
	private ?float $weight;
	private ?float $height;
	private ?string $healthProblems;
	private ?string $allergiesAndReactions;
	private ?string $medicines;
	private ?string $bloodType;
	private ?string $healthInsuranceNumber;
	private ?string $partnerId;
	private ?string $motherName;
	private ?string $placeOfBirth;
	private ?array $addresses;

	public function __construct()
	{
		parent::__construct();

		$this->email = NULL;
		$this->userName = NULL;
		$this->password = NULL;
		$this->phoneNumber = NULL;
		$this->countryCode = NULL;
		$this->dateOfBirth = NULL;
		$this->gender = NULL;
		$this->weight = NULL;
		$this->height = NULL;
		$this->healthProblems = NULL;
		$this->allergiesAndReactions = NULL;
		$this->medicines = NULL;
		$this->bloodType = NULL;
		$this->healthInsuranceNumber = NULL;
		$this->partnerId = NULL;
		$this->motherName = NULL;
		$this->placeOfBirth = NULL;
		$this->addresses = NULL;
	}

	/**
	 * @return string|null
	 */
	public function getEmail(): ?string
	{
		return $this->email;
	}

	/**
	 * @param string|null $email
	 * @return Patient
	 */
	public function setEmail(?string $email): self
	{
		$this->email = $email;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getUserName(): ?string
	{
		return $this->userName;
	}

	/**
	 * @param string|null $userName
	 * @return Patient
	 */
	public function setUserName(?string $userName): self
	{
		$this->userName = $userName;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getPassword(): ?string
	{
		return $this->password;
	}

	/**
	 * @param string|null $password
	 * @return Patient
	 */
	public function setPassword(?string $password): self
	{
		$this->password = $password;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getPhoneNumber(): ?string
	{
		return $this->phoneNumber;
	}

	/**
	 * @param string|null $phoneNumber
	 * @return Patient
	 */
	public function setPhoneNumber(?string $phoneNumber): self
	{
		$this->phoneNumber = $phoneNumber;
		return $this;
	}

	/**
	 * @return int|null
	 */
	public function getCountryCode(): ?int
	{
		return $this->countryCode;
	}

	/**
	 * @param int|null $countryCode
	 * @return Patient
	 */
	public function setCountryCode(?int $countryCode): self
	{
		$this->countryCode = $countryCode;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getDateOfBirth(): ?string
	{
		return $this->dateOfBirth;
	}

	/**
	 * @param string|null $dateOfBirth
	 * @return Patient
	 */
	public function setDateOfBirth(?string $dateOfBirth): self
	{
		$this->dateOfBirth = $dateOfBirth;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getGender(): ?string
	{
		return $this->gender;
	}

	/**
	 * @param string|null $gender
	 * @return Patient
	 */
	public function setGender(?string $gender): self
	{
		$this->gender = $gender;
		return $this;
	}

	/**
	 * @return float|null
	 */
	public function getWeight(): ?float
	{
		return $this->weight;
	}

	/**
	 * @param float|null $weight
	 * @return Patient
	 */
	public function setWeight(?float $weight): self
	{
		$this->weight = $weight;
		return $this;
	}

	/**
	 * @return float|null
	 */
	public function getHeight(): ?float
	{
		return $this->height;
	}

	/**
	 * @param float|null $height
	 * @return Patient
	 */
	public function setHeight(?float $height): self
	{
		$this->height = $height;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getHealthProblems(): ?string
	{
		return $this->healthProblems;
	}

	/**
	 * @param string|null $healthProblems
	 * @return Patient
	 */
	public function setHealthProblems(?string $healthProblems): self
	{
		$this->healthProblems = $healthProblems;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getAllergiesAndReactions(): ?string
	{
		return $this->allergiesAndReactions;
	}

	/**
	 * @param string|null $allergiesAndReactions
	 * @return Patient
	 */
	public function setAllergiesAndReactions(?string $allergiesAndReactions): self
	{
		$this->allergiesAndReactions = $allergiesAndReactions;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getMedicines(): ?string
	{
		return $this->medicines;
	}

	/**
	 * @param string|null $medicines
	 * @return Patient
	 */
	public function setMedicines(?string $medicines): self
	{
		$this->medicines = $medicines;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getBloodType(): ?string
	{
		return $this->bloodType;
	}

	/**
	 * @param string|null $bloodType
	 * @return Patient
	 */
	public function setBloodType(?string $bloodType): self
	{
		$this->bloodType = $bloodType;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getHealthInsuranceNumber(): ?string
	{
		return $this->healthInsuranceNumber;
	}

	/**
	 * @param string|null $healthInsuranceNumber
	 * @return Patient
	 */
	public function setHealthInsuranceNumber(?string $healthInsuranceNumber): self
	{
		$this->healthInsuranceNumber = $healthInsuranceNumber;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getPartnerId(): ?string
	{
		return $this->partnerId;
	}

	/**
	 * @param string|null $partnerId
	 * @return Patient
	 */
	public function setPartnerId(?string $partnerId): self
	{
		$this->partnerId = $partnerId;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getMotherName(): ?string
	{
		return $this->motherName;
	}

	/**
	 * @param string|null $motherName
	 * @return Patient
	 */
	public function setMotherName(?string $motherName): self
	{
		$this->motherName = $motherName;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getPlaceOfBirth(): ?string
	{
		return $this->placeOfBirth;
	}

	/**
	 * @param string|null $placeOfBirth
	 * @return Patient
	 */
	public function setPlaceOfBirth(?string $placeOfBirth): self
	{
		$this->placeOfBirth = $placeOfBirth;
		return $this;
	}

	/**
	 * @return array|null
	 */
	public function getAddresses(): ?array
	{
		return $this->addresses;
	}

	/**
	 * @param array|null $addresses
	 * @return Patient
	 */
	public function addAddresses(Address $addresses): self
	{
		$this->addresses[] = $addresses;
		return $this;
	}

	/**
	 * Add Patient Holder or Dependents
	 * @param Patient|null $patient
	 * @param string|null $patientId
	 * @return object
	 */
	public function savePatient(?Patient $patient = NULL, ?string $patientId = NULL): object
	{
		$body = $this->toArray($patient ?? $this);

		$endpoint = ( ! isset($patientId)) ? 'client/api/patients' : "client/api/patients/{$patientId}/dependents";

		return $this->call('POST', $endpoint, array_filter($body, function ($value) {
			return ! is_null($value);
		}));
	}

	/**
	 * Get Patient by Id
	 * @param string|null $patientId
	 * @return object
	 */
	public function getPatient(?string $patientId=null): object
	{
		return $this->call('GET', "client/api/patients/{$patientId}");
	}

	/**
	 * Parse props to array
	 * @param Patient $patient
	 * @return array
	 */
	protected function toArray(Patient $patient): array
	{
		return [
			'email' => $patient->getEmail(),
			'userName' => $patient->getUserName(),
			'password' => $patient->getPassword(),
			'phoneNumber' => $patient->getPhoneNumber(),
			'countryCode' => $patient->getCountryCode(),
			'dateOfBirth' => $patient->getDateOfBirth(),
			'gender' => $patient->getGender(),
			'weight' => $patient->getWeight(),
			'height' => $patient->getHeight(),
			'healthProblems' => $patient->getHealthProblems(),
			'allergiesAndReactions' => $patient->getAllergiesAndReactions(),
			'medicines' => $patient->getMedicines(),
			'bloodType' => $patient->getBloodType(),
			'healthInsuranceNumber' => $patient->getHealthInsuranceNumber(),
			'partnerId' => $patient->getPartnerId(),
			'motherName' => $patient->getMotherName(),
			'placeOfBirth' => $patient->getPlaceOfBirth(),
			'addresses' => $patient->getAddresses(),
		];
	}
}
