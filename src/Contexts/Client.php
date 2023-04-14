<?php

namespace O4l3x4ndr3\SdkDocway\Contexts;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkDocway\Configuration;
use O4l3x4ndr3\SdkDocway\Helpers\CallApi;
use O4l3x4ndr3\SdkDocway\Types\Address;

class Client extends CallApi
{

    private ?string $clientId;
    private ?string $id;
    private ?string $name;
    private ?string $cpf;
    private ?string $email;
    private ?string $userName;
    private ?string $password;
    private ?string $phoneNumber;
    private ?int $countryCode;
    private ?string $dateOfBirth;
    private ?string $age;
    private ?string $gender;
    private ?float $weight;
    private ?float $height;
    private ?string $healthProblems;
    private ?string $allergiesAndReactions;
    private ?string $medicines;
    private ?string $bloodType;
    private ?string $healthInsurance;
    private ?string $healthInsuranceNumber;
    private ?string $partnerId;
    private ?string $motherName;
    private ?string $placeOfBirth;
    private ?array $addresses;
    private ?array $creditCards;
    private ?array $dependents;
    private ?bool $isSUSEnabled;
    private ?string $createDate;

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);

        $this->name = null;
        $this->cpf = null;
        $this->email = null;
        $this->userName = null;
        $this->password = null;
        $this->phoneNumber = null;
        $this->countryCode = null;
        $this->dateOfBirth = null;
        $this->gender = null;
        $this->weight = null;
        $this->height = null;
        $this->healthProblems = null;
        $this->allergiesAndReactions = null;
        $this->medicines = null;
        $this->bloodType = null;
        $this->healthInsuranceNumber = null;
        $this->partnerId = null;
        $this->motherName = null;
        $this->placeOfBirth = null;
        $this->addresses = null;
        $this->clientId = null;
        $this->id = null;
        $this->age = null;
        $this->creditCards = null;
        $this->dependents = null;
        $this->isSUSEnabled = null;
        $this->createDate = null;
    }

    /**
     * @return string|null
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    /**
     * @param string|null $clientId
     *
     * @return Client
     */
    public function setClientId(?string $clientId): Client
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     *
     * @return Client
     */
    public function setId(?string $id): Client
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return Client
     */
    public function setName(?string $name): Client
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    /**
     * @param string|null $cpf
     *
     * @return Client
     */
    public function setCpf(?string $cpf): Client
    {
        $this->cpf = $cpf;
        return $this;
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
     *
     * @return Client
     */
    public function setEmail(?string $email): Client
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
     *
     * @return Client
     */
    public function setUserName(?string $userName): Client
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
     *
     * @return Client
     */
    public function setPassword(?string $password): Client
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
     *
     * @return Client
     */
    public function setPhoneNumber(?string $phoneNumber): Client
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
     *
     * @return Client
     */
    public function setCountryCode(?int $countryCode): Client
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
     *
     * @return Client
     */
    public function setDateOfBirth(?string $dateOfBirth): Client
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAge(): ?string
    {
        return $this->age;
    }

    /**
     * @param string|null $age
     *
     * @return Client
     */
    public function setAge(?string $age): Client
    {
        $this->age = $age;
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
     *
     * @return Client
     */
    public function setGender(?string $gender): Client
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
     *
     * @return Client
     */
    public function setWeight(?float $weight): Client
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
     *
     * @return Client
     */
    public function setHeight(?float $height): Client
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
     *
     * @return Client
     */
    public function setHealthProblems(?string $healthProblems): Client
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
     *
     * @return Client
     */
    public function setAllergiesAndReactions(?string $allergiesAndReactions): Client
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
     *
     * @return Client
     */
    public function setMedicines(?string $medicines): Client
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
     *
     * @return Client
     */
    public function setBloodType(?string $bloodType): Client
    {
        $this->bloodType = $bloodType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHealthInsurance(): ?string
    {
        return $this->healthInsurance;
    }

    /**
     * @param string|null $healthInsurance
     *
     * @return Client
     */
    public function setHealthInsurance(?string $healthInsurance): Client
    {
        $this->healthInsurance = $healthInsurance;
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
     *
     * @return Client
     */
    public function setHealthInsuranceNumber(?string $healthInsuranceNumber): Client
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
     *
     * @return Client
     */
    public function setPartnerId(?string $partnerId): Client
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
     *
     * @return Client
     */
    public function setMotherName(?string $motherName): Client
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
     *
     * @return Client
     */
    public function setPlaceOfBirth(?string $placeOfBirth): Client
    {
        $this->placeOfBirth = $placeOfBirth;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getCreditCards(): ?array
    {
        return $this->creditCards;
    }

    /**
     * @param array|null $creditCards
     *
     * @return Client
     */
    public function setCreditCards(?array $creditCards): Client
    {
        $this->creditCards = $creditCards;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getDependents(): ?array
    {
        return $this->dependents;
    }

    /**
     * @param array|null $dependents
     *
     * @return Client
     */
    public function setDependents(?array $dependents): Client
    {
        $this->dependents = $dependents;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isSUSEnabled(): ?bool
    {
        return $this->isSUSEnabled;
    }

    /**
     * @param bool|null $isSUSEnabled
     *
     * @return Client
     */
    public function setIsSUSEnabled(?bool $isSUSEnabled): Client
    {
        $this->isSUSEnabled = $isSUSEnabled;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreateDate(): ?string
    {
        return $this->createDate;
    }

    /**
     * @param string|null $createDate
     *
     * @return Client
     */
    public function setCreateDate(?string $createDate): Client
    {
        $this->createDate = $createDate;
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
     * @param Address $addresses
     *
     * @return Client
     */
    public function addAddresses(Address $addresses): self
    {
        $this->addresses[] = $addresses;
        return $this;
    }

    /**
     * Add Patient Holder or Dependents
     *
     * @param Client|null $patient
     * @param string|null $patientId
     *
     * @return object
     * @throws GuzzleException
     */
    public function savePatient(?Client $patient = null, ?string $patientId = null): self
    {
        $body = $this->toArray($patient ?? $this);

        $endpoint = (!isset($patientId)) ? 'client/api/patients' : "client/api/patients/{$patientId}/dependents";

        $client = $this->call(
            'POST', $endpoint, array_filter($body, function ($value) {
            return !is_null($value);
        })
        );

        $this->fill($client);

        return $this;
    }

    /**
     * Get Patient by Id
     *
     * @param string|null $patientId
     *
     * @return object
     * @throws GuzzleException
     */
    public function getPatient(?string $patientId = null): object
    {
        return $this->call('GET', "client/api/patients/{$patientId}");
    }

    /**
     * Parse props to array
     *
     * @param Client $client
     *
     * @return array
     */
    private function toArray(Client $client): array
    {
        return [
            'name' => $client->getName(),
            'cpf' => preg_replace('/\D/', '', $client->getCpf()),
            'email' => $client->getEmail(),
            'userName' => $client->getUserName(),
            'password' => $client->getPassword(),
            'phoneNumber' => $client->getPhoneNumber(),
            'countryCode' => $client->getCountryCode(),
            'dateOfBirth' => $client->getDateOfBirth(),
            'sexo' => $client->getGender(),
            'weight' => $client->getWeight(),
            'height' => $client->getHeight(),
            'healthProblems' => $client->getHealthProblems(),
            'allergiesAndReactions' => $client->getAllergiesAndReactions(),
            'medicines' => $client->getMedicines(),
            'bloodType' => $client->getBloodType(),
            'healthInsuranceNumber' => $client->getHealthInsuranceNumber(),
            'partnerId' => $client->getPartnerId(),
            'motherName' => $client->getMotherName(),
            'placeOfBirth' => $client->getPlaceOfBirth(),
            'addresses' => $client->getAddresses(),
        ];
    }

    private function fill(object $client): void
    {
        foreach ($client as $prop => $value) {
            $this->{$prop} = $value;
        }
    }
}
